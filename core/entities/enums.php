<?php
require_once 'vendor/autoload.php';

use MyCLabs\Enum\Enum;


final class UserRole extends  Enum
{
    private const USER = 'User';
    private const ADMIN = 'Admin';
}

final class Gender extends  Enum
{

    private const MALE = 'Male';
    private const FEMALE = 'Female';
}
final class Language extends  Enum
{
    private const  ENGLISH = "English";
    private const  ARABIC = "Arabic";
    private const  FRENCH = "French";
}
final class LanguageLevel extends  Enum
{
    private const  BEGINNER = "Beginner";
    private const INTERMEDIATE = "Intermediate";
    private const  ADVANCED = "Advanced";
}
final class Guardian extends  Enum
{
    private const  FATHER = "Father";
    private const  MOTHER = "Mother";
    private const  BOTH_PARENTS = "BothParents";
}