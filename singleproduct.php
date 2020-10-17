<?php

include 'db/dbConnection.php';
$id1 =  $_GET['id'];
$dataqqq = " SELECT * FROM product_tbl  WHERE pro_id = '$id1' ";
$sql2qw = mysqli_query($connection,$dataqqq);
$row3q = mysqli_fetch_array($sql2qw);
$pdata = $row3q['pro_name'];
$pdata1 = $row3q['pro_catid'];
$pdata2 = $row3q['pro_prise'];
$pdata3 = $row3q['pro_description'];

$dataqqq = " SELECT * FROM category_tbl  WHERE category_id = '$pdata1' ";
$sql2qw = mysqli_query($connection,$dataqqq);
$row3q = mysqli_fetch_array($sql2qw);
$pdata4= $row3q['category_name'];


$datai = " SELECT * FROM image_table  WHERE pro_id = '$id1' ";
$sqli = mysqli_query($connection,$datai);
$rowi = mysqli_fetch_array($sqli);
$pdata5 = $rowi['image_name'];

?>

<!DOCTYPE html>
<html lang="en">


<body>
 <!--Main Header Start-->
    <?php include 'header.php'?>
    <!--// Main Header End Here-->


    <!--Breadcrumb Start-->
    <div class="breadcrumb-area style-03" style="background: url('assets/img/breadcrumb/op.jpg')">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-content">
                    <h1 class="page-title">Product</h1>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->

    <!--Product Details Tab-->
    <div class="product-details-tab padding-top-120 padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="Product-tab-big">
                        <div class="product-tab-big-active" style="padding: 212px 0;background-color: lightgreen;">
<!--                            <div class="product-tab-single-big-item" >-->
                                <img src="admin/galleryImg/<?php echo $pdata5;?>" alt="img">
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-02.png" alt="img">-->
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-03.png" alt="img">-->
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!---->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-04.png" alt="img">-->
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-01.png" alt="img">-->
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-02.png" alt="img">-->
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!---->
<!--                            <!--// Single Item-->-->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-03.png" alt="img">-->
<!--                            </div>-->
                            <!--// Single Item-->
                        </div>
                        <!--Slider Active Class-->
                    </div>
                    <!--// Product Tab Big-->

                    <div class="Product-tab-small-active padding-top-30">
<!--                        <div class="product-tab-single-small-item" data-slide-index="0">-->
<!--<!--                            <img src="assets/img/shop-details/small-01.png" alt="img">-->-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="1">-->
<!--<!--                            <img src="assets/img/shop-details/small-02.png" alt="img">-->-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="2">-->
<!--<!--                            <img src="assets/img/shop-details/small-03.png" alt="img">-->-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!---->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="3">-->
<!--<!--                            <img src="assets/img/shop-details/small-04.png" alt="img">-->-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!---->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="4">-->
<!--<!--                            <img src="assets/img/shop-details/small-01.png" alt="img">-->-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!---->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="5">-->
<!--                            <img src="assets/img/shop-details/small-02.png" alt="img">-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!---->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="6">-->
<!--                            <img src="assets/img/shop-details/small-03.png" alt="img">-->
<!--                        </div>-->
                        <!--// Single Item-->

                    </div>
                    <!--// Slider Active Class-->

                    <!--Product Information-->
