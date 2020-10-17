<?php
include 'header.php';
include '../db/dbConnection.php';
?>
<?php
$id = $_GET['id'];

?>

<main class="app-content">
    <div class="app-title">
        <div>
            <!--            <p><a class="btn btn-primary icon-btn" href="add-category"><i class="fa fa-plus"></i>View</a></p>-->
            <br>
            <h1><i class="fa fa-th-list"></i> Order View</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <form>
                        <?php
                            $sql=" SELECT * FROM user_order where order_id='$id'";
                            $result=mysqli_query($connection,$sql);
                            $dataRow=mysqli_fetch_array($result);
                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>

                                <input type="text" class="form-control"value="<?php echo $dataRow['user_name']?>" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Telephone Number</label>
                                <input type="text" class="form-control" value="<?php echo $dataRow['user_mobile']?>"id="inputPassword4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" value="<?php echo $dataRow['user_address']." , ".$dataRow['user_city']."  (".$dataRow['user_ad_type'] .")"?>" id="inputAddress" placeholder="1234 Main St">
                        </div>

                    </form>
                    <br>


                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>Product Image</th>
                            <th>Cutomer's Image</th>
                            <th>Product Name</th>
                            <th>Message</th>
                            <th>Font</th>
                            <th>Qty</th>
                            <th>Price</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $x = 1;
//                        $sql = "SELECT * FROM `user_checkout`,`product_tbl`,`user_order_details`,`user_order` WHERE product_tbl.pro_id = user_checkout.check_pro AND user_order_details.check_pro=product_tbl.pro_id and user_order.order_id=user_order_details.order_id and user_checkout.status = 1";
                        $sql = "SELECT * FROM `product_tbl`,`user_order_details`,`user_order` WHERE  user_order_details.check_pro=product_tbl.pro_id and user_order.order_id=user_order_details.order_id and user_order.order_id='$id'";
                        $result = mysqli_query($connection, $sql);
                        while ($dataRow = mysqli_fetch_assoc($result)) {
                            $selectImg = $dataRow['selectImg'];
                        $sql1 = "SELECT * FROM `image_table` WHERE image_table.pro_id = $dataRow[pro_id]";
                        $result1 = mysqli_query($connection, $sql1);
                        while ($dataRow1 = mysqli_fetch_assoc($result1)) {
                            $image = $dataRow1['image_name'];
                        }


                        ?>
                        <tr>
                            <td>

                                <img src="../admin/galleryImg/<?php echo $image?>"
                                     style="width: 140px;height: auto;" alt=" " class="img-responsive">

                            </td>
                            <td>
                                <a href="../admin/galleryImg/<?php echo $selectImg?>"  download="<?php echo $selectImg ?>">
                                <img src="../admin/galleryImg/<?php echo $selectImg?>"
                                     style="width: 140px;height: auto;" alt=" " class="img-responsive">
                                </a>
                            </td>
                            <td> <?php echo $dataRow['pro_name']?></td>
                            <td> <?php echo $dataRow['message']?></td>
                            <td> <?php echo $dataRow['font']?></td>
                            <td> <?php echo $dataRow['check_qty']?></td>
                            <td> <?php echo $dataRow['check_qty']*$dataRow['pro_prise']?></td>

                        </tr>
<?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
<script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>