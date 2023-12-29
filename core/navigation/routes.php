<?php
$website_name = 'GreenHills';
// Home screen 
$router->get($website_name . '', 'core/controllers/home.php');
// Register screen
$router->post($website_name . '/register', 'core/controllers/register.php');
$router->get($website_name . '/register', 'core/controllers/register.php');
// Login screen
$router->get($website_name . '/login', 'core/controllers/login.php');
$router->post($website_name . '/login', 'core/controllers/login.php');
// Logout screen
$router->get($website_name . '/logout', 'core/controllers/logout.php');
// Library screen
$router->get($website_name . '/library', 'core/controllers/library.php');
// Library Islamic Stories screen
$router->get($website_name . '/islamic-stories', 'core/controllers/islamic_stories.php');
// Library Educational Stories screen
$router->get($website_name . '/educ-stories', 'core/controllers/educational_stories.php');
// Library Entertainment Stories screen
$router->get($website_name . '/fun-stories', 'core/controllers/fun_stories.php');
// Admin Movies List screen
$router->get($website_name . '/admin-movies', 'views/admin/movies/movies_index.php');
// Admin Add movie screen
$router->get($website_name . '/admin-add-movie', 'views/admin/movies/add_movie.php');
// Admin Edit movie screen
$router->get($website_name . '/admin-edit-movie', 'views/admin/movies/edit_movie.php');
// Admin Songs List screen
$router->get($website_name . '/admin-songs', 'views/admin/songs/songs_index.php');
// Admin Add a song screen
$router->get($website_name . '/admin-add-song', 'views/admin/songs/add_song.php');
// Admin Edit song screen
$router->get($website_name . '/admin-edit-song', 'views/admin/songs/edit_song.php');

// Admin stories screen
$router->get($website_name . '/admin-stories', 'views/admin/stories/stories_index.php');
// Admin Add a story screen
$router->get($website_name . '/admin-add-story', 'views/admin/stories/add_story.php');
// Admin Edit story screen
$router->get($website_name . '/admin-edit-story', 'views/admin/stories/edit_story.php');
// Admin controller
$router->post($website_name . '/admin-submit', 'core/controllers/admin.php');
// Upload image screen
$router->get($website_name . '/admin-img-upload', 'views/admin/upload/images/image_upload.php');
$router->post($website_name . '/admin-img-upload', 'core/controllers/image_upload.php');
// Upload PDF file screen
$router->get($website_name . '/admin-pdf-upload', 'views/admin/upload/pdf/pdf_upload.php');
$router->post($website_name . '/admin-pdf-upload', 'views/admin/upload/pdf/pdf_upload.php');