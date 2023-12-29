<?php

require_once 'core/data_sources/my_sqli_connect.php';

$error = "";
if (isset($_POST["btn_upload"]) == "Upload") {
    $file_tmp = $_FILES["fileImg"]["tmp_name"];
    $file_name = $_FILES["fileImg"]["name"];



    $file_path = "assets/images/" . $file_name;


    $query = "INSERT INTO image(filename,file_path)VALUES('$file_name','$file_path')";
    $query_run = mysqli_query($con, $query);

    $image_moved = move_uploaded_file($file_tmp, $file_path);
    $error = "<p align=center>File " . $_FILES["fileImg"]["name"] . "" . "<br />Image saved into Table.";
    if ($image_moved) {
        header('Location:' . $_REQUEST['returnUri'] . '?success=true');
    } else {
        header('Location:' . $_REQUEST['returnUri'] . '?success=false');
    }
}