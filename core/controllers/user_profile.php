<?php
require_once 'student_info_form_inc.php';
require_once '../services/students_service.php';
require_once '../entities/student.php';
require_once '../data_sources/database.php';

$student = getCurrentStudent();
function getCurrentStudent(): Student|string
{
    $studentsService = new StudentsService(GreenHillsDB::getConnection());
    $currentUserId = $_SESSION['identity']['userId'];
    $response =   $studentsService->getStudentByUserId($currentUserId);
    if ($response->success) {
        return $response->result;
    } else return $response->message;
}
