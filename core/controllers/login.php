<?php
require_once 'core/helpers/identity_helper.php';

$emailAddress = $password = "";

$loginState = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    storeInput();

    require_once "core/services/auth_service.php";
    require_once 'core/entities/app_user.php';
    require_once 'core/data_sources/database.php';

    $authService = new AuthService(GreenHillsDB::getConnection(), new UserService());

    $loginResponse = $authService->login($emailAddress, $password);

    if (!$loginResponse->success) {
        $loginState = $loginResponse->message;
    } else {
        $currentUser = $loginResponse->result;
        IdentityHelper::setUserIdentityInCurrentSession($currentUser);
        Router::directToHomePage();
    }
}


function prepareInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function storeInput()
{
    $GLOBALS['emailAddress'] = prepareInput($_POST["email"]);
    $GLOBALS['password'] = prepareInput($_POST["password"]);
}

IdentityHelper::preventLoggedInUserAccess();
require_once 'views/auth/login.view.php';
