<?php

include 'db/dbConnection.php';
//$id1 =  $_GET['id'];
//$dataqqq1 = " SELECT * FROM category_tbl  WHERE category_id = 1 ";
//$sql2qw = mysqli_query($connection,$dataqqq1);
//$row3q = mysqli_fetch_array($sql2qw);
//$row3q['category_id'];
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header2.php'?>
<body>

<!--// Open Menu Cart-->


<!--Main Header Start-->

<!--// Main Header End Here-->


<!--Breadcrumb Start-->

<!--// Breadcrumb End-->

<!--Featured Vehicles Section-->
<section class="featured-vehicles-section padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 px-0">
                <!--Section Title-->
                <div class="section-title text-center">
                    <div class="padding-bottom-15">
                        <h6 class="title both-line uppercase gray"> Check Out Our Monthly Popular </h6>
                    </div>
                    <h2 class="heading-02 padding-bottom-70">Mothly Popular</h2>
                </div>
                <!--// Section Title End-->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-vehicle-slider">
                    <div class="vehicle-slider-active">
                        <!--Home 02 Vehicle Slider items-->
                        <?php

                        //                                    $dataq = " SELECT * FROM product_tbl  WHERE pro_catid = '$id1' ";
                        //                                    $sqlq = mysqli_query($connection,$dataq);
                        //                                    $rowq = mysqli_fetch_array($sqlq);
                        //                                    $dataiq = $rowq['pro_id'];
                        //
                        //
                        //                                    $datai = " SELECT * FROM image_table  WHERE pro_id = '$dataiq' ";
                        //                                    $sqli = mysqli_query($connection,$datai);
                        //                                    $rowi = mysqli_fetch_array($sqli);
                        //                                    $datai = $rowi['image_name'];
//                        $datai2 = " SELECT * FROM agent_image_tbl  WHERE agent_id = '$id1' ";
//                        $sqli = mysqli_query($connection,$datai2);
//                        $rowi = mysqli_fetch_array($sqli);
//                        $datai = $rowi['image_name'];



//                        $sql1 = mysqli_query($connection,"SELECT * FROM product_tbl ");
//                        $row2 = mysqli_num_rows($sql1);
//                        while ($row2 = mysqli_fetch_array($sql1)){
//                        $proid1 = $row2['pro_id'];
//                            $proid = $row2['pro_name'];
//                            $proid3= $row2['pro_id'];
//                            $proid4 = $row2['pro_id'];
//                        $datai = " SELECT * FROM image_table  WHERE pro_id = '$proid' ";
//                        $sqli = mysqli_query($connection,$datai);
//                        $rowi = mysqli_fetch_array($sqli);
//                        $datai = $rowi['image_name'];
//                        ?>
                        <div class="h2-vehicle-slider-items">
                            <div class="items-head">
                                <img src="assets/img/Green-tea-and-weight-Loss.jpg" alt="img">
                            </div>
                            <div class="items-body">
                                <h5 class="heading-05">FBOPF1 Tea</h5>
                                <ul class="list-items-wrap">
                                    <li class="list-items"> <i class="flaticon-auto-sale"></i><span class="title">
                                                price</span> $220.00</li>
                                    <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                </span> 200g </li>
                                </ul>
                            </div>
                            <div class="main-btn-wrap text-center">
                                <a href="navo_product.php" class="main-btn gray-border uppercase">Explore</a>
                            </div>
                        </div>
