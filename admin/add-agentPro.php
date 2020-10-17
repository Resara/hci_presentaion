<?php
include 'header.php';
include '../db/dbConnection.php';
    $image_name = '';
    $image = $_FILES['image']['name'];

    $agent_id = $_POST['txt_id'];
    $agent_name = $_POST['txt_pname'];
    $agent_email = $_POST['txt_email'];
    $agent_phone = $_POST['txt_phone'];
    $agent_country = $_POST['country_id'];
//    $product_prise = $_POST['txt_pprice'];


    if(!isset($_POST['txt_pmess'])) {
        $product_message = 0;
    }else{
        $product_message = 1;
    }
    if(!isset($_POST['txt_pimage'])) {
        $product_image = 0;
    }else{
        $product_image = 1;
    }
    if(!isset($_POST['txt_pfont'])) {
        $product_font = 0;
    }else{
        $product_font = 1;
    }

    $result=0;

    $targetDir = 'galleryImg/';
    $allowType = array('jpg', 'png', 'jpeg', 'gif');

$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if (!empty(array_filter($_FILES['image']['name']))) {
        foreach ($_FILES['image']['name'] as $key => $value) {
            $fileName = basename($_FILES['image']['name'][$key]);
            $targetFilePath = $targetDir.$fileName;

            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (in_array($fileType, $allowType)) {
                if (move_uploaded_file($_FILES['image']['tmp_name'][$key], $targetFilePath)) {
                    $insertValuesSQL .= "('','$product_cat',now(),'$fileName'),";
                } else {
                    $errorUpload .= $_FILES['image']['name'][$key].', ';
                }
            } else {
                $errorUploadType .= $_FILES['image']['name'][$key].', ';
            }
        }

        if (!empty($insertValuesSQL)) {
            $insertValuesSQL = trim($insertValuesSQL, ',');
            $insert = $connection->query("INSERT INTO agent_details(`agent_id`,`agent_name`,`agent_countryId`,`email`,`phone_num`,`pro_message`,`pro_image`,`pro_font`) VALUES 
                                            (
                                            0,
                                            '$agent_name',
                                            '$agent_country',
                                            '$agent_email',
                                            '$agent_phone',
                                            1,
                                            1,
                                            1
                                            )");

            if ($insert == 1) {
                foreach ($_FILES['image']['name'] as $key => $value) {
                    $name = basename($_FILES['image']['name'][$key]);
                    $result = $connection->query("INSERT INTO agent_image_tbl(`image_id`,`agent_id`,`image_name`) VALUES (0,'$agent_id','$name')");
                }
            }
        }
    }
    ?>

    <main class="app-content">

<?php  if ($result == 1) {
        ?>
<form action="list-agents">
    <div class="col-lg-12">
        <div class="bs-component">
            <div class="alert alert-dismissible alert-success">
                <button class="close"  type="button" data-dismiss="alert">×</button><strong>Successfully
                    Added!</strong> </a>.
            </div>
        </div>
    </div>
    <div align="center">
        <button type="submit" class="btn btn-success" type="button">Success</button>
    </div>
</form>
<?php
    } else {
        ?>

<form action="list-agents">
    <div class="col-lg-12">
        <div class="bs-component">
            <div class="alert alert-dismissible alert-danger">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Oh snap!</strong><a
                    class="alert-link" href="#">Change a few things up</a> and try submitting again.
            </div>
        </div>
    </div>
    <div align="center">
        <button type="submit"  class="btn btn-danger" type="button">Re - try</button>
    </div>
</form>

<?php
    }
?>



</main>


    <?php
    include 'footer.php';
    ?>