<?php
require_once 'core/data_sources/database.php';
require_once 'core/entities/response.php';
require_once 'core/entities/app_user.php';
require_once 'core/entities/enums.php';

require_once 'user_service.php';
class AuthService
{
  protected $userService;
  protected $pdo;

  public function __construct(PDO $pdo, UserService $userService)
  {
    $this->pdo = $pdo;

    $this->userService = $userService;
  }

  public function checkIfEmailExists(string $email): bool
  {
    $sql = "SELECT id FROM user WHERE email=:email limit 1";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam('email', $email);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $rows = $stmt->fetchAll();

    return count($rows) == 1;
  }

  public function login(string $email, string $password): Response
  {
    $userHasRegistered =  $this->checkIfEmailExists($email);
    if (!$userHasRegistered) {
      return Response::failure("There is no user with the email '{$email}'");
    } else {
      $passwordIsCorrect =   $this->validateLoginCredentials($email, $password);
      if (!$passwordIsCorrect) {
        return Response::failure("Entered password is not correct, please try again");
      } else {
        return $this->userService->getUserByEmail($email);
      }
    }
  }
  public function registerNewUser(string $email, string $password, string $id): Response
  {
    if (self::checkIfEmailExists($email)) {
      return Response::failure("email already exists!");
    } else {
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      $user = new AppUser($email, $hashedPassword, UserRole::USER(), $id);
      $this->userService->addUserToDB($user);

      // get current user info form DB
      $currentUserResponse = $this->userService->getUserByEmail($email);
      if ($currentUserResponse->success) {
        return Response::success(
          "User was registered successfully",
          $currentUserResponse->result,
        );
      } else {
        return Response::failure("User registration failed!");
      }
    }
  }
  public function validateLoginCredentials(string $email, string $password): Response
  {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT :password FROM user WHERE email= :email limit 1";
    $stmt = $this->pdo->prepare($query);
    $stmt->bindParam('email', $email, PDO::PARAM_STR);
    $stmt->bindValue('password', $hashedPassword);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $rows = $stmt->fetchAll();

    if (count($rows) == 0) {
      return Response::failure("Incorrect password!");
    } else {
      return Response::success("Password is correct!");
    }
  }
}
