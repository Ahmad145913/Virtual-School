<style>
.upload-pdf-form {
    display: flex;
    padding-left: 40px;
    margin-bottom: 200px;
}

.upload-pdf-form .image-box {
    width: 300px;
    margin-top: 30px;
}

.upload-pdf-form h2 {
    text-align: center;
    color: #4D4D4D;
}

.upload-pdf-form .tb {
    width: 100%;
    height: 40px;
    margin-bottom: 5px;
    padding-left: 5px;
}

.upload-pdf-form .file_input {
    margin-top: 10px;
    margin-bottom: 10px;
}

.upload-pdf-form .btn {
    width: 100%;
    height: 40px;
    border: none;
    border-radius: 3px;
    background: #27a465;
    color: #f7f7f7;
    margin-bottom: 10px;
}

.upload-pdf-form .msg {
    color: red;
    text-align: center;
}
</style>
<?php require_once 'views/partials/header.view.php';
require_once 'views/partials/side_menu.php';
require_once 'core/data_sources/my_sqli_connect.php';
?>
<?php

$message = '';
if (isset($_POST['submit'])) {

    $pdf = trim($_FILES['pdf']['name']);
    $pdf_type = $_FILES['pdf']['type'];
    $pdf_size = $_FILES['pdf']['size'];
    $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
    $pdf_store = trim("assets/pdf/" . $pdf);

    move_uploaded_file($pdf_tem_loc, $pdf_store);

    $sql = "INSERT INTO pdff(namefill, fillpath) values ('$pdf','$pdf_store')";
    $query_success = mysqli_query($con, $sql);
    if ($query_success) {
        $message = 'The pdf file was uploaded successfully!';
    }
}

?>
<div class="container mt-4">


    <div class="image-box">
        <div class=" upload-pdf-form">

            <form action="" method="post" enctype="multipart/form-data">
                <h5>
                    Choose a PDF file
                </h5>
                <br>
                <input id="pdf" type="file" name="pdf" value="" required class="file_input"> <br><br>
                <input id="upload" type="submit" name="submit" value="Upload" class="btn">
                <?php if (!empty($message)) : ?>
                <div class=" w3-panel w3-blue w3-round">

                    <h4><?= $message ?></h4>
                </div>
                <?php endif ?>
            </form>
        </div>
    </div>
    <?php require_once 'views/partials/footer.view.php'; ?>