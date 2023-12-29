<?php

include 'core/controllers/student_info_form.php';
require_once 'core/helpers/identity_helper.php';


$registerState = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    storeInput();

    $newUserId = getNewUserId();
    require_once 'core/services/auth_service.php';
    require_once 'core/services/user_service.php';
    require_once 'core/services/students_service.php';

    $AuthService =  new AuthService(GreenHillsDB::getConnection(), new UserService());
    $studentsService = new StudentsService(GreenHillsDB::getConnection());
    // first register student as a new app user  
    $registerResponse = $AuthService->registerNewUser($emailAddress, $password, $newUserId);

    if (!$registerResponse->success) {
        $registerState =   $registerResponse->message;
    } else {
        // if user registered successfully, add the student to the DB.  
        $response =  $studentsService->addNewStudent(createNewStudentFromInput($newUserId));
        if ($response->success) {
            $currentUser = $registerResponse->result;

            IdentityHelper::setUserIdentityInCurrentSession($currentUser);
            Router::directToHomePage();
        } else {
            $registerState = $response->message;
        }
    }
}
function getNewUserId(): string
{
    define('MAX_ID_LENGTH', 10);
    $bytes = random_bytes(MAX_ID_LENGTH);
    return  str_split((bin2hex($bytes)), 30)[0];
}

IdentityHelper::preventLoggedInUserAccess();


require_once 'views/auth/register.view.php';