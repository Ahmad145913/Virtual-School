<?php
$assets_path = 'assets/images/';

require 'core/data_sources/my_sqli_connect.php';

require_once 'views/partials/header.view.php';
?>

<div class="container">
    <div class="row">

        <?php require_once('views/partials/side_menu.php')   ?>

        <div class="col-9">

            <table class=" table table-bordered table-striped caption-top" style=" width:100%;">
                <h4 style="margin-top:50px">Movies List
                    <a href="admin-add-movie" class="btn btn-primary float-end" style="background-color:#143865">Add
                        Movie</a>
                </h4>
                <br>

                <?php
                $query = "SELECT * FROM movies ";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) : ?>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th> Name</th>
                            <th>Link</th>
                            <th>Image</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($query_run as $movies) : ?>

                            <tr>
                                <td><?= $movies['id']; ?></td>
                                <td><?= $movies['name']; ?></td>
                                <td><?= $movies['url']; ?></td>
                                <td><img class="w3-image" style="max-width:360px;max-height:500px" src=<?= $assets_path . $movies['image_name']; ?>>
                                </td>
                                <td>
                                    <a href="admin-edit-movie?id=<?= $movies['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    <form action="admin-submit" method="POST" class="d-inline">
                                        <button type="submit" name="delete_movies" value="<?= $movies['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                <?php else : ?>
                    <tbody>
                        <h5> No Movies were Found! </h5>
                    </tbody>
                <?php endif ?>
            </table>
        </div>
    </div>
</div>


<?php

require_once 'views/partials/footer.view.php';
?>