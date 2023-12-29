<?php require_once 'core/data_sources/my_sqli_connect.php';
require_once 'views/partials/header.view.php';
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit song details
                        <a href="admin-songs" class="btn btn-danger float-end"
                            style="background-color:#8BC34A;">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $id_songs = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM songs WHERE id='$id_songs' ";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $songs = mysqli_fetch_array($query_run);
                        }
                    }
                    ?>
                    <form action="admin-submit" method="POST">
                        <input type="hidden" name="id_songs" value="<?= $songs['id']; ?>">

                        <div class="mb-3">
                            <label> Name</label>
                            <input type="text" name="name" value="<?= $songs['name']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Link</label>
                            <input type="text" name="url" value="<?= $songs['url']; ?>" class="form-control">
                        </div>
                        <div>
                            <select name="imge" class="form-control">
                                <option>Select Image</option>
                                <?php
                                $sqli = "SELECT filename FROM `image`";
                                $result = mysqli_query($con, $sqli);
                                while ($row = mysqli_fetch_array($result)) {
                                    if ($row['filename'] == $songs['imge']) {
                                        echo '<option selected>' . $row['filename'] . '</option>';
                                    } else {
                                        echo '<option>' . $row['filename'] . '</option>';
                                    }
                                }
                                echo '</select>';
                                ?>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="update_songs" class="btn btn-primary"
                                style="background-color:#8BC34A;margin-top:50px;">
                                Update
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>