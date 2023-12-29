<?php require_once 'views/partials/header.view.php'; ?>
<?php require_once 'views/partials/side_menu.php'; ?>


<style>
.upload-form {
    display: flex;
    margin-bottom: 200px;
    /* justify-content: center; */
    padding-top: 60px;
    padding-left: 30px;
}


.upload-form .image-box {
    width: 300px;
}

.upload-form h2 {
    text-align: center;
    color: #4D4D4D;
}

.upload-form .tb {
    width: 100%;
    height: 40px;
    margin-bottom: 5px;
    padding-left: 5px;
}

.upload-form .file_input {
    margin-bottom: 10px;
}

.upload-form .btn {
    width: 100%;
    height: 40px;
    border: none;
    border-radius: 3px;
    background: #27a465;
    color: #f7f7f7;
    margin-bottom: 10px;
}

.upload-form .msg {
    color: red;
    text-align: center;
}
</style>



<div class="upload-form">
    <div class="image-box">
        <form method="POST" name="upfrm" action=<?= 'admin-img-upload?returnUri=' . $_SERVER['REDIRECT_URL'] ?>
            enctype="multipart/form-data">
            <input type="file" name="fileImg" class="file_input" />
            <input type="submit" value="Upload" name="btn_upload" class="btn" />
        </form>
        <div class="msg">
            <?php if (isset($_REQUEST['success'])) : ?>
            <?php if ($_REQUEST['success']) : ?>

            <span>Image uploaded successfully!</span>
            <?php else : ?>
            <span>An error ocurred, couldn't uploaded the image!</span>

            <?php endif ?>
            <?php endif ?>
        </div>
    </div>
</div>

<?php require_once 'views/partials/footer.view.php'; ?>