<!--                    <div class="product-information padding-top-40 padding-bottom-95">-->
<!--                        <ul class="nav nav-tabs" id="myTab" role="tablist">-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link active" data-toggle="pill" href="#pills-description">Description</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" data-toggle="pill" href="#pills-information">Additional-->
<!--                                    Information</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" data-toggle="pill" href="#pills-review">Reviews</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                        <div class="tab-content description-tab-content">-->
<!--                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel">-->
<!--                                <p>-->
<!--                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem-->
<!--                                    Ipsum has been the industry's standard dummy-->
<!--                                    text ever since the 1500s, when an unknown printer took a galley of type and-->
<!--                                    scrambled it to make a type specimen book.-->
<!--                                    It has survived not only five centuries, but also the leap into electronic-->
<!--                                    typesetting, remaining essentially unchanged.-->
<!--                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem-->
<!--                                    Ipsum passages,-->
<!--                                    and more recently with desktop publishing software like Aldus PageMaker including-->
<!--                                    versions of Lorem Ipsum.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class="tab-pane fade" id="pills-information" role="tabpanel">-->
<!--                                <p>-->
<!--                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem-->
<!--                                    Ipsum has been the industry's standard dummy-->
<!--                                    text ever since the 1500s, when an unknown printer took a galley of type and-->
<!--                                    scrambled it to make a type specimen book.-->
<!--                                    It has survived not only five centuries, but also the leap into electronic-->
<!--                                    typesetting, remaining essentially unchanged.-->
<!--                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem-->
<!--                                    Ipsum passages,-->
<!--                                    and more recently with desktop publishing software like Aldus PageMaker including-->
<!--                                    versions of Lorem Ipsum.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class="tab-pane fade" id="pills-review" role="tabpanel">-->
<!--                                <p>-->
<!--                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem-->
<!--                                    Ipsum has been the industry's standard dummy-->
<!--                                    text ever since the 1500s, when an unknown printer took a galley of type and-->
<!--                                    scrambled it to make a type specimen book.-->
<!--                                    It has survived not only five centuries, but also the leap into electronic-->
<!--                                    typesetting, remaining essentially unchanged.-->
<!--                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem-->
<!--                                    Ipsum passages,-->
<!--                                    and more recently with desktop publishing software like Aldus PageMaker including-->
<!--                                    versions of Lorem Ipsum.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--// Product Information-->
                </div>

                <div class="col-lg-5">
                    <!--Product Description-->
                    <div class="product-description pl-lg-4">
                        <h4 class="title"><?php echo $pdata;?></h4>
                        <!--// Title-->
                        <div class="rating-wrap">
                            <div class="common-rating-style left">
                                <input type="radio" name="start1" id="start51"><label for="start51"></label>
                                <input type="radio" name="start1" id="start52"><label for="start52"></label>
                                <input type="radio" name="start1" id="start53"><label for="start53"></label>
                                <input type="radio" name="start1" id="start54"><label for="start54"></label>
                                <input type="radio" name="start1" id="start55"><label for="start55"></label>
                            </div>
                            <span class="how-many-rating"> (1k Customer Review)</span>
                        </div>
                        <!--// Rating Wrap-->
                        <div class="common-price-style">
                            Price: <span class="black"><?php echo $pdata2;?></span>
                        </div>
                        <!--// Price-->
                        <div class="padding-20">
                            <p><?php echo $pdata3;?></p>
                        </div>

<!--                        <div class="color-list">-->
<!--                            <span class="color-text">Color</span>-->
<!--                            <ul class="color-list-row">-->
<!--                                <li class="list-item"><a href="#">Black</a></li>-->
<!--                                <li class="list-item"><a href="#">Blue</a></li>-->
<!--                                <li class="list-item"><a href="#">Green</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                       // Color List-->
<!--                        <div class="color-list">-->
<!--                            <span class="color-text">Size</span>-->
<!--                            <ul class="color-list-row">-->
<!--                                <li class="list-item"><a href="#">Large</a></li>-->
<!--                                <li class="list-item"><a href="#">Medium</a></li>-->
<!--                                <li class="list-item"><a href="#">Small</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <!--// Size List-->
                        <div class="cart-wrap padding-top-10 padding-bottom-30">
                            <input type="number" value="1" class="qty" min="1">
                            <div class="main-btn-wrap">
                                <a href="#" class="main-btn black"><i class="flaticon-shopping-cart"></i> Add To
                                    Cart</a>
                            </div>
                        </div>
                        <!--// Cart Wrap-->

<!--                        <div class="sku product-meta">-->
<!--                            <span class="product-meta-name"> Sku:</span>-->
<!--                            <span class="name">150</span>-->
<!--                        </div>-->
                        <!--// Sku-->
                        <div class="category product-meta">
                            <span class="product-meta-name">Category:</span>
                            <span class="name" style="color: #1c7430;"><?php echo $pdata4;?></span>
                        </div>
                        <!--// Category-->
<!--                        <div class="tag product-meta">-->
<!--                            <span class="product-meta-name">Tage:</span>-->
<!--                            <ul class="tag-list-row">-->
<!--                                <li><a href="#">Car,</a></li>-->
<!--                                <li><a href="#">Tyer,</a></li>-->
<!--                                <li><a href="#">Body</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <!-- Tag-->

                    </div>
                    <!--// Product Description-->
                </div>




            </div>

        </div>
    </div>
    <!--// Product Details Tab-->


    <!-- footer area start -->
    <?php include 'footer.php'?>
    <!-- footer area end -->


</body>

</html>