<?php
require 'core/data_sources/my_sqli_connect.php';


if (isset($_POST['delete_movies'])) {
    $id_movies = mysqli_real_escape_string($con, $_POST['delete_movies']);

    $query = "DELETE FROM movies WHERE id='$id_movies' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        header("Location: admin-movies");
        exit(0);
    } else {
        header("Location: admin-movies");
        exit(0);
    }
}

if (isset($_POST['update_movies'])) {
    $id_movies = mysqli_real_escape_string($con, $_POST['id_movies']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $url = mysqli_real_escape_string($con, $_POST['url']);
    $imge = mysqli_real_escape_string($con, $_POST['imge']);

    $query = "UPDATE movies SET name='$name', url='$url', image_name='$imge' WHERE id='$id_movies' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run > 0) {
        header("Location: admin-movies");
        exit(0);
    } else {
        header("Location: admin-movies");
        exit(0);
    }
}





if (isset($_POST['save_movies'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $url = mysqli_real_escape_string($con, $_POST['url']);
    $image_name = mysqli_real_escape_string($con, $_POST['imge']);



    $query = "INSERT INTO movies (name,url,image_name) VALUES ('$name','$url','$image_name')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "movies Created Successfully";
        header("Location:admin-movies");
        exit(0);
    } else {
        $_SESSION['message'] = "movies Not Created";
        header("Location:admin-movies");
        exit(0);
    }
}



if (isset($_POST['save_stories'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $image_name = mysqli_real_escape_string($con, $_POST['imge']);
    $Pdf_Name = mysqli_real_escape_string($con, $_POST['pdf']);


    $query = "INSERT INTO stories (name,image_name,Type,Pdf_Name) VALUES ('$name','$image_name','$type','$Pdf_Name')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {

        header("Location:admin-stories");
        exit(0);
    } else {
        header("Location: admin-stories");
        exit(0);
    }
}
if (isset($_POST['update_stories'])) {
    $id_stories = mysqli_real_escape_string($con, $_POST['id_stories']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $image_name = mysqli_real_escape_string($con, $_POST['imge']);
    $Pdf_Name = mysqli_real_escape_string($con, $_POST['pdf']);


    $query = "UPDATE `stories`  SET name='$name',Pdf_Name=' $Pdf_Name',image_name='$image_name',Type='$type'WHERE id='$id_stories' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        header("Location: admin-stories");
        exit(0);
    } else {
        header("Location: admin-stories");
        exit(0);
    }
}
if (isset($_POST['delete_stories'])) {
    $id_stories = mysqli_real_escape_string($con, $_POST['delete_stories']);

    $query = "DELETE FROM stories WHERE id='$id_stories' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        header("Location: admin-stories");
        exit(0);
    } else {
        header("Location:admin-stories");
        exit(0);
    }
}

if (isset($_POST['save_Songs'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $url = mysqli_real_escape_string($con, $_POST['url']);
    $image_name = mysqli_real_escape_string($con, $_POST['imge']);



    $query = "INSERT INTO songs (name,url,imge) VALUES ('$name','$url','$image_name')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        header("Location: admin-songs");
        exit(0);
    } else {
        header("Location: admin-songs");
        exit(0);
    }
}




if (isset($_POST['delete_songs'])) {
    $id_songs = mysqli_real_escape_string($con, $_POST['delete_songs']);

    $query = "DELETE FROM songs WHERE id='$id_songs' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        header("Location: admin-songs");
        exit(0);
    } else {
        header("Location: admin-songs");
        exit(0);
    }
}
if (isset($_POST['update_songs'])) {
    $id_songs = mysqli_real_escape_string($con, $_POST['id_songs']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $url = mysqli_real_escape_string($con, $_POST['url']);
    $imge = mysqli_real_escape_string($con, $_POST['imge']);

    $query = "UPDATE songs SET name='$name', url='$url', imge='$imge' WHERE id='$id_songs' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run > 0) {
        header("Location: admin-songs");
        exit(0);
    } else {
        header("Location: admin-songs");
        exit(0);
    }
}