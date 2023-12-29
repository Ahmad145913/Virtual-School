<?php

require_once 'core/data_sources/my_sqli_connect.php';
$educational_stories_query = "SELECT * FROM stories WHERE Type = 'Educational stories'";

$query_result =
    mysqli_fetch_all(mysqli_query($con, $educational_stories_query), MYSQLI_ASSOC);
if (is_array($query_result)) {

    $educational_stories = $query_result;
    $stories_collections = array_chunk($educational_stories, 7);
} else {
    $stories_collections = array();
}

require_once 'views/library/stories/educational_stories.view.php';