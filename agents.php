<?php

include 'db/dbConnection.php';
$id1 =  $_GET['id'];
//$dataqqq = " SELECT * FROM country  WHERE country_id = 3 ";
//$sql2qw = mysqli_query($connection,$dataqqq);
//$row3q = mysqli_fetch_array($sql2qw);
// $row3q['country_id'];
?>



<!DOCTYPE html>
<html lang="en">


    <!--// Open Menu Cart-->

    <!--Main Header Start-->
   <?php include 'header.php'?>
    <!--// Main Header End Here-->


    <!--Breadcrumb Start-->
    <div class="breadcrumb-area style-03" style="background: url('assets/img/breadcrumb/coveragent.jpg')">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-content">
                    <h1 class="page-title">Agents</h1>
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li>Agents</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->


    <!--Blog Page Content-->
    <div class="blog-page-content padding-top-120 padding-bottom-160">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Shop Page Grig View-->
                    <div class="shop-page-grid-view">
                        <div class="product-filtering-area">

                            <div class="filter-left" id="btnContainer">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <h3>Agents</h3>
                                    </li>
<!--                                    <li class="nav-item">-->
<!--                                        <a class="nav-link" data-toggle="tab" href="#single-grid">-->
<!--                                            <i class="ti ti-menu"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
                                </ul>
                            </div>
                            <div class="filter-right">
                                <span class="sorting-text">Sort by</span>
                                <div class="custom-select-box">
                                    <select>
                                        <option value="ban">Sorting Items</option>
                                        <option value="ban">25 Products</option>
                                        <option value="ban">50 Products</option>
                                        <option value="ban">100 Products</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--// Product Filtering Area-->

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-grid">
                                <div class="grid-list-wrapper padding-top-40">
                                    <!-- Grid List Column-->
                                    <?php