<!--
                      //Home 02 Vehicle Slider items-->


                        <!--Home 02 Vehicle Slider items-->
                        <div class="h2-vehicle-slider-items">
                            <div class="items-head">
                                <img src="assets/img/r1.jpg" alt="img">
                            </div>
                            <div class="items-body">
                                <h5 class="heading-05">BOP Sp Tea</h5>
                                <ul class="list-items-wrap">
                                    <li class="list-items"> <i class="flaticon-auto-sale"></i><span class="title">
                                                price</span> $230.00</li>
                                    <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                </span> 200g </li>
                                </ul>
                            </div>
                            <div class="main-btn-wrap text-center">
                                <a href="navo_product.php" class="main-btn gray-border uppercase">Explore</a>
                            </div>
                        </div>
                        <!--// Home 02 Vehicle Slider items-->

                        <!--Home 02 Vehicle Slider items-->
                        <div class="h2-vehicle-slider-items">
                            <div class="items-head">
                                <img src="assets/img/r2.jpg" alt="img">
                            </div>
                            <div class="items-body">
                                <h5 class="heading-05">FBOPF Sp Tea</h5>
                                <ul class="list-items-wrap">
                                    <li class="list-items"> <i class="flaticon-auto-sale"></i><span class="title">
                                                price</span> $230.00</li>
                                    <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                </span> 200g </li>
                                </ul>
                            </div>
                            <div class="main-btn-wrap text-center">
                                <a href="navo_product.php" class="main-btn gray-border uppercase">Explore</a>
                            </div>
                        </div>
                        <!--// Home 02 Vehicle Slider items-->

                        <!--Home 02 Vehicle Slider items-->
                        <div class="h2-vehicle-slider-items">
                            <div class="items-head">
                                <img src="assets/img/r3.jpg" alt="img">
                            </div>
                            <div class="items-body">
                                <h5 class="heading-05">FBOP</h5>
                                <ul class="list-items-wrap">
                                    <li class="list-items"> <i class="flaticon-auto-sale"></i><span class="title">
                                                price</span> $204.00</li>
                                    <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                </span> 200g </li>
                                </ul>
                            </div>
                            <div class="main-btn-wrap text-center">
                                <a href="navo_product.php" class="main-btn gray-border uppercase">Explore</a>
                            </div>
                        </div>
                        <!--// Home 02 Vehicle Slider items-->

                        <!--Home 02 Vehicle Slider items-->
                        <div class="h2-vehicle-slider-items">
                            <div class="items-head">
                                <img src="assets/img/r4.jpg" alt="img">
                            </div>
                            <div class="items-body">
                                <h5 class="heading-05">BOPF Tea</h5>
                                <ul class="list-items-wrap">
                                    <li class="list-items"> <i class="flaticon-auto-sale"></i><span class="title">
                                                price</span> $220.00</li>
                                    <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                </span> 200g </li>
                                </ul>
                            </div>
                            <div class="main-btn-wrap text-center">
                                <a href="navo_product.php" class="main-btn gray-border uppercase">Explore</a>
                            </div>
                        </div>
                        <!--// Home 02 Vehicle Slider items-->

                        <!--Home 02 Vehicle Slider items-->
                        <div class="h2-vehicle-slider-items">
                            <div class="items-head">
                                <img src="assets/img/r5.jpg" alt="img">
                            </div>
                            <div class="items-body">
                                <h5 class="heading-05">BOP1A</h5>
                                <ul class="list-items-wrap">
                                    <li class="list-items"> <i class="flaticon-auto-sale"></i><span class="title">
                                                price</span> $120.00</li>
                                    <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                </span> 200g </li>
                                </ul>
                            </div>
                            <div class="main-btn-wrap text-center">
                                <a href="navo_product.php" class="main-btn gray-border uppercase">Explore</a>
                            </div>
                        </div>
                        <!--// Home 02 Vehicle Slider items-->
                    </div>
                    <!--// Slider Active -->
                </div>
                <!--// Featured Vehicle Slider-->

            </div>
        </div>
        <!--// Row-->
    </div>
    <!--Container Fluid-->

</section>



