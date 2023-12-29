 <?php

    require_once 'core/helpers/identity_helper.php';
    require_once 'core/helpers/request_helper.php';

    $title = RequestHelper::uri();
    // TITLE OF THE PAGE
    $title = strtr($title, '/', ' - ');
    ?>
 <!DOCTYPE html>
 <html lang="en">


 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="shortcut icon"
         href="https://thumbs.dreamstime.com/b/green-hills-logo-design-template-white-background-green-hills-logo-design-template-211376567.jpg">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
         integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka%20One">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" href="resources/css/library/library.css" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <title><?= $title ?></title>

     <style>
     header .navbar-brand {
         font-size: 22px;
         font-weight: 600;
     }

     header {
         font-weight: 600;
         font-size: 18px;
     }
     </style>
 </head>


 <body>
     <!-- HEADER -->
     <header>
         <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
             <div class="container">
                 <img src="https://thumbs.dreamstime.com/b/green-hills-logo-design-template-white-background-green-hills-logo-design-template-211376567.jpg"
                     class="w3-image" style="height:100%; width:100%;max-width:90px;">

                 <a class="navbar-brand w3-text-light-green">GreenHills</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                     <ul class="navbar-nav flex-grow-1">
                         <li class="nav-item w3-mobile">
                             <a class="nav-link w3-hover-text-blue text-dark-grey " href="">Home</a>
                         </li>

                         <?php if (IdentityHelper::hasLoggedInUser()) : ?>
                         <li class="nav-item w3-mobile">
                             <a class="nav-link w3-hover-text-blue text-dark-grey" href="library">Library</a>
                         </li>

                         <?php endif; ?>
                     </ul>
                     <ul class="navbar-nav">
                         <li class="nav-item w3-mobile">
                             <?php if (IdentityHelper::hasLoggedInUser()) : ?>

                             <?php if (IdentityHelper::userIsAdmin()) : ?>
                             <a class="nav-link w3-text-blue" href="admin-movies">Control panel</a>

                             <?php endif; ?>

                             <?php else : ?>

                             <a class="nav-link w3-text-deep-orange" href="register">Register</a>

                             <?php endif; ?>
                         </li>
                         <li class="nav-item w3-mobile">
                             <?php if (IdentityHelper::hasLoggedInUser()) : ?>
                             <a class="nav-link w3-text-red" href="logout">Logout</a>
                             <?php else : ?>
                             <a class="nav-link w3-text-black" href="login">Login</a>
                             <?php endif; ?>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>
     </header>
     <!-- END OF HEADER -->
     <main role="main" class="pb-3">