<?php

$emailAddress =
    $dateOfBirth  =  $password = $gender =
    $fatherName = $guardian = $city = $country = $homeAddress =
    $phoneNumber = $languageToLearn = $levelAtLanguage = $canSpeakTheLang =
    $motherName =   $childName   =   $didStudyTheLang = "";


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
    $GLOBALS['dateOfBirth'] = prepareInput($_POST["dateOfBirth"]);
    $GLOBALS['childName'] = prepareInput($_POST["childName"]);
    $GLOBALS['gender'] = prepareInput($_POST["gender"]);
    $GLOBALS['motherName'] = prepareInput($_POST["motherName"]);
    $GLOBALS['fatherName'] = prepareInput($_POST["fatherName"]);
    $GLOBALS['guardian'] = prepareInput($_POST["guardian"]);
    $GLOBALS['city'] = prepareInput($_POST["city"]);
    $GLOBALS['country'] = prepareInput($_POST["country"]);
    $GLOBALS['homeAddress'] = prepareInput($_POST["homeAddress"]);
    $GLOBALS['phoneNumber'] = prepareInput($_POST["phoneNumber"]);
    $GLOBALS['languageToLearn'] = prepareInput($_POST["languageToLearn"]);
    $GLOBALS['levelAtLanguage'] = prepareInput($_POST["levelAtLanguage"]);
    $GLOBALS['canSpeakTheLang'] = prepareInput($_POST["canSpeakTheLang"]);
    $GLOBALS['didStudyTheLang'] = prepareInput($_POST["didStudyTheLang"]);
}
function createNewStudentFromInput(string $userId): Student
{
    $newStudent = new Student();
    $newStudent->userId = $userId;
    $newStudent->name = $GLOBALS["childName"];
    $newStudent->gender = Gender::from($GLOBALS["gender"]);
    $newStudent->dateOfBirth = date_create($GLOBALS["dateOfBirth"]);
    $newStudent->fatherName = $GLOBALS["fatherName"];
    $newStudent->motherName = $GLOBALS["motherName"];
    $newStudent->phoneNumber = $GLOBALS["phoneNumber"];
    $newStudent->guardian = Guardian::from($GLOBALS["guardian"]);
    $newStudent->languageToLearn = Language::from($GLOBALS["languageToLearn"]);
    $newStudent->levelAtLanguage = LanguageLevel::from($GLOBALS["levelAtLanguage"]);
    $newStudent->didStudyTheLang = $GLOBALS["didStudyTheLang"];
    $newStudent->city = $GLOBALS["city"];
    $newStudent->country = $GLOBALS["country"];
    $newStudent->canSpeakTheLang = $GLOBALS["canSpeakTheLang"];
    $newStudent->homeAddress = $GLOBALS["homeAddress"];
    return $newStudent;
}