<?php
require_once 'core/data_sources/my_sqli_connect.php';
$fun_stories_query = "SELECT * FROM stories WHERE Type = 'fun stories'";

$query_result =
    mysqli_fetch_all(mysqli_query($con, $fun_stories_query), MYSQLI_ASSOC);
if (is_array($query_result)) {

    $fun_stories = $query_result;
    $stories_collections = array_chunk($fun_stories, 7);
} else {
    $stories_collections = array();
}

// a multidimensional array each key contains an associative array with 7 values(stories)    
require_once 'views/library/stories/fun_stories.view.php';