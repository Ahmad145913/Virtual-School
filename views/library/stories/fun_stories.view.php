<?php
require_once 'views/partials/header.view.php';
$pdf_path = 'assets/pdf/';
$imgs_path = 'assets/images/';
?>
<style>
<?=require_once 'resources/css/library/story.css'?>
</style>

<section class="title">
    <img class="img-s2" src="assets/images/library_page/read.png" alt="Educational Stories">
    <p> Fun Stories</p>
</section>

<section class="wrap">
    <div id="arrow-left" class="arrow"></div>

    <div id="arrow-right" class="arrow"></div>
    <?php foreach ($stories_collections as $key => $collection) : ?>
    <div class="slide slide1">
        <div class="slide-content">
            <?php foreach ($collection as $story) : ?>

            <div class="s1 sl">
                <a href=<?= $pdf_path . $story['Pdf_Name'] ?> target="_blank">
                    <img class="storys-img w3-image" src=<?= $imgs_path . $story['image_name']; ?>
                        alt=<?= $story['name']; ?>>
                </a>
            </div>

            <?php endforeach ?>
        </div>
    </div>
    <br>
    <br>
    <?php endforeach ?>
</section>


<?php
require_once 'views/partials/footer.view.php';
?>