<?php
require_once "enums.php";

class Student
{
    public string $userId;
    public string  $name;
    public Gender  $gender;
    public DateTime  $dateOfBirth;
    public string $motherName;
    public string $fatherName;
    public Guardian  $guardian;
    public string $city;
    public string $country;
    public string $homeAddress;
    public string $phoneNumber;
    public Language $languageToLearn;
    public LanguageLevel $levelAtLanguage;
    public bool   $canSpeakTheLang;
    public bool  $didStudyTheLang;

    public static function fromJson(array $json): Student
    {
        $student =  new Student();
        $student->userId =   $json['userId'];
        $student->name =    $json['name'];
        $student->gender =    Gender::from($json['gender']);
        $student->dateOfBirth =    DateTime::createFromFormat('Y-m-d H:i:s', $json['dateOfBirth']);
        $student->motherName =   $json['motherName'];
        $student->fatherName =   $json['fatherName'];
        $student->guardian =  Guardian::from($json['guardian']);
        $student->city =   $json['city'];
        $student->country =   $json['country'];
        $student->homeAddress =   $json['homeAddress'];
        $student->phoneNumber =   $json['phoneNumber'];
        $student->languageToLearn =  Language::from($json['languageToLearn']);
        $student->levelAtLanguage =  LanguageLevel::from($json['levelAtLanguage']);
        $student->canSpeakTheLang =  $json['canSpeakTheLang'];
        $student->didStudyTheLang =  $json['didStudyTheLang'];
        return $student;
    }
}