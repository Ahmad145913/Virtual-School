<?php require_once 'core/data_sources/my_sqli_connect.php';
require_once 'views/partials/header.view.php';
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit story details
                        <a href="admin-stories" class="btn btn-danger float-end"
                            style="background-color:#8BC34A;">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $id_stories = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM stories WHERE id='$id_stories' ";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $stories = mysqli_fetch_array($query_run);
                        }
                    }
                    ?>
                    <form action="admin-submit" method="POST">
                        <input type="hidden" name="id_stories" value="<?= $stories['id']; ?>">

                        <div class="mb-3">
                            <label> Name</label>
                            <input type="text" name="name" value="<?= $stories['name']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <?php
                            $l = "fun stories";
                            if ($stories['Type'] == $l) {
                                echo ' 
                                    <select   name="type" class="form-control"  >

                                    <option>Select type</option>

<option selected>fun stories</option>
<option>Educational stories</option>
<option>Islamic Stories</option>
</select>';
                            } elseif ($stories['Type'] == 'Educational stories') {
                                echo ' 
    <select   name="type" class="form-control"  >
             
    <option>Select type</option>

<option >fun stories</option>
<option selected>Educational stories</option>
<option>Islamic Stories</option>
</select>';
                            } else {
                                echo ' 
    <select   name="type" class="form-control"  >
                    
    <option>Select type</option>

<option >fun stories</option>
<option selected>Educational stories</option>
<option  selected>Islamic Stories</option>
</select>';
                            }


                            ?>
                        </div>

                        <div>
                            <select name="imge" class="form-control">
                                <option>Select Image</option>
                                <?php
                                $sqli = "SELECT filename FROM `image`";
                                $result = mysqli_query($con, $sqli);
                                while ($row = mysqli_fetch_array($result)) {
                                    if ($row['filename'] == $stories['image_name']) {
                                        echo '<option selected>' . $row['filename'] . '</option>';
                                    } else {
                                        echo '<option>' . $row['filename'] . '</option>';
                                    }
                                }
                                echo '</select>';

                                ?>
                        </div>
                        <br>
                        <div>

                            <select name="pdf" class="form-control">
                                <option>Select pdf</option>
                                <?php
                                $sqli = "SELECT namefill FROM `pdff`";
                                $result = mysqli_query($con, $sqli);
                                while ($row = mysqli_fetch_array($result)) {
                                    if ($row['namefill'] == $stories['Pdf_Name']) {
                                        echo '<option selected>' . $row['namefill'] . '</option>';
                                    } else {
                                        echo '<option>' . $row['namefill'] . '</option>';
                                    }
                                }
                                echo '</select>';

                                ?>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="update_stories" class="btn btn-primary"
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

<?php require_once 'views/partials/footer.view.php' ?>