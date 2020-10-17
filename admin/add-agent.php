<?php include 'header.php'; ?>

<?php include 'header.php'; ?>
<?php include '../db/dbConnection.php';

$select = 'SELECT MAX(agent_id) AS max_id FROM agent_details';
$result = mysqli_query($connection, $select);
$dataRow = mysqli_fetch_array($result);
$dataRow = ++$dataRow['max_id'];
?>

<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> ADD AGENT</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"></h3>
                <div class="tile-body">
                    <form action="add-agentPro" method="post" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label class="control-label">ID</label>
                            <input class="form-control" type="text" name="txt_id" readonly="" required=""
                                value="<?php echo $dataRow; ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Agent Name</label>
                            <input class="form-control" type="text" name="txt_pname" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Agent Email </label>
                            <input class="form-control"  type="email" id="email_address" name="txt_email" required="">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Agent Phone Number</label>
                            <input class="form-control" type="text" name="txt_phone" required="">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Country</label>
                            <select class="form-control" id="categoryID" name="country_id" required=""
                                onchange="getCategory()">
                                <option value="" disabled selected hidden>Select Country</option>
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
                            <label class="control-label">Agent image</label>
                            <input class="form-control" type="file" name="image[]" multiple="">
                        </div>

<!--                        <div class="form-group">-->
<!--                            <input type="checkbox" name="txt_pmess">-->
<!--                            <label class="control-label"> add Message</label>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <input type="checkbox" name="txt_pimage">-->
<!--                            <label class="control-label"> add Image</label>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <input type="checkbox" name="txt_pfont">-->
<!--                            <label class="control-label"> add Font</label>-->
<!--                        </div>-->

                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add
                       Agent</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i
                            class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </div>
        </div>
        </form>

    </div>
</main>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>

<!-- <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script> -->

<script type="text/javascript">
// $('#demoSelect').select2();
</script>
<script type="text/javascript">
function getCategory() {

    var serviceId = document.getElementById('categoryID').value;

    xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && xmlhttp.status == 200) {
            var respons = xmlhttp.responseText.trim();
            document.getElementById('subCateID').innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "ajax/find_category.php?id=" + serviceId, true);
    xmlhttp.send();
}
</script>