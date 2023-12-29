<?php require_once 'views/partials/header.view.php';
$assets_path = 'assets/images/';
?>
<style>
<?php require 'resources/css/library/library.css'?>
</style>
<!-----START Library Header Section--------->

<div class="lib_container">
    <div class="library-header">
        <div class="title-h">welcome to library! <i class="fa fa-book"></i>
            <p class="word-p">Diverse library (&nbsp;<a href="#stories">stories</a> - <a href="#movies">Movies</a> -
                <a href="#songs">songs</a>&nbsp;)
            </p>
        </div>
    </div>
    <!-----End of Library Header Section--------->

    <!-----START Stories Section--------->
    <div class="title1 box title" id="stories"> stories </div>
    <div class="img-left "> </div>

    <div class="story box">
        <div class="s1">
            <a href="islamic-stories" target="_blank"><img class="img-s" src="assets/images/library_page/mosque.png"
                    alt=""></a>
            <a href="educ-stories" target="_blank"><img class="img-s" src="assets/images/library_page/reading.png"
                    alt="s"></a>
            <a href="fun-stories" target="_blank"><img class="img-s" src="assets/images/library_page/read.png"
                    alt="s"></a>
        </div>
        <div class="p-s">
            <p class="p1"><span class="p-s-span "> Islamic Stories <br></span>
                A diverse library of stories of the prophets</p>
            <p class="p2"><span class="p-s-span "> educational stories<br></span>
                Many meaningful and educational stories</p>
            <p class="p3"><span class="p-s-span "> fun stories<br></span>
                A collection of interesting and entertaining stories</p>
        </div>
    </div>

    <!-----End Of Stories Section--------->


    <!-------- START Movies Section--------->

    <div class="title2 box title" id="movies">
        Movies
    </div>
    <div class="movie box">
        <div class="cards-container">
            <div class="section-subtitle-card">
                <p>
                    We have a variety of useful and entertaining animations for all ages </p>
            </div>

            <?php foreach ($movies as $movie) : ?>
            <div class="card box">
                <p class="card-title"><?= $movie['name'] ?></p>
                <img class="card-img" src=<?= $assets_path . $movie['image_name']; ?> alt=""
                    style="width: 300px;height:270px">
                <a href=<?= $movie['url'] ?> target="_blank">
                    <button class="card-btn"> <i class="fab fa-youtube"></i> Watch Now</button>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-------- End Of Movies Section--------->
    <!-------- START Songs Section--------->

    <div class="title3 box title" id="songs"> songs </div>

    <div class="audio box">
        <div class="cards-container">
            <div class="section-subtitle-card">
                <p>We have a variety of entertaining and useful songs and chants at the same time </p>
            </div>
            <?php foreach ($songs as $song) : ?>
            <div class="card box">
                <p class="card-title"><?= $song['name'] ?></p>
                <img class="card-img" src=<?= $assets_path . $song['imge']; ?> alt="" style="width: 300px;height:270px">
                <a href=<?= $song['url'] ?> target="_blank">
                    <button class="card-btn"> <i class="fab fa-youtube"></i> Listen Now</button>
                </a>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
    <!-------- End of Songs Section--------->

</div>

<?php require_once 'views/partials/footer.view.php'; ?>