<!--Product Details Tab-->
<div class="product-details-tab padding-top-120 padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--Related Product-->
                <div class="related-product-area">
                    <div class="title padding-bottom-30">Related Products</div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!-- Grid List Column-->
                            <div class="grid-list-column-item">
                                <span class="price-drop-tag">22%</span>
                                <div class="thumb">
                                    <img src="admin/galleryImg/BOP Sp Tea.jpg" alt="img">
                                </div>
                                <h5 class="title padding-top-10">FBOP</h5>
                                <div class="common-rating-style">
                                    <input type="radio" name="start1" id="start1"><label for="start1"></label>
                                    <input type="radio" name="start1" id="start2"><label for="start2"></label>
                                    <input type="radio" name="start1" id="start3"><label for="start3"></label>
                                    <input type="radio" name="start1" id="start4"><label for="start4"></label>
                                    <input type="radio" name="start1" id="start5"><label for="start5"></label>
                                </div>
                                <div class="common-price-style ">
                                    Price: <span class="black">$245</span>
                                </div>
                                <div class="main-btn-wrap padding-top-20">
                                    <a href="navo_product.php" class="main-btn black-border"><i class="flaticon-shopping-cart"></i>
                                        View</a>
                                </div>
                            </div>
                            <!--// Grid List Column-->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Grid List Column-->
                            <div class="grid-list-column-item">
                                <span class="price-drop-tag">22%</span>
                                <div class="thumb">
                                    <img src="admin/galleryImg/FBOPF Sp Tea.jpg" alt="img">
                                </div>
                                <h5 class="title padding-top-10">FBOPF Sp Tea</h5>
                                <div class="common-rating-style">
                                    <input type="radio" name="start1" id="start21"><label for="start21"></label>
                                    <input type="radio" name="start1" id="start22"><label for="start22"></label>
                                    <input type="radio" name="start1" id="start23"><label for="start23"></label>
                                    <input type="radio" name="start1" id="start24"><label for="start24"></label>
                                    <input type="radio" name="start1" id="start25"><label for="start25"></label>
                                </div>
                                <div class="common-price-style ">
                                    Price: <span class="black">$135</span>
                                </div>
                                <div class="main-btn-wrap padding-top-20">
                                    <a href="navo_product.php" class="main-btn black-border"><i class="flaticon-shopping-cart"></i>
                                        View</a>
                                </div>
                            </div>
                            <!--// Grid List Column-->
                        </div>


                        <div class="col-lg-3 col-md-6">
                            <!-- Grid List Column-->
                            <div class="grid-list-column-item">
                                <span class="price-drop-tag">22%</span>
                                <div class="thumb">
                                    <img src="admin/galleryImg/BOPF Tea.jpg" alt="img">
                                </div>
                                <h5 class="title padding-top-10">BOP1A</h5>
                                <div class="common-rating-style">
                                    <input type="radio" name="start1" id="start21"><label for="start21"></label>
                                    <input type="radio" name="start1" id="start22"><label for="start22"></label>
                                    <input type="radio" name="start1" id="start23"><label for="start23"></label>
                                    <input type="radio" name="start1" id="start24"><label for="start24"></label>
                                    <input type="radio" name="start1" id="start25"><label for="start25"></label>
                                </div>
                                <div class="common-price-style ">
                                    Price: <span class="black">$45</span>
                                </div>
                                <div class="main-btn-wrap padding-top-20">
                                    <a href="navo_product.php" class="main-btn black-border"><i class="flaticon-shopping-cart"></i>
                                        View</a>
                                </div>
                            </div>
                            <!--// Grid List Column-->
                        </div>


                        <div class="col-lg-3 col-md-6">
                            <!-- Grid List Column-->
                            <div class="grid-list-column-item">
                                <span class="price-drop-tag">22%</span>
                                <div class="thumb">
                                    <img src="admin/galleryImg/BOP Sp Tea.jpg" alt="img">
                                </div>
                                <h5 class="title padding-top-10">BOPF Tea</h5>
                                <div class="common-rating-style">
                                    <input type="radio" name="start1" id="start31"><label for="start31"></label>
                                    <input type="radio" name="start1" id="start32"><label for="start32"></label>
                                    <input type="radio" name="start1" id="start33"><label for="start33"></label>
                                    <input type="radio" name="start1" id="start34"><label for="start34"></label>
                                    <input type="radio" name="start1" id="start35"><label for="start35"></label>
                                </div>
                                <div class="common-price-style ">
                                    Price: <span class="black">$165</span>
                                </div>
                                <div class="main-btn-wrap padding-top-20">
                                    <a href="navo_product.php" class="main-btn black-border"><i class="flaticon-shopping-cart"></i>
                                        View</a>
                                </div>
                            </div>
                            <!--// Grid List Column-->
                        </div>



                    </div>
                </div>
                <!--// Related Product-->
            </div>

        </div>

    </div>
</div>
<!--// Product Details Tab-->


<!-- footer area start -->
<?php include 'footer.php'?>

</html>