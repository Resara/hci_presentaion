<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mlesna Tea</title>

    <!-- favicon -->
    <link rel=icon href=assets/img/Pazan/logosdasdadsd.png sizes="50x50" type="image/png">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!--Themefy Icons-->
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/jquery.rprogessbar.min.css">
    <!--Video Popup-->
    <link rel="stylesheet" href="assets/css/rpopup.min.css">
    <!--Slick Carousel-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>

<?php

include 'db/dbConnection.php';
//$id1 =  $_GET['id'];
$dataqqq = " SELECT * FROM country  WHERE country_id = 5 ";
$sql2qw = mysqli_query($connection,$dataqqq);
$row3q = mysqli_fetch_array($sql2qw);
//$row3q['country_id'];

$dataqqq1 = " SELECT * FROM category_tbl  WHERE category_id = 1 ";
$sql2qw = mysqli_query($connection,$dataqqq1);
$row3q1 = mysqli_fetch_array($sql2qw);
$row3q1['category_id'];
?>


<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!--Full Width Sider Start-->
<!--<div class="full-width-slider">-->
    <!--Main Header Start-->
    <header>
        <!--Topbar area-->
        <div class="topbar-area">
            <div class="container">
                <div class="row">
                    <div class="topbar-inner">

                    </div>
                </div>
            </div>
        </div>
        <!--// Top Bar Area End-->

        <div class="container">
            <div class="row">
                <div class="header-bottom-area">

                    <!--Logo Area Start-->
                    <div class="logo-area">
                        <a href="index.php">
                            <img src="assets/img/Pazan/logosdasdadsd.png" alt="Logo" style="width: 200px ;height: 90px">
                        </a>
                    </div>
                    <!--// Logo Area End-->

                    <!--Navbar Area Start Here-->
                    <nav class="navbar navbar-area navbar-expand-lg">
                        <div class="container nav-container">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#autoshop_main_menu" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="humberger-menu">
                                        <span class="one"></span>
                                        <span class="two"></span>
                                        <span class="three"></span>
                                    </span>
                            </button>
                            <div class="collapse navbar-collapse" id="autoshop_main_menu">
                                <ul class="navbar-nav">
                                    <li><a href="index.php">Home</a></li>
<!--                                    <li><a href="service.html">Tea Guide</a></li>-->
                                    <li class="menu-item-has-children">
                                        <a href="#">The Tea Catalogue</a>
                                        <ul class="sub-menu">
                                            <li><a href="products.php?id=<?php echo  $row3q1['category_id']; ?>">Tea Products</a></li>
                                            <li><a href="speciality_tea.php">Speciality Tea</a></li>
                                            <li><a href="consumerItems.php">Consumer Items</a></li>
                                            <li><a href="catering.php">Catering Items</a></li>
                                            <li><a href="beawring.php">Brewing & Tasting</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="agents?id=<?php echo  $row3q['country_id']; ?>">Overseas Agents</a></li>
                                    <li><a href="new_order.php">Importors</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Learn about tea </a>
                                        <ul class="sub-menu">
                                            <li><a href="history.php">History</a></li>
                                            <li><a href="recipes.php">Recipes</a></li>
                                            <li><a href="glossary.php">Glossary</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="tea_review.php">Reviews</a></li>

                                </ul>
                            </div>

                        </div>
                    </nav>
                    <!-- navbar area end -->

                </div>
                <!--// header Bottom-->
            </div>
        </div>
    </header>
    <!--// Main Header End Here-->



    <!--Carouse Dots Area-->
    <div class="carousel-dots-area">
        <div class="container">
            <div class="carousel-dots">
            </div>
        </div>
    </div>
</body>