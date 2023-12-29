<?php
require_once 'core/entities/enums.php';
require_once 'core/helpers/identity_helper.php';
require_once 'core/data_sources/my_sqli_connect.php';

IdentityHelper::grantAccessToUser(UserRole::USER());


// movies 
$movies_query = "SELECT * FROM movies ";

$movies_query_result =
    mysqli_fetch_all(mysqli_query($con, $movies_query), MYSQLI_ASSOC);
if (is_array($movies_query_result)) {

    $movies = $movies_query_result;
} else {
    $movies = array();
}
// songs 
$songs_query = "SELECT * FROM songs ";
$songs_query_result =
    mysqli_fetch_all(mysqli_query($con, $songs_query), MYSQLI_ASSOC);
if (is_array($songs_query_result)) {

    $songs = $songs_query_result;
} else {
    $songs = array();
}


require_once 'views/library/library.view.php';