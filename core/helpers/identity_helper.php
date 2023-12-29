<?php


class IdentityHelper
{
    static public function setUserIdentityInCurrentSession(AppUser $user)
    {
        $_SESSION['identity']['userId'] = $user->userId;
        $_SESSION['identity']['userRole'] = $user->userRole->getValue();
    }
    static public function userIsAdmin(): bool
    {
        require_once 'core/entities/enums.php';
        if (self::hasLoggedInUser()) {

            $userRoleString = $_SESSION['identity']['userRole'];
            return UserRole::ADMIN()->getValue() == $userRoleString;
        } else return false;
    }

    // Returns whether we have set [userId] & [userRole] in current
    // SESSION
    static public function hasLoggedInUser(): bool
    {
        return isset($_SESSION['identity']) && isset($_SESSION['identity']['userId'])
            && isset($_SESSION['identity']['userRole']);
    }
    // prevents current logged-in user from accessing the page
    static public function preventLoggedInUserAccess()
    {
        if (self::hasLoggedInUser()) {
            Router::directToHomePage();
        }
    }
    // Gives a user access to a page depending on his role
    static public function grantAccessToUser(UserRole $userRole)
    {

        switch ($userRole) {
            case UserRole::ADMIN():
                if (!self::userIsAdmin()) {
                    Router::directToHomePage();
                }
                break;
            case UserRole::USER():
                if (!self::hasLoggedInUser()) {
                    Router::directToHomePage();
                }
                break;

            default:
                echo 'Unimplemented access check for ' . $userRole;
                break;
        }
    }
}
