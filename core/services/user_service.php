<?php


class UserService
{

    public  function addUserToDB(AppUser $user)
    {
        $sql = "INSERT INTO user (email,password,role,userId) VALUES (:email,:userPassword,:userRole,:userId)";
        $stmt = GreenHillsDB::getConnection()->prepare($sql);
        $stmt->bindParam('email', $user->email, PDO::PARAM_STR);
        $stmt->bindParam('userPassword', $user->password, PDO::PARAM_STR);
        $stmt->bindValue('userRole', $user->userRole->getValue());
        $stmt->bindParam('userId', $user->userId);
        $stmt->execute();
    }

    public function getUserByEmail(string $email): Response
    {
        require_once 'core/entities/app_user.php';

        $query = "SELECT * FROM user WHERE email= :email limit 1";
        $stmt = GreenHillsDB::getConnection()->prepare($query);
        $stmt->bindParam('email', $email, PDO::PARAM_STR);
        $rows = $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();

        if (count($rows) == 0) {
            return Response::failure("User with provided email not found!");
        } else {
            $userData = $rows[0];
            $user = AppUser::fromJson($userData);
            return Response::success("", $user);
        }
    }
}
