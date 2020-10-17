<?php
include 'header.php';
include '../db/dbConnection.php';

$sid =  $_POST['txt_sid'];
$id =  $_POST['txt_id'];
$name =  $_POST['txt_Scategory'];
$status = $_POST['txt_status'];

$sql = "INSERT INTO sub_category_tbl(sub_cat_id, cat_id , subcat_name,status) VALUES($sid,$id,'$name','$status')"; ?>
    <main class="app-content">
<!--insert-->
        <?php  if ($connection->query($sql)===true){?>
            <form action="list-subcategory.php">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <div class="alert alert-dismissible alert-success">
                            <button class="close" type="button" data-dismiss="alert">×</button><strong>Successfully
                                Added!</strong> </a>.
                        </div>
                    </div>
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-success" type="button">Success</button>

                </div>
            </form>
        <?php }else{ ?>

            <form action="list-subcategory">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <div class="alert alert-dismissible alert-danger">
                            <button class="close" type="button" data-dismiss="alert">×</button><strong>Oh snap!</strong><a
                                class="alert-link" href="#">Change a few things up</a> and try submitting again.
                        </div>
                    </div>
                </div>
                <div align="center">

                    <button type="submit" class="btn btn-danger" type="button">Re - try</button>
                </div>
            </form>

        <?php } ?>



    </main>
<?php
include 'footer.php';
?>