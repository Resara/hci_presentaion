<?php include 'header.php'; ?>
<?php include '../db/dbConnection.php';
?>

<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `agent_details` WHERE agent_id = $id";
    $result = mysqli_query($connection, $sql);
    while ($dataRow = mysqli_fetch_assoc($result)) {
        $name = $dataRow['agent_name'];
        $country_id = $dataRow['agent_countryId'];
        $email = $dataRow['email'];
        $phone = $dataRow['phone_num'];
//        $pro_color = $dataRow['pro_color'];
//        $pro_description = $dataRow['pro_description'];
//        $pro_fabrick = $dataRow['pro_fabrick'];
    } ?>

<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> EDIT AGENT</h1>
        </div>
    </div>

        <form action="edit-agentPro" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title"></h3>
                    <div class="tile-body">

                        <div class="form-group">
                            <label class="control-label">ID</label>
                            <input class="form-control" type="text" name="txt_id" readonly="" required=""
                                value="<?php echo $id; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Agent Name</label>
                            <input class="form-control" type="text" name="txt_name" required=""
                                value=" <?php echo $name; ?>">
                        </div>

                        <?php
                            $sql = "SELECT * FROM country WHERE country_id = '$country_id'";
                            $result = mysqli_query($connection, $sql);
                             $data = mysqli_fetch_assoc($result);
                        ?>
                        <div class="form-group">
                            <label class="control-label">Country</label>
                            <select class="form-control" id="categoryID" name="country_id" required="">
                                <option value="<?php echo $data['country_id']; ?>" disabled selected hidden><?php echo $data['country_name']; ?></option>
                                <?php
                                $sql = mysqli_query($connection,"SELECT * FROM country");
                                $row = mysqli_num_rows($sql);
                                while ($row = mysqli_fetch_array($sql)){
                                    echo "<option value='". $row['country_id'] ."'>" .$row['country_name'] ." </option>" ;
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="text" name="txt_email" required=""
                                value=" <?php echo $email; ?>">
                        </div>


                        <div class="form-group">
                            <label class="control-label">Phone number</label>
                            <input class="form-control" type="text" name="txt_phone" required=""
                                value=" <?php echo $phone; ?>">
                        </div>



                        <div class="form-group">
                            </br>
                            <label class="control-label">Images </label>
                            <div class="row">
                                <?php
                                $sql2 = "SELECT * FROM `agent_image_tbl`,`agent_details` WHERE agent_image_tbl.agent_id =$id AND agent_details.agent_id=$id";
                                $result = mysqli_query($connection, $sql2);
                                while ($rowDa = mysqli_fetch_assoc($result)) { ?>
                                <div class="col-md-3">
                                    <img src="galleryImg/<?php echo $rowDa['image_name'] ?>" width='100%'>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>&nbsp;&nbsp;&nbsp;<a
                            class="btn btn-secondary" href="list-agents.php"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </div>
            </div>

        </form>
    </div>
</main>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>