//                                    $dataq = " SELECT * FROM agent_details  WHERE agent_countryId = '$id1' ";
//                                    $sqlq = mysqli_query($connection,$dataq);
//                                    $rowq = mysqli_fetch_array($sqlq);
//                                    $dataiq = $rowq['agent_id'];
//
//
//                                    $datai = " SELECT * FROM agent_image_tbl  WHERE agent_id = '$dataiq' ";
//                                    $sqli = mysqli_query($connection,$datai);
//                                    $rowi = mysqli_fetch_array($sqli);
//                                    $datai = $rowi['image_name'];
//
//                                    $data = " SELECT * FROM country  WHERE country_id = '$id1' ";
//                                    $sql2 = mysqli_query($connection,$data);
//                                    $row3 = mysqli_fetch_array($sql2);
//                                    $cdata = $row3['country_name'];


                                    $sql1 = mysqli_query($connection,"SELECT * FROM agent_details  WHERE agent_countryId = '$id1'");
                                    $row2 = mysqli_num_rows($sql1);
                                    while ($row2 = mysqli_fetch_array($sql1)){

//                                        $proid =$row2['agent_id'];
                                        $datai = " SELECT * FROM agent_image_tbl  WHERE agent_id = $row2[agent_id]; ";
                                        $sqli = mysqli_query($connection,$datai);
                                        $rowi = mysqli_fetch_array($sqli);
//                                        $datai = $rowi['image_name'];

                                    ?>

                                    <div class="grid-list-column-item" id="subCateID">
<!--                                        <span class="price-drop-tag">22%</span>-->
                                        <div class="thumb">
                                            <img style="width: 151px;height: 151px;" src="admin/galleryImg/<?php echo $rowi['image_name'];?>" alt="img">
                                        </div>
                                        <h5 class="title padding-top-10"><?php echo $row2['agent_name'];?></h5>
                                        <div class="common-rating-style">
                                            <input type="radio" name="start1" id="start1" ><label for="start1" ></label>
                                            <input type="radio" name="start1" id="start2"><label for="start2"></label>
                                            <input type="radio" name="start1" id="start3"><label for="start3"></label>
                                            <input type="radio" name="start1" id="start4"><label for="start4"></label>
                                            <input type="radio" name="start1" id="start5"><label for="start5"></label>
                                        </div>
                                        <div class="common-price-style ">
                                            price
                                        </div>
                                        <div class="main-btn-wrap padding-top-20">
                                            <a href="ContactAgent.php?id=<?php echo  $row2['agent_id']; ?>" class="main-btn black-border" style="text-decoration: none;"><i class="icon flaticon-phone-call"
                                                   ></i>
                                                Contact Agent</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
<!--                                    <div class="grid-list-column-item" id="aaaa">-->
<!--                                       <span class="price-drop-tag">22%</span> --
                                      <div class="thumb">-->
<!--                                            <img src="assets/img/shop/product/02.png" alt="img">-->
<!--                                        </div>-->
<!--                                        <h5 class="title padding-top-10">Air Intake System</h5>-->
<!--                                        <div class="common-rating-style">-->
<!--                                            <input type="radio" name="start1" id="start11"><label for="start11"></label>-->
<!--                                            <input type="radio" name="start1" id="start12"><label for="start12"></label>-->
<!--                                            <input type="radio" name="start1" id="start13"><label for="start13"></label>-->
<!--                                            <input type="radio" name="start1" id="start14"><label for="start14"></label>-->
<!--                                            <input type="radio" name="start1" id="start15"><label for="start15"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style ">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                        <div class="main-btn-wrap padding-top-20">-->
<!--                                            <a href="#" class="main-btn black-border"><i-->
<!--                                                    class="flaticon-shopping-cart"></i>-->
<!--                                                Add-->
<!--                                                To Cart</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
<!--                                    <div class="grid-list-column-item">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="thumb">-->
<!--                                            <img src="assets/img/shop/product/03.png" alt="img">-->
<!--                                        </div>-->
<!--                                        <h5 class="title padding-top-10">Auto Clutch & Brake</h5>-->
<!--                                        <div class="common-rating-style">-->
<!--                                            <input type="radio" name="start1" id="start21"><label for="start21"></label>-->
<!--                                            <input type="radio" name="start1" id="start22"><label for="start22"></label>-->
<!--                                            <input type="radio" name="start1" id="start23"><label for="start23"></label>-->
<!--                                            <input type="radio" name="start1" id="start24"><label for="start24"></label>-->
<!--                                            <input type="radio" name="start1" id="start25"><label for="start25"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style ">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                        <div class="main-btn-wrap padding-top-20">-->
<!--                                            <a href="#" class="main-btn black-border"><i-->
<!--                                                    class="flaticon-shopping-cart"></i>-->
<!--                                                Add-->
<!--                                                To Cart</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                   // Grid List Column-->
<!---->
<!--                                    Grid List Column-->
<!--                                    <div class="grid-list-column-item">-->
<!--                                       <span class="price-drop-tag">22%</span> -->
<!--                                        <div class="thumb">-->
<!--                                            <img src="assets/img/shop/product/01.png" alt="img">-->
<!--                                        </div>-->
<!--                                        <h5 class="title padding-top-10">Flash Deals Tyre</h5>-->
<!--                                        <div class="common-rating-style">-->
<!--                                            <input type="radio" name="start1" id="start31"><label for="start31"></label>-->
<!--                                            <input type="radio" name="start1" id="start32"><label for="start32"></label>-->
<!--                                            <input type="radio" name="start1" id="start33"><label for="start33"></label>-->
<!--                                            <input type="radio" name="start1" id="start34"><label for="start34"></label>-->
<!--                                            <input type="radio" name="start1" id="start35"><label for="start35"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style ">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                        <div class="main-btn-wrap padding-top-20">-->
<!--                                            <a href="#" class="main-btn black-border"><i-->
<!--                                                    class="flaticon-shopping-cart"></i>-->
<!--                                                Add-->
<!--                                                To Cart</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                               -// Grid List Column-->
<!---->
<!--                                    Grid List Column-->
<!--                                    <div class="grid-list-column-item">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="thumb">-->
<!--                                            <img src="assets/img/shop/product/02.png" alt="img">-->
<!--                                        </div>-->
<!--                                        <h5 class="title padding-top-10">Air Intake System</h5>-->
<!--                                        <div class="common-rating-style">-->
<!--                                            <input type="radio" name="start1" id="start41"><label for="start41"></label>-->
<!--                                            <input type="radio" name="start1" id="start42"><label for="start42"></label>-->
<!--                                            <input type="radio" name="start1" id="start43"><label for="start43"></label>-->
<!--                                            <input type="radio" name="start1" id="start44"><label for="start44"></label>-->
<!--                                            <input type="radio" name="start1" id="start45"><label for="start45"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style ">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                        <div class="main-btn-wrap padding-top-20">-->
<!--                                            <a href="#" class="main-btn black-border"><i-->
<!--                                                    class="flaticon-shopping-cart"></i>-->
<!--                                                Add-->
<!--                                                To Cart</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                              // Grid List Column-->
<!---->
<!--                                  Grid List Column-->
<!--                                    <div class="grid-list-column-item">-->
<!--                               <span class="price-drop-tag">22%</span> ---->
<!--                                        <div class="thumb">-->
<!--                                            <img src="assets/img/shop/product/03.png" alt="img">-->
<!--                                        </div>-->
<!--                                        <h5 class="title padding-top-10">Auto Clutch & Brake</h5>-->
<!--                                        <div class="common-rating-style">-->
<!--                                            <input type="radio" name="start1" id="start51"><label for="start51"></label>-->
<!--                                            <input type="radio" name="start1" id="start52"><label for="start52"></label>-->
<!--                                            <input type="radio" name="start1" id="start53"><label for="start53"></label>-->
<!--                                            <input type="radio" name="start1" id="start54"><label for="start54"></label>-->
<!--                                            <input type="radio" name="start1" id="start55"><label for="start55"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style ">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                        <div class="main-btn-wrap padding-top-20">-->
<!--                                            <a href="#" class="main-btn black-border"><i-->
<!--                                                    class="flaticon-shopping-cart"></i>-->
<!--                                                Add-->
<!--                                                To Cart</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                              // Grid List Column-->
<!---->
<!--                                   Grid List Column-->
<!--                                    <div class="grid-list-column-item">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="thumb">-->
<!--                                            <img src="assets/img/shop/product/01.png" alt="img">-->
<!--                                        </div>-->
<!--                                        <h5 class="title padding-top-10">Flash Deals Tyre</h5>-->
<!--                                        <div class="common-rating-style">-->
<!--                                            <input type="radio" name="start1" id="start61"><label for="start61"></label>-->
<!--                                            <input type="radio" name="start1" id="start62"><label for="start62"></label>-->
<!--                                            <input type="radio" name="start1" id="start63"><label for="start63"></label>-->
<!--                                            <input type="radio" name="start1" id="start64"><label for="start64"></label>-->
<!--                                            <input type="radio" name="start1" id="start65"><label for="start65"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style ">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                        <div class="main-btn-wrap padding-top-20">-->
<!--                                            <a href="#" class="main-btn black-border"><i-->
<!--                                                    class="flaticon-shopping-cart"></i>-->
<!--                                                Add-->
<!--                                                To Cart</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                   // Grid List Column---->
<!--                                    Grid List Column-->
<!--                                    <div class="grid-list-column-item">-->
<!--                                        <!- <span class="price-drop-tag">22%</span> --->
<!--                                        <div class="thumb">-->
<!--                                            <img src="assets/img/shop/product/02.png" alt="img">-->
<!--                                        </div>-->
<!--                                        <h5 class="title padding-top-10">Air Intake System</h5>-->
<!--                                        <div class="common-rating-style">-->
<!--                                            <input type="radio" name="start1" id="start71"><label for="start71"></label>-->
<!--                                            <input type="radio" name="start1" id="start72"><label for="start72"></label>-->
<!--                                            <input type="radio" name="start1" id="start73"><label for="start73"></label>-->
<!--                                            <input type="radio" name="start1" id="start74"><label for="start74"></label>-->
<!--                                            <input type="radio" name="start1" id="start75"><label for="start75"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style ">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                        <div class="main-btn-wrap padding-top-20">-->
<!--                                            <a href="#" class="main-btn black-border"><i-->
<!--                                                    class="flaticon-shopping-cart"></i>-->
<!--                                                Add-->
<!--                                                To Cart</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                  // Grid List Column-

 Grid List Column-->
<!--                                    <div class="grid-list-column-item">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="thumb">-->
<!--                                            <img src="assets/img/shop/product/03.png" alt="img">-->
<!--                                        </div>-->
<!--                                        <h5 class="title padding-top-10">Auto Clutch & Brake</h5>-->
<!--                                        <div class="common-rating-style">-->
<!--                                            <input type="radio" name="start1" id="start81"><label for="start81"></label>-->
<!--                                            <input type="radio" name="start1" id="start82"><label for="start82"></label>-->
<!--                                            <input type="radio" name="start1" id="start83"><label for="start83"></label>-->
<!--                                            <input type="radio" name="start1" id="start84"><label for="start84"></label>-->
<!--                                            <input type="radio" name="start1" id="start85"><label for="start85"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style ">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                        <div class="main-btn-wrap padding-top-20">-->
<!--                                            <a href="#" class="main-btn black-border"><i-->
<!--                                                    class="flaticon-shopping-cart"></i>-->
<!--                                                Add-->
<!--                                                To Cart</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <!--// Grid List Column-->
                                </div>
                                <!--// Grid List Wrapper-->
                            </div>

<!--                            <div class="tab-pane fade" id="single-grid">-->
<!--                                <div class="grid-list-wrapper padding-top-40">-->
<!--                                    &lt;!&ndash; list View Item&ndash;&gt;-->
<!--                                    <div class="grid-list-column-item list-view">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="grid-list-column-item__wrap">-->
<!--                                            <div class="thumb">-->
<!--                                                <img src="assets/img/shop/product/01.png" alt="img">-->
<!--                                            </div>-->
<!--                                            <div class="grid-list-column-item__content">-->
<!--                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>-->
<!--                                                <div class="common-rating-style">-->
<!--                                                    <input type="radio" name="start1" id="starts01"><label-->
<!--                                                        for="starts01"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts02"><label-->
<!--                                                        for="starts02"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts03"><label-->
<!--                                                        for="starts03"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts04"><label-->
<!--                                                        for="starts04"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts05"><label-->
<!--                                                        for="starts05"></label>-->
<!--                                                </div>-->
<!--                                                <div class="common-price-style">-->
<!--                                                    Price: <span class="black">$145</span>-->
<!--                                                </div>-->
<!--                                                <div class="main-btn-wrap padding-top-20">-->
<!--                                                    <a href="#" class="main-btn black-border"><i-->
<!--                                                            class="flaticon-shopping-cart"></i>-->
<!--                                                        Add To Cart-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    &lt;!&ndash;// list View Item&ndash;&gt;-->

<!--                                    &lt;!&ndash; list View Item&ndash;&gt;-->
<!--                                    <div class="grid-list-column-item list-view">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="grid-list-column-item__wrap">-->
<!--                                            <div class="thumb">-->
<!--                                                <img src="assets/img/shop/product/02.png" alt="img">-->
<!--                                            </div>-->
<!--                                            <div class="grid-list-column-item__content">-->
<!--                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>-->
<!--                                                <div class="common-rating-style">-->
<!--                                                    <input type="radio" name="start1" id="starts11"><label-->
<!--                                                        for="starts11"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts12"><label-->
<!--                                                        for="starts12"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts13"><label-->
<!--                                                        for="starts13"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts14"><label-->
<!--                                                        for="starts14"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts15"><label-->
<!--                                                        for="starts15"></label>-->
<!--                                                </div>-->
<!--                                                <div class="common-price-style">-->
<!--                                                    Price: <span class="black">$145</span>-->
<!--                                                </div>-->
<!--                                                <div class="main-btn-wrap padding-top-20">-->
<!--                                                    <a href="#" class="main-btn black-border"><i-->
<!--                                                            class="flaticon-shopping-cart"></i>-->
<!--                                                        Add To Cart-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    &lt;!&ndash;// list View Item&ndash;&gt;-->

<!--                                    &lt;!&ndash; list View Item&ndash;&gt;-->
<!--                                    <div class="grid-list-column-item list-view">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="grid-list-column-item__wrap">-->
<!--                                            <div class="thumb">-->
<!--                                                <img src="assets/img/shop/product/03.png" alt="img">-->
<!--                                            </div>-->
<!--                                            <div class="grid-list-column-item__content">-->
<!--                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>-->
<!--                                                <div class="common-rating-style">-->
<!--                                                    <input type="radio" name="start1" id="starts21"><label-->
<!--                                                        for="starts21"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts22"><label-->
<!--                                                        for="starts22"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts23"><label-->
<!--                                                        for="starts23"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts24"><label-->
<!--                                                        for="starts24"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts25"><label-->
<!--                                                        for="starts25"></label>-->
<!--                                                </div>-->
<!--                                                <div class="common-price-style">-->
<!--                                                    Price: <span class="black">$145</span>-->
<!--                                                </div>-->
<!--                                                <div class="main-btn-wrap padding-top-20">-->
<!--                                                    <a href="#" class="main-btn black-border"><i-->
<!--                                                            class="flaticon-shopping-cart"></i>-->
<!--                                                        Add To Cart-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    &lt;!&ndash;// list View Item&ndash;&gt;-->

<!--                                    &lt;!&ndash; list View Item&ndash;&gt;-->
<!--                                    <div class="grid-list-column-item list-view">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="grid-list-column-item__wrap">-->
<!--                                            <div class="thumb">-->
<!--                                                <img src="assets/img/shop/product/01.png" alt="img">-->
<!--                                            </div>-->
<!--                                            <div class="grid-list-column-item__content">-->
<!--                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>-->
<!--                                                <div class="common-rating-style">-->
<!--                                                    <input type="radio" name="start1" id="starts31"><label-->
<!--                                                        for="starts31"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts32"><label-->
<!--                                                        for="starts32"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts33"><label-->
<!--                                                        for="starts33"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts34"><label-->
<!--                                                        for="starts34"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts35"><label-->
<!--                                                        for="starts35"></label>-->
<!--                                                </div>-->
<!--                                                <div class="common-price-style">-->
<!--                                                    Price: <span class="black">$145</span>-->
<!--                                                </div>-->
<!--                                                <div class="main-btn-wrap padding-top-20">-->
<!--                                                    <a href="#" class="main-btn black-border"><i-->
<!--                                                            class="flaticon-shopping-cart"></i>-->
<!--                                                        Add To Cart-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    &lt;!&ndash;// list View Item&ndash;&gt;-->

<!--                                    &lt;!&ndash; list View Item&ndash;&gt;-->
<!--                                    <div class="grid-list-column-item list-view">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="grid-list-column-item__wrap">-->
<!--                                            <div class="thumb">-->
<!--                                                <img src="assets/img/shop/product/02.png" alt="img">-->
<!--                                            </div>-->
<!--                                            <div class="grid-list-column-item__content">-->
<!--                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>-->
<!--                                                <div class="common-rating-style">-->
<!--                                                    <input type="radio" name="start1" id="starts41"><label-->
<!--                                                        for="starts41"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts42"><label-->
<!--                                                        for="starts42"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts43"><label-->
<!--                                                        for="starts43"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts44"><label-->
<!--                                                        for="starts44"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts45"><label-->
<!--                                                        for="starts45"></label>-->
<!--                                                </div>-->
<!--                                                <div class="common-price-style">-->
<!--                                                    Price: <span class="black">$145</span>-->
<!--                                                </div>-->
<!--                                                <div class="main-btn-wrap padding-top-20">-->
<!--                                                    <a href="#" class="main-btn black-border"><i-->
<!--                                                            class="flaticon-shopping-cart"></i>-->
<!--                                                        Add To Cart-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    &lt;!&ndash;// list View Item&ndash;&gt;-->

<!--                                    &lt;!&ndash; list View Item&ndash;&gt;-->
<!--                                    <div class="grid-list-column-item list-view">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="grid-list-column-item__wrap">-->
<!--                                            <div class="thumb">-->
<!--                                                <img src="assets/img/shop/product/03.png" alt="img">-->
<!--                                            </div>-->
<!--                                            <div class="grid-list-column-item__content">-->
<!--                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>-->
<!--                                                <div class="common-rating-style">-->
<!--                                                    <input type="radio" name="start1" id="starts51"><label-->
<!--                                                        for="starts51"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts52"><label-->
<!--                                                        for="starts52"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts53"><label-->
<!--                                                        for="starts53"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts54"><label-->
<!--                                                        for="starts54"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts55"><label-->
<!--                                                        for="starts55"></label>-->
<!--                                                </div>-->
<!--                                                <div class="common-price-style">-->
<!--                                                    Price: <span class="black">$145</span>-->
<!--                                                </div>-->
<!--                                                <div class="main-btn-wrap padding-top-20">-->
<!--                                                    <a href="#" class="main-btn black-border"><i-->
<!--                                                            class="flaticon-shopping-cart"></i>-->
<!--                                                        Add To Cart-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    &lt;!&ndash;// list View Item&ndash;&gt;-->

<!--                                    &lt;!&ndash; list View Item&ndash;&gt;-->
<!--                                    <div class="grid-list-column-item list-view">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="grid-list-column-item__wrap">-->
<!--                                            <div class="thumb">-->
<!--                                                <img src="assets/img/shop/product/01.png" alt="img">-->
<!--                                            </div>-->
<!--                                            <div class="grid-list-column-item__content">-->
<!--                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>-->
<!--                                                <div class="common-rating-style">-->
<!--                                                    <input type="radio" name="start1" id="starts61"><label-->
<!--                                                        for="starts61"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts62"><label-->
<!--                                                        for="starts62"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts63"><label-->
<!--                                                        for="starts63"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts64"><label-->
<!--                                                        for="starts64"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts65"><label-->
<!--                                                        for="starts65"></label>-->
<!--                                                </div>-->
<!--                                                <div class="common-price-style">-->
<!--                                                    Price: <span class="black">$145</span>-->
<!--                                                </div>-->
<!--                                                <div class="main-btn-wrap padding-top-20">-->
<!--                                                    <a href="#" class="main-btn black-border"><i-->
<!--                                                            class="flaticon-shopping-cart"></i>-->
<!--                                                        Add To Cart-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    &lt;!&ndash;// list View Item&ndash;&gt;-->

<!--                                    &lt;!&ndash; list View Item&ndash;&gt;-->
<!--                                    <div class="grid-list-column-item list-view">-->
<!--                                        <span class="price-drop-tag">22%</span>-->
<!--                                        <div class="grid-list-column-item__wrap">-->
<!--                                            <div class="thumb">-->
<!--                                                <img src="assets/img/shop/product/02.png" alt="img">-->
<!--                                            </div>-->
<!--                                            <div class="grid-list-column-item__content">-->
<!--                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>-->
<!--                                                <div class="common-rating-style">-->
<!--                                                    <input type="radio" name="start1" id="starts71"><label-->
<!--                                                        for="starts71"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts72"><label-->
<!--                                                        for="starts72"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts73"><label-->
<!--                                                        for="starts73"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts74"><label-->
<!--                                                        for="starts74"></label>-->
<!--                                                    <input type="radio" name="start1" id="starts75"><label-->
<!--                                                        for="starts75"></label>-->
<!--                                                </div>-->
<!--                                                <div class="common-price-style">-->
<!--                                                    Price: <span class="black">$145</span>-->
<!--                                                </div>-->
<!--                                                <div class="main-btn-wrap padding-top-20">-->
<!--                                                    <a href="#" class="main-btn black-border"><i-->
<!--                                                            class="flaticon-shopping-cart"></i>-->
<!--                                                        Add To Cart-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    &lt;!&ndash;// list View Item&ndash;&gt;-->

<!--                                </div>-->
<!--                            </div>-->
                        </div>

                    </div>
                    <!--// Shop Page Grid View-->

                    <!-- Pagination-->
                    <div class="col-lg-12 margin-bottom-60">
                        <div class="blog-pagination text-center">
                            <ul class="page-numbers">
                                <li><a class="next page-numbers" href="#"><i class="flaticon-left-arrow"></i></a></li>
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="page-numbers" href="#">4</a></li>
                                <li><a class="next page-numbers" href="#"><i class="flaticon-right-arrow"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--// Pagination-->
                </div>

                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget widget_search blog-bg">
                            <div class="section-title padding-top-105 padding-bottom-70" style="padding-bottom: 10px; padding-top: 2px;">
                                <h2 class="heading-02">Select your Country</h2>
                            </div>
                            <div class="custom-select-box w-100">
                                <select id="categoryID" >
                                    <?php
                                    $sql = mysqli_query($connection,"SELECT * FROM country ");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)){ ?>
                                        <!--                                    echo "<option value='". $row['category_id'] ."'>" .$row['category_name'] ." </option>" ;-->

<!--                                        <li><a href="shop?id=--><?php //echo $row['country_id'] ?><!--">--><?php //echo $row['country_name'] ?><!--</a></li>-->

                                    <option href="agents?id<?php echo $row['country_id'] ?>" class="active"><?php echo $row['country_name'] ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <!--// Search Widget -->
                        <div class="widget widget_nav_menu blog-bg radio-button">
                            <h5 class="widget-title border-bottom " >Top five deal countries</h5>
                            <ul>
                                <?php


                                $sql = mysqli_query($connection,"SELECT * FROM country  limit 5");
                                $row = mysqli_num_rows($sql);
                                while ($row = mysqli_fetch_array($sql)){ ?>
                                    <!--                                    echo "<option value='". $row['category_id'] ."'>" .$row['category_name'] ." </option>" ;-->

                                    <li  ><a class="active" href="agents.php?id=<?php echo $row['country_id'] ?>"><?php echo $row['country_name'] ?></a></li>
                                    <?php
                                }
                                ?>


                            </ul>
                        </div>

<!--                        <div class="widget blog-bg">-->
<!--                            <h5 class="widget-title border-bottom">Filters By Price</h5>-->
<!--                            <div class="price-filter">-->
<!--                                <div id="slider-range"></div>-->
<!--                                <div class="price-slider-amount">-->
<!--                                    <input type="submit" value="Enter Filters" />-->
<!--                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            &lt;!&ndash;// Price Filter&ndash;&gt;-->
<!--                        </div>-->

<!--                        <div class="widget blog-bg style-01">-->
<!--                            <h5 class="widget-title border-bottom">New Product</h5>-->
<!--                            <ul class="recent_post_item">-->
<!--                                <li class="single-recent-post-item">-->
<!--                                    <div class="thumb">-->
<!--                                        <img src="assets/img/shop/new-product/01.png" alt="recent post">-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <h5 class="title"><a href="#">Creative Audio System</a></h5>-->
<!--                                        <div class="common-rating-style left">-->
<!--                                            <input type="radio" name="start1" id="start111"><label-->
<!--                                                for="start111"></label>-->
<!--                                            <input type="radio" name="start1" id="start112"><label-->
<!--                                                for="start112"></label>-->
<!--                                            <input type="radio" name="start1" id="start113"><label-->
<!--                                                for="start113"></label>-->
<!--                                            <input type="radio" name="start1" id="start114"><label-->
<!--                                                for="start114"></label>-->
<!--                                            <input type="radio" name="start1" id="start115"><label-->
<!--                                                for="start115"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="single-recent-post-item">-->
<!--                                    <div class="thumb">-->
<!--                                        <img src="assets/img/shop/new-product/02.png" alt="recent post">-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <h5 class="title"><a href="#">Flash Deals Chair</a></h5>-->
<!--                                        <div class="common-rating-style left">-->
<!--                                            <input type="radio" name="start1" id="start221"><label-->
<!--                                                for="start221"></label>-->
<!--                                            <input type="radio" name="start1" id="start222"><label-->
<!--                                                for="start222"></label>-->
<!--                                            <input type="radio" name="start1" id="start223"><label-->
<!--                                                for="start223"></label>-->
<!--                                            <input type="radio" name="start1" id="start224"><label-->
<!--                                                for="start224"></label>-->
<!--                                            <input type="radio" name="start1" id="start225"><label-->
<!--                                                for="start225"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="single-recent-post-item">-->
<!--                                    <div class="thumb">-->
<!--                                        <img src="assets/img/shop/new-product/03.png" alt="recent post">-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <h5 class="title"><a href="#">Hanging 4K Camera</a></h5>-->
<!--                                        <div class="common-rating-style left">-->
<!--                                            <input type="radio" name="start1" id="start331"><label-->
<!--                                                for="start331"></label>-->
<!--                                            <input type="radio" name="start1" id="start332"><label-->
<!--                                                for="start332"></label>-->
<!--                                            <input type="radio" name="start1" id="start333"><label-->
<!--                                                for="start333"></label>-->
<!--                                            <input type="radio" name="start1" id="start334"><label-->
<!--                                                for="start334"></label>-->
<!--                                            <input type="radio" name="start1" id="start335"><label-->
<!--                                                for="start335"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="single-recent-post-item">-->
<!--                                    <div class="thumb">-->
<!--                                        <img src="assets/img/shop/new-product/04.png" alt="recent post">-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <h5 class="title"><a href="#">Back Camera Display</a></h5>-->
<!--                                        <div class="common-rating-style left">-->
<!--                                            <input type="radio" name="start1" id="start441"><label-->
<!--                                                for="start441"></label>-->
<!--                                            <input type="radio" name="start1" id="start442"><label-->
<!--                                                for="start442"></label>-->
<!--                                            <input type="radio" name="start1" id="start443"><label-->
<!--                                                for="start443"></label>-->
<!--                                            <input type="radio" name="start1" id="start444"><label-->
<!--                                                for="start444"></label>-->
<!--                                            <input type="radio" name="start1" id="start445"><label-->
<!--                                                for="start445"></label>-->
<!--                                        </div>-->
<!--                                        <div class="common-price-style">-->
<!--                                            Price: <span class="black">$145</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <!--// New Product Widget-->


<!--                        <div class="widget blog-bg style-01">-->
<!--                            <h5 class="widget-title border-bottom">Tags</h5>-->
<!--                            <div class="tagcloud">-->
<!--                                <a href="#">Black Car</a>-->
<!--                                <a href="#">Car Parts</a>-->
<!--                                <a href="#">Sport Car</a>-->
<!--                                <a href="#">Tayer</a>-->
<!--                                <a href="#">White</a>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!--// Tag Widget-->
                    </div>

                </div>
            </div>
        </div>
        <!--// Container-->
    </div>
    <!--// Blog Page Content-->


    <!-- footer area start -->
    <?php include 'footer.php'?>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"> <img src="assets/img/back-to-top.png" alt="img"> </span>
    </div>
    <!-- back to top area end -->



    <!-- jquery -->

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

</body>

</html>