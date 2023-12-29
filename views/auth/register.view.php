<?php require_once 'views/partials/header.view.php' ?>


<div class="container w3-row ">
    <div class="w3-twothird  w3-container">
        <h4>Student registration form:</h4>
        <br>
        <h6 style="color:red">all fields marked with * are required fields</h6>
    </div>
    <div class="w3-third w3-container ">
        <img class="w3-image" src="https://i.pinimg.com/474x/cf/9c/a4/cf9ca4f86212f59b4a08b0ffb9c4f606.jpg" />
    </div>
</div>
<?php if (!empty($registerState)) : ?>
<div class="alert alert-danger">
    <h6>Registration failed: </h6> <?= $registerState ?>
</div>
<?php
endif;
require_once 'views/forms/student_info_form.view.php';

require_once 'views/partials/footer.view.php';
?>