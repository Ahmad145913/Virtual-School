<?php

require_once 'core/entities/student.php';
require_once 'core/entities/response.php';
require_once 'core/data_sources/database.php';

class StudentsService
{
    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    protected $pdo;

    public function addNewStudent(Student $student): Response
    {

        $sql = "INSERT INTO student (userId,name,fatherName,motherName,gender,dateOfBirth,city,country,homeAddress,phoneNumber,languageToLearn,levelAtLanguage,canSpeakTheLang,didStudyTheLang,guardian) 
        VALUES (:userId,:name,:fatherName,:motherName,:gender,:dateOfBirth,:city,:country,:homeAddress,:phoneNumber,:languageToLearn,:levelAtLanguage,:canSpeakTheLang,:didStudyTheLang,:guardian)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam('userId', $student->userId, PDO::PARAM_STR);
        $stmt->bindParam('name', $student->name, PDO::PARAM_STR);
        $stmt->bindParam('fatherName', $student->fatherName, PDO::PARAM_STR);
        $stmt->bindParam('motherName', $student->motherName, PDO::PARAM_STR);
        $stmt->bindValue('gender', $student->gender->getValue(), PDO::PARAM_STR);
        $stmt->bindValue('dateOfBirth', $student->dateOfBirth->format('Y-m-d'), PDO::PARAM_STR);
        $stmt->bindParam('city', $student->city, PDO::PARAM_STR);
        $stmt->bindParam('country', $student->country, PDO::PARAM_STR);
        $stmt->bindParam('homeAddress', $student->homeAddress, PDO::PARAM_STR);
        $stmt->bindParam('phoneNumber', $student->phoneNumber, PDO::PARAM_STR);
        $stmt->bindValue('languageToLearn', $student->languageToLearn->getValue(), PDO::PARAM_STR);
        $stmt->bindValue('levelAtLanguage', $student->levelAtLanguage->getValue(), PDO::PARAM_STR);
        $stmt->bindParam('canSpeakTheLang', $student->canSpeakTheLang, PDO::PARAM_STR);
        $stmt->bindParam('didStudyTheLang', $student->didStudyTheLang, PDO::PARAM_STR);
        $stmt->bindValue('guardian', $student->guardian->getValue(), PDO::PARAM_STR);

        $success =  $stmt->execute();
        if ($success) {
            return Response::success();
        } else {
            return Response::failure("failed to add new student");
        }
    }
    public function getStudentByUserId(string $userId): Response
    {
        $sql = 'SELECT * FROM student WHERE userId = :userId limit 1';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam('userId', $userId, PDO::PARAM_STR);

        $success =  $stmt->execute();

        if ($success) {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $response = $stmt->fetch();

            if (!$response) {
                return Response::failure("student with user id ." . $userId . " not found!");
            } else {

                $student = Student::fromJson($response);
                return Response::success("", $student);
            }
        } else {
            return Response::failure("failed to get student form database");
        }
    }
}
