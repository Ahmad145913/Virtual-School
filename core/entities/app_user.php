<?php
include 'core/entities/enums.php';
class AppUser
{
    public string $email;
    public UserRole $userRole;
    public string $userId;
    public string $password;

    public function __construct(
        string $email,
        string $password,
        UserRole $userRole,
        string $id
    ) {
        $this->email = $email;
        $this->userRole = $userRole;
        $this->userId = $id;
        $this->password = $password;
    }

    public static function fromJson(array $json)
    {
        return new AppUser(
            $json['email'],
            $json['password'],
            UserRole::from($json['role']),
            $json['userId'],
        );
    }
}
