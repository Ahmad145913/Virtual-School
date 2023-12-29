<?php
require_once 'core/data_sources/my_sqli_connect.php';
require_once 'views/partials/header.view.php';

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="color:#8BC34A;">
                    <h4> Add New Song
                        <a href="admin-songs" class="btn btn-danger float-end"
                            style="background-color:#8BC34A;">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="admin-submit" method="POST">

                        <div class="mb-3">
                            <label> Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Link</label>
                            <input type="text" name="url" class="form-control">
                        </div>

                        <select name="imge" class="form-control">
                            <option>Select Image</option>
                            <?php

                            $sqli = "SELECT filename FROM `image`";
                            $result = mysqli_query($con, $sqli);
                            while ($row = mysqli_fetch_array($result)) :
                            ?>
                            <option value=<?= $row['filename'] ?>>
                                <?= $row['filename'] ?>
                            </option>
                            <?php endwhile ?>
                        </select>
                        <br>

                        <div class="mb-3 n">
                            <button type="submit" name="save_Songs" class="btn btn-primary"
                                style="background-color:#8BC34A;">Save </button>
                        </div>

                    </form>


                </div>
            </div>
        </div>