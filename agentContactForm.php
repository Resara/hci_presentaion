<?php

include 'db/dbConnection.php';
$id1 =  $_GET['id'];

$datai2 = " SELECT * FROM agent_image_tbl  WHERE agent_id = '$id1' ";
$sqli = mysqli_query($connection,$datai2);
$rowi = mysqli_fetch_array($sqli);
$datai = $rowi['image_name'];

$dataq = " SELECT * FROM agent_details  WHERE agent_id = '$id1' ";
$sqlq = mysqli_query($connection,$dataq);
$rowq = mysqli_fetch_array($sqlq);
$dataiq = $rowq['agent_id'];
$dataiq1 = $rowq['agent_name'];
$dataiq2 = $rowq['agent_countryId'];
$dataiq3 = $rowq['email'];
$dataiq4 = $rowq['phone_num'];

$data = " SELECT * FROM country  WHERE country_id = '$dataiq2' ";
$sql2 = mysqli_query($connection,$data);
$row3 = mysqli_fetch_array($sql2);
$cdata = $row3['country_name'];
$cdata1 = $row3['country_code'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coche Car Servicing HTML Template</title>

    <!-- favicon -->
    <link rel=icon href=favicon.ico sizes="20x20" type="image/png">
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
    <!--Slick Carousel-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        .txt1{
            letter-spacing: 4px;
            position: relative;
            animation: text 3s 1;
        }
        @keyframes text {
        0%{
            color: transparent;
            margin-bottom: -20px;
        }
         30%{
             letter-spacing: 25px;
             margin-bottom: -20px;
         }
            85%{
                letter-spacing: 4px;
                margin-bottom: -20px;
            }

        }


        .photo{
            animation: photo 3s 1;
        }
        @keyframes photo {
            0%{
                width: 80px;
                height: 80px;
            }
            30%{
                width: 105px;
                height: 105px;
            }
            85%{
                width: 250px;
                height: 250px;
            }


        }
        .pasindu{
            font-family: sans-serif;
            flex-direction: column;
            justify-content: space-around;
            width: 50%;
            position: relative;

        }
        .pasindu input {
            width: 100%;
            height: 100%;
            color: #0b2e13;
            padding-top: 20px;
            border: none;
        }
        .pasindu label{
            position: absolute;
            bottom: 0px ;
            left: 0%;
            width: 100%;
            height: 100%;
            pointer-events: none;
            border-bottom: 1px solid black;
        }
        .pasindu label ::after{
            content: "";
            position: absolute;
            left: 0px;
            bottom: -1px;
            height: 100%;
            width: 100%;
            border-bottom: 3px solid darkgreen;
            transform: translateX(-100%);
        }
        .content-name {
            position: absolute;
            bottom: 5px;
            left: 0px;
            transition: all 0.3s ease ;
        }
        .pasindu input:focus + .label-name{
            transform: translateY(-150%);

        }


    </style>

</head>

<body  style="background-color: #b1dfbb;">

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

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- // search Popup -->

    <!--Sidebar Nav-->
    <div id="sidebar" class="sidebar-class right">
        <div class="toggle-btn">
            <span class="closebtn" title="Close Overlay">×</span>
        </div>
        <div class="sidebar-logo-area">
            <!--Logo Area Start-->
            <div class="logo-area">
                <a href="index.html">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
            </div>
            <!--// Logo Area End-->
            <p>We believe brand interaction is key in commu- nication.
                Real innovations and a positive customer experience are the heart of successful communication.</p>
        </div>
        <!--// Sidebar Logo Area-->

        <div class="sidebar-working-area">
            <div class="section-title padding-bottom-20">
                <h4 class="heading-04">Work Hour</h4>
            </div>
            <div class="timing-area">
                <div class="date">Monday to Friday</div>
                <div class="time">
                    <span>7:00</span> - <span>21:00</span>
                </div>

                <div class="date padding-top-20">Saturday</div>
                <div class="time">
                    <span>7:00</span> - <span>16:00</span>
                </div>
            </div>
        </div>
        <!--// Sidebar Working Area-->

        <div class="sidebar-contact-area">
            <div class="section-title padding-bottom-20">
                <h4 class="heading-04">Contact</h4>
            </div>
            <div class="timing-area">
                <div class="date">Support:</div>
                <div class="time">
                    <span> (012) 800 456 789</span>
                </div>

                <div class="date padding-top-20">Shoroom:</div>
                <div class="time">
                    <span>Lavaca Street, Suite 2000 <br> Austin, TX 24141</span>
                </div>
            </div>
        </div>
        <!--// Sidebar Contact Area-->
        <div class="sidebar-social-icon-wrap">
            <div class="banner__header__follow_us">
                <div class="text">FOLLOW US</div>
                <div class="banner__header__icon">
                    <ul>
                        <li><a class="icon" href="https://www.facebook.com/codingeek.net/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a class="icon" href="https://twitter.com/codingeeknet" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a class="icon" href="https://www.instagram.com/codingeeknet" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a class="icon" href="https://www.linkedin.com/company/codingeek/about" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// Sidebar Social Icon-->
    </div>
    <!--// Sidebar Nav-->

    <!--Open Menu Cart-->
    <div id="menu-cart-open">
        <div class="cart-title-wrap">
            <div class="title">
                <h3 class="heading-03">Cart</h3>
            </div>
            <div class="show-cart">
                <span class="closebtn" title="Close Overlay">×</span>
            </div>
        </div>
        <!--// Cart Title-->
        <div class="cart-content">
            <div class="cart-item-wrap">
                <!-- cart Single Item-->
                <div class="cart-single-item">
                    <div class="item-left">
                        <img src="assets/img/cart/01.png" alt="img">
                    </div>
                    <div class="item-right">
                        <div class="item-text">
                            <h5 class="heading-05">Honda NSX</h5>
                            <div class="price"><span class="price_text"> Price:</span> $145 </div>
                        </div>
                    </div>
                    <div class="cart-item-close-btn">×</div>
                </div>
                <!--// cart Single Item-->

                <!-- cart Single Item-->
                <div class="cart-single-item">
                    <div class="item-left">
                        <img src="assets/img/cart/02.png" alt="img">
                    </div>
                    <div class="item-right">
                        <div class="item-text">
                            <h5 class="heading-05">Auto Clutch & Brake</h5>
                            <div class="price"><span class="price_text"> Price:</span> $145 </div>
                        </div>
                    </div>
                    <div class="cart-item-close-btn">×</div>
                </div>
                <!--// cart Single Item-->

                <!-- cart Single Item-->
                <div class="cart-single-item">
                    <div class="item-left">
                        <img src="assets/img/cart/03.png" alt="img">
                    </div>
                    <div class="item-right">
                        <div class="item-text">
                            <h5 class="heading-05">Flash Deals Tyre</h5>
                            <div class="price"><span class="price_text"> Price:</span> $145 </div>
                        </div>
                    </div>
                    <div class="cart-item-close-btn">×</div>
                </div>
                <!--// cart Single Item-->

                <!-- Subtotal-->
                <div class="cart-single-item subtotal">
                    <div class="item-left">
                        <h5 class="heading-05">Subtotal:</h5>
                    </div>
                    <div class="item-right">
                        <div class="amount">$45,180</div>
                    </div>
                </div>
                <!--// Subtotal-->

                <div class="main-btn-wrap padding-top-20">
                    <a href="#" class="main-btn black">VIEW CART</a>
                </div>
                <div class="main-btn-wrap padding-top-20">
                    <a href="#" class="main-btn black">CHECKOUT</a>
                </div>
                <!--// Button -->
            </div>
        </div>
    </div>
    <!--// Open Menu Cart-->


    <!--Main Header Start-->
    <header class="position-inherit border-none">
        <!--Topbar area-->
        <div class="topbar-area style-02">
            <div class="container" >
                <div class="topbar-inner">
                    <div class="left-content">
                        Ordered before 17:30, shipped today - Support: (012) 800 456 789
                    </div>
                    <div class="right-content">
                        <div class="social-icon">
                            <ul>
                                <li><a class="icon" href="https://twitter.com/codingeeknet" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a class="icon" href="https://www.instagram.com/codingeeknet" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a class="icon" href="https://www.facebook.com/codingeek.net/" target="_blank"><i
                                            class="fab fa-facebook-square"></i></a></li>
                            </ul>
                        </div>
                        <div class="custom-select-box style-02">
                            <select>
                                <option value="ban">Ban</option>
                                <option value="eng">Eng</option>
                                <option value="hindi">Hindi</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </div>
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
                        <a href="index.html">
                            <img src="assets/img/logo-02.png" alt="Logo">
                        </a>
                    </div>
                    <!--// Logo Area End-->

                    <!--Navbar Area Start Here-->
                    <nav class="navbar navbar-area navbar-expand-lg style-02">
                        <div class="container nav-container">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#autoshop_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="humberger-menu black">
                                    <span class="one"></span>
                                    <span class="two"></span>
                                    <span class="three"></span>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse" id="autoshop_main_menu">
                                <ul class="navbar-nav">
                                    <li class="menu-item-has-children">
                                        <a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                            <li><a href="index-4.html">Home 04</a></li>
                                            <li><a href="index-5.html">Home 05</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="service-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-02.html">Shop 02</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="shop-details-2.html">Shop Details 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children current-menu-item">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">UI Elements</a>
                                                <ul class="sub-menu">
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="accordions.html">Accordions</a></li>
                                                    <li><a href="buttons.html">Buttons</a></li>
                                                    <li><a href="icons.html">Icons</a></li>
                                                    <li><a href="table.html">Table</a></li>
                                                    <li><a href="pagination.html">Pagination</a></li>
                                                    <li><a href="modal.html">Modal</a></li>
                                                    <li><a href="form.html">Form</a></li>
                                                    <li><a href="header.html">Header</a></li>
                                                    <li><a href="footer.html">Footer</a></li>
                                                    <li><a href="alert.html">Alert</a></li>
                                                    <li><a href="countdown.html">Countdown</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="car-sell.html">Car Sell</a></li>
                                            <li><a href="car-repair.html">Car Repair</a></li>
                                            <li><a href="car-booking.html">Car Booking</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="sign-in.html">Sign In</a></li>
                                            <li><a href="sign-up.html">Sign Up</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!--Nav Right Content-->
                            <div class="nav-right-content black">
                                <ul>
                                    <li class="cart show-cart">
                                        <a href="#" class="notification">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="badge">3</span>
                                        </a>
                                    </li>
                                    <li class="search" id="search">
                                        <i class="fa fa-search"></i>
                                    </li>
                                    <li>
                                        <div class="humberger-menu black toggle-btn">
                                            <span class="one"></span>
                                            <span class="two"></span>
                                            <span class="three"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// Nav Right Content-->
                        </div>
                    </nav>
                    <!-- navbar area end -->
                </div>
                <!--// header Bottom-->
            </div>
        </div>
    </header>
    <!--// Main Header End Here-->


    <!--Breadcrumb Start-->
    <div class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb/coverform.gif'); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title txt1" >Contact Your Agent</h1>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Your Agent</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->

    <!--Step Car Sell-->
    <div class="step-car-sell">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="step-car-sell__thumb margin-minus">
                        <img  class="photo" src="admin/galleryImg/<?php echo $datai ;?>" alt="img" height="200px">
                    </div>
                </div>
                <!--// Thumbnail-->

                <div class="col-lg-12 padding-bottom-160 "      >
                    <div class="step-car-sell__content">
                        <div class="step-car-sell__details">
                            <form >

                                <div class="step-car-sell__details_form style-02">
                                    <div class="row">

                                        <div class="col-lg-6">
<!--                                            $dataiq = $rowq['agent_id'];-->
<!--                                            $dataiq1 = $rowq['agent_name'];-->
<!--                                            $dataiq2 = $rowq['agent_countryId'];-->
<!--                                            $dataiq3 = $rowq['email'];-->
<!--                                            $dataiq4 = $rowq['phone_num'];-->
<!---->
<!--                                            $data = " SELECT * FROM country  WHERE country_id = '$dataiq2' ";-->
<!--                                            $sql2 = mysqli_query($connection,$data);-->
<!--                                            $row3 = mysqli_fetch_array($sql2);-->
<!--                                            $cdata = $row3['country_name'];-->
<!--                                            $cdata1 = $row3['country_code'];-->

                                                <label for="first_name" style="font-weight: bold;">Agent Name</label>
                                                <input id="first_name" value="<?php echo $dataiq1 ;?>" name="first-name" type="text" class="form-control" style="border-radius: 5px; border: none; background-color: transparent;">

                                                <label for="email_address" style="font-weight: bold;"> Agent Email Address</label>
                                                <input id="email_address" value="<?php echo $dataiq3 ;?>" name="email" type="email" class="form-control" style="border-radius: 5px; border: none; background-color: transparent;">

                                                <label for="phone_number" style="font-weight: bold;">Agent Phone Number</label>
                                                <input id="phone_number" value="<?php echo $dataiq4 ;?>" name="number" type="text" class="form-control" style="border-radius: 5px; border: none; background-color: transparent;">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="first_name" style="font-weight: bold;">Agent Country</label>
                                                    <input id="country_name" value="<?php echo $cdata ;?>"  name="first-name" type="text" class="form-control " style="border-radius: 5px; border: none; background-color: transparent;">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="first_name" style="font-weight: bold;">Agent Country Code</label>
                                                    <input id="country_name" value="<?php echo $cdata1 ;?>" name="first-name" type="text" class="form-control " style="border-radius: 5px; border: none; background-color: transparent;">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">
                                            <label for="first_name" style="font-weight: bold;">Your Name</label>
                                            <input id="first_name" name="first-name" type="text" class="form-control " style="border-radius: 5px; border-color: #82838A;background-color: #F5F5F5" >

                                            <label for="email_address" style="font-weight: bold;"> Your Email Address</label>
                                            <input id="email_address" name="email" type="email" class="form-control" style="border-radius: 5px; border-color: #82838A;background-color: #F5F5F5">

                                            <label for="phone_number" style="font-weight: bold;">Your Phone Number</label>
                                            <input id="phone_number" name="number" type="text" class="form-control" style="border-radius: 5px; border-color: #82838A;background-color: #F5F5F5">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="first_name" style="font-weight: bold;">Your Country</label>
                                                    <input id="country_name" name="first-name" type="text" class="form-control " style="border-radius: 5px; border-color: #82838A;background-color: #F5F5F5">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="first_name" style="font-weight: bold;">Your Country Code</label>
                                                    <input id="country_name" name="first-name" type="text" class="form-control " style="border-radius: 5px; border-color: #82838A;background-color: #F5F5F5">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="first_name" style="font-weight: bold;">Massege</label>
                                            <textarea id="country_name" name="first-name" type="text" class="form-control " style="border-radius: 5px; border-color: #82838A;background-color: #F5F5F5"></textarea>
                                            <input id="country_name" name="first-name" type="text" class="form-control " hidden>
                                        </div>



<!--                                        form end-->
<!--                                        <div class="col-lg-6">-->
<!--                                            <label for="last_name">Last Name</label>-->
<!--                                            <input id="last_name" name="last-name" type="text" class="form-control">-->
<!--                                        </div>-->
<!--                                        <div class="col-lg-6">-->
<!--                                            <label for="email_address"> Agent Email Address</label>-->
<!--                                            <input id="email_address2" name="email" type="email" class="form-control">-->

<!--                                        </div>-->
<!--                                        <div class="col-lg-6">-->
<!--                                            <label for="phone_number">Phone Number</label>-->
<!--                                            <input id="phone_number2" name="number" type="text" class="form-control">-->
<!--                                        </div>-->
<!--                                        <div class="col-lg-4">-->
<!--                                            <label for="car_make">Car Make</label>-->
<!--                                            <input id="car_make" type="text" name="car-make" class="form-control">-->
<!--                                        </div>-->
<!--                                        <div class="col-lg-4">-->
<!--                                            <label for="car_model">Model</label>-->
<!--                                            <input id="car_model" type="text" name="car-model" class="form-control">-->
<!--                                        </div>-->
<!--                                        <div class="col-lg-4">-->
<!--                                            <label for="fuel_type">Fuel Type</label>-->
<!--                                            <input id="fuel_type" type="text" name="fuel-type" class="form-control">-->
<!--                                        </div>-->
<!--                                        <div class="col-lg-4">-->
<!--                                            <label for="engine_size">Engine Size</label>-->
<!--                                            <input id="engine_size" type="text" name="engine-size" class="form-control">-->
<!--                                        </div>-->
<!--                                        <div class="col-lg-4">-->
<!--                                            <label>Desired Date And Time</label>-->
<!--                                            <input type="text" class="form-control datepicker" autocomplete="off">-->
<!--                                        </div>-->
<!--                                        <div class="col-lg-4">-->
<!--                                            <label for="garage">Preferred Garage</label>-->
<!--                                            <input id="garage" type="text" name="garage" class="form-control">-->
<!--                                        </div>-->

                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center">
                                                <div class="main-btn-wrap padding-top-5 pr-5">
                                                    <a href="#" class="main-btn black" data-toggle="modal" data-target="#exampleModal">SEND NOW</a>
                                                </div>
                                                <!--// Main Btn-->
                                                <p>By submitting this form, you will be requesting trade-in value at no
                                                    obligation and well be contacted within 48 hours by a sales
                                                    representative.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                            </form>
                        </div>
                    </div>
                    <!--// Step Car Sell Content-->
                </div>
            </div>
        </div>
    </div>
    <!--// Step Car Sell-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area start -->
    <footer class="footer-area style-02" style="background-image: url('assets/img/bg/footer-bg.png')">
        <div class="footer-top ">
            <div class="container">
                <div class="row">
                    <div class="footer-subscribe-area">
                        <h4 class="title">Subscribe News Letter & Get Company News</h4>
                        <div class="subscribe-area">
                            <form>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter your email address">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <input type="submit" value="Subscribe">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row padding-top-120 padding-bottom-40">
                    <div class="col-lg-4 col-md-6 px-lg-0">
                        <div class="footer-widget widget">
                            <div class="about_us_widget">
                                <a href="index.html" class="footer-logo"> <img src="assets/img/logo.png"
                                        alt="footer logo"></a>
                                <p>We believe brand interaction is key in commu- nication. Real innovations and a
                                    positive customer
                                    experience are the heart of successful communication.</p>

                                <div class="footer-social-icon padding-top-10">
                                    <div class="banner__header__follow_us">
                                        <div class="text">FOLLOW US</div>
                                        <div class="banner__header__icon">
                                            <ul>
                                                <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                                        target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a class="icon" href="https://twitter.com/codingeeknet"
                                                        target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                                        target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li><a class="icon"
                                                        href="https://www.linkedin.com/company/codingeek/about"
                                                        target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-6 px-lg-0">
                        <div class="footer-widget widget widget_nav_menu">
                            <h5 class="widget-title">Company</h5>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 px-lg-0">
                        <div class="footer-widget widget widget_nav_menu">
                            <h5 class="widget-title">Services</h5>
                            <ul>
                                <li><a href="#">Latest Cars</a></li>
                                <li><a href="#">Featured Car</a></li>
                                <li><a href="#">Sell Your Car</a></li>
                                <li><a href="#">Buy a Car</a></li>
                                <li><a href="#">Strategy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 px-lg-0">
                        <div class="footer-widget widget">
                            <h5 class="widget-title">Contact us</h5>
                            <div class="contact-area">
                                <ul>
                                    <li><i class="icon flaticon-pin"></i><a href="#">Lavaca Street, Suite 2000 Austin,
                                            TX 24141</a></li>
                                    <li><i class="icon flaticon-email"></i><a href="#">autoshop@gmail.com</a></li>
                                    <li><i class="icon flaticon-call-answer"></i><a href="#">(+88) 0172 570051</a></li>
                                    <li><i class="icon flaticon-global"></i><a href="#">www.autoshop.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-inner">
                            &copy; Auto shop 2019 All rights reserved. Powered with <span class="coypright-icon"><i
                                    class="fas fa-heart"></i></span> by
                            <a href="https://codingeek.net/" target="_blank">Codingeek</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"> <img src="assets/img/back-to-top.png" alt="img"> </span>
    </div>
    <!-- back to top area end -->


    <!-- jquery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!--migrate-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Jwuery UI-->
    <script src="assets/js/jquery-ui.js"></script>
    <!-- waypoint -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>
    <!--Slick Js-->
    <script src="assets/js/slick.min.js"></script>
    <!-- counterup -->
    <script src="assets/js/jQuery.rcounter.js"></script>
    <!--Nice Select-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>

</html>