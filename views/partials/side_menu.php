<?php $imgs_folder = 'assets/images/side_menu/'; ?>
<style>
span {
    color: #143865;
    font-weight: bold;
}

.side-menu {
    position: relative;
    border-right: 1px solid darkgray;
    z-index: 1;
    float: left;
}
</style>


<div class="col-3 side-menu">

    <div class="position-sticky pt-md-5">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <img src=<?= $imgs_folder . "d.png" ?> width="50" height="50">

                    <span class="ml-2" style="color: rgb(2, 92, 2)">Data Management</span>
                </a>
            </li>
            <div style="  margin-left: 50px;">
                <li class="nav-item">
                    <a class="nav-link" href="admin-movies">
                        <img src=<?= $imgs_folder . "mov.png" ?> width="40" height="30">

                        <span class="ml-2">Movies</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-stories">
                        <img src=<?= $imgs_folder . "bo.png" ?> width="40" height="30">

                        <span class="ml-2">Stories</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="admin-songs">
                        <img src=<?= $imgs_folder . "ss.png" ?> width="40" height="30">

                        <span class="ml-2">Songs</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="admin-img-upload">
                        <img src=<?= $imgs_folder . "imm.png" ?> width="40" height="30">
                        <span class="ml-2">Upload Images</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-pdf-upload">
                        <img src=<?= $imgs_folder . "p.png" ?> width="40" height="30">

                        <span class="ml-2">upload PDF</span>
                    </a>
                </li>
        </ul>
    </div>

</div>