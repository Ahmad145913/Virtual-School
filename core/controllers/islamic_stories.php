<?php
require_once 'core/data_sources/my_sqli_connect.php';
$islamic_stories_query = "SELECT * FROM stories WHERE Type = 'Islamic Stories'";

$query_result =
    mysqli_fetch_all(mysqli_query($con, $islamic_stories_query), MYSQLI_ASSOC);
if (is_array($query_result)) {

    $islamic_stories = $query_result;
    $stories_collections = array_chunk($islamic_stories, 7);
} else {
    $stories_collections = array();
}
require_once 'views/library/stories/islamic_stories.view.php';