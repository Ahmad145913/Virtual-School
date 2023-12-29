<?php
$pdf_path = 'assets/pdf/';
$imgs_path = 'assets/images/';

require 'core/data_sources/my_sqli_connect.php';

require_once 'views/partials/header.view.php';
?>
<div class="container">

    <div class="row">

        <?php require_once('views/partials/side_menu.php')   ?>

        <div class="col-9">

            <table class=" table table-bordered table-striped caption-top" style=" width:100%;">
                <h4 style="margin-top:50px">Stories List
                    <a href="admin-add-story" class="btn btn-primary float-end" style="background-color:#143865">Add
                        Story</a>
                </h4>
                <br>
                <?php
                $query = "SELECT * FROM stories ";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) : ?>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Pdf Name</th>
                            <th>Image Name</th>
                            <th>Type</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($query_run as $stories) : ?>
                            <tr>
                                <td><?= $stories['id']; ?></td>
                                <td><?= $stories['name']; ?></td>
                                <td><a href=<?php echo 'assets/pdf/' . $stories['Pdf_Name'] ?>>View</a></td>
                                <td><img class="w3-image" style="max-width: 350px;max-height:300px" src=<?= $imgs_path . $stories['image_name']; ?>></td>
                                <td><?= $stories['Type']; ?></td>

                                <td>
                                    <a href="admin-edit-story?id=<?= $stories['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    <form action="admin-submit" method="POST" class="d-inline">
                                        <button type="submit" name="delete_stories" value="<?= $stories['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                <?php else : ?>
                    <tbody>
                        <h5>No Stories Were Found!</h5>
                    </tbody>
                <?php endif ?>
            </table>
        </div>
    </div>
</div>
<?php

require_once 'views/partials/footer.view.php';
?>