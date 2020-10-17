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


<style>
    .w3l-footer.two ul li {
        list-style-type: none;
        display: block;
        line-height: 1.5em;
        font-size: 14px;
        margin: 18px 0;
    }
    #whatsappp {
        color: white;
        /* text-decoration: none; */
        position: fixed;
        bottom: 20px;
        right: 2%;
        /* overflow: hidden; */
        z-index: 999;
        width: 40px;
        height: 40px;
        border: none;
        text-indent: 100%;
        margin-right: 70px;
    }
</style>

<body>


    <!--// Open Menu Cart-->

    <!--Main Header Start-->
    <?php include 'header.php'?>
    <!--// Main Header End Here-->

    <!--Breadcrumb Start-->
    <div class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb/coverform.gif')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">Contact Your Agent</h1>
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

    <div class="sign padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="sign-register-area" style="background-image: url(assets/img/sign-in/01.jpg)">
                        <div class="sign-register-area-inner">
                            <h4 class="title" > <img src="admin/galleryImg/<?php echo $datai; ?>"></h4>
                            <h4 class="title"><?php echo $dataiq1;?></h4>
<!--                            <h4 class="title">Existing User</h4>-->
<!--                            <h4 class="title">Existing User</h4>-->
<!--                            <h4 class="title">Existing User</h4>-->
                            <div class="contact-items padding-top-20">
                                <div class="icon">
                                    <img src="assets/img/marker.png" alt="marker">
                                </div>
                                <h5 class="heading" style="color: white"><?php echo $cdata;?></h5>
                                <div class="contact">
<!--                                    <span class="contact-info">FairView Ave, El Monte</span>-->
<!--                                    <span class="contact-info">California 91732</span>-->
                                </div>
                            </div>
                            <div class="contact-items padding-top-20">
                                <div class="icon">
                                    <i class="flaticon-call-answer"></i>
                                </div>
                                <h5 class="heading" style="color: white"><?php echo $dataiq4;?></h5>
                                <div class="contact">
<!--                                    <span class="contact-info">FairView Ave, El Monte</span>-->
<!--                                    <span class="contact-info">California 91732</span>-->
                                </div>
                            </div>
                            <div class="contact-items padding-top-20">
                                <div class="icon">
                                    <i class="flaticon-black-back-closed-envelope-shape"></i>
                                </div>
                                <h5 class="heading" style="color: white"><?php echo $dataiq3;?></h5>
                                <div class="contact">
                                    <!--                                    <span class="contact-info">FairView Ave, El Monte</span>-->
                                    <!--                                    <span class="contact-info">California 91732</span>-->
                                </div>
                            </div>


                            <div class="main-btn-wrap text-center">
<!--                                <a href="#" class="main-btn white uppercase">SIGN IN</a>-->
                            </div>
                        </div>
                    </div>
                    <!--// Register Area-->
                </div>
                <div class="col-lg-5">
                    <div class="sign-in-area">
                        <!--Form-->
<!--                        <form action="sign-in.html">-->
<!--                            <a href="#" class="btn-login-with google">-->
<!--                                <i class="icon fab fa-google-plus-g"></i>-->
<!--                                <span class="text">Sign In With Google</span>-->
<!--                            </a>-->
                            <!--// Google BTN-->
<!--                            <a href="#" class="btn-login-with facebook">-->
<!--                                <i class="icon fab fa-facebook-f"></i>-->
<!--                                <span class="text">Sign in with Facebook</span>-->
<!--                            </a>-->
                            <!--// Facebook BTN-->
                            <div class="h5-tab-slider-right-items"></div>
                            <!--// Border-->

                            <label for="name">Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon flaticon-man-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                            </div>
                            <!--// Email-->

                            <label for="email" class="padding-top-30">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon flaticon-black-back-closed-envelope-shape"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                            </div>
                            <!--// Email-->



                            <label for="phone" class="padding-top-30">Phone Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="flaticon-call-answer"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="phone" placeholder="Enter Your Phone Number">
                            </div>
                            <!--// Password-->

                            <label for="confirm_password" class="padding-top-30">Country Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="flaticon-global"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="country" placeholder="Enter Your Country Name">
                            </div>


                            <label for="confirm_password" class="padding-top-30">Massege</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="flaticon-send"></i>
                                    </span>
                                </div>
                                <textarea type="text" class="form-control" id="phone" placeholder="Enter Your Phone Number"></textarea>
                            </div>
                            <!--// Confirm Password-->

                            <div class="main-btn-wrap text-center padding-top-60">
                                <input type="button" class="main-btn black uppercase" onclick="register()" value="SEND NOW">
                            </div>

<!--                        </form>-->
                        <!--// Form-->
                    </div>
                    <!--// Sign In Area-->
                </div>
            </div>
        </div>
    </div>

    <!--Cantact-->
<!--    <div class="contact-page padding-top-115 padding-bottom-120">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-5">-->
<!--                    <div class="left-content">-->
<!--                        <div class="section-title">-->
<!--                            <h2 class="heading-02 padding-bottom-20">Get In Touch</h2>-->
<!--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
<!--                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-7">-->
<!--                    <form action="contact.html" class="contact-form">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-6">-->
<!--                                <div class="form-group">-->
<!--                                    <label for="name">Name</label>-->
<!--                                    <input type="text" class="form-control" id="name">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6">-->
<!--                                <div class="form-group">-->
<!--                                    <label for="email">Email</label>-->
<!--                                    <input type="email" class="form-control" id="email">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6">-->
<!--                                <div class="form-group">-->
<!--                                    <label for="phone">Phone</label>-->
<!--                                    <input type="tel" class="form-control" id="phone">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6">-->
<!--                                <div class="form-group">-->
<!--                                    <label for="subject">Subject</label>-->
<!--                                    <input type="text" class="form-control" id="subject">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="form-group">-->
<!--                                    <label for="message">Message</label>-->
<!--                                    <textarea class="form-control" cols="30" rows="10" id="message"></textarea>-->
<!--                                </div>-->
<!--                                <div class="main-btn-wrap">-->
<!--                                    <input class="main-btn black" type="submit" value="Send Message">-->
<!--                                </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!--// Cantact-->

    <div class="quick-find-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class='find-us-inner'>
                        <h4 class="title">Quick Find Us</h4>
                        <!--Contact Items-->
                        <div class="contact-items padding-top-20">
                            <div class="icon">
                                <img src="assets/img/marker.png" alt="marker">
                            </div>
                            <h5 class="heading">Showroom</h5>
                            <div class="contact">
                                <span class="contact-info">FairView Ave, El Monte</span>
                                <span class="contact-info">California 91732</span>
                            </div>
                        </div>
                        <!--// Contact Items-->

                        <!--Contact Items-->
                        <div class="contact-items padding-top-20">
                            <div class="icon">
                                <i class="flaticon-call-answer"></i>
                            </div>
                            <h5 class="heading">Phone</h5>
                            <div class="contact">
                                <span class="contact-info">(+88) 0172 570051</span>
                                <span class="contact-info">(+88) 0172 570051</span>
                            </div>
                        </div>
                        <!--// Contact Items-->

                        <!--Contact Items-->
                        <div class="contact-items padding-top-20">
                            <div class="icon">
                                <i class="flaticon-black-back-closed-envelope-shape"></i>
                            </div>
                            <h5 class="heading">Email</h5>
                            <div class="contact">
                                <span class="contact-info">autoshop@gmaill.com</span>
                                <span class="contact-info">autoshop@gmaill.com</span>
                            </div>
                        </div>
                        <!--// Contact Items-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="col-6 w3l-footer two">
        <div class="iconWhatsUp">
            <ul>
                <li><a class="whatsapp" id="whatsappp" href="https://web.whatsapp.com/send?phone=+94750309176">
                        <img src="data:image/png;base64,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"/></a></li>
            </ul>
        </div>

    </div>

    <!--Google Map -->
    <div class="google-map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div id="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.1899657893728!2d90.42380431666383!3d23.779746865573756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7499f257eab%3A0xe6b4b9eacea70f4a!2sManama+Tower!5e0!3m2!1sen!2sbd!4v1561542597668!5m2!1sen!2sbd"
                            style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Google Map End-->


    <!-- footer area start -->
    <?php include 'footer.php'?>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"> <img src="assets/img/back-to-top.png" alt="img"> </span>
    </div>
    <!-- back to top area end -->



    <!-- jquery -->
<!--    <script src="assets/js/jquery-3.4.1.min.js"></script>-->
<!--    <!--migrate-->-->
<!--    <script src="assets/js/jquery-migrate.min.js"></script>-->
<!--    <!-- bootstrap -->-->
<!--    <script src="assets/js/bootstrap.min.js"></script>-->
<!--    <!-- waypoint -->-->
<!--    <script src="assets/js/waypoints.min.js"></script>-->
<!--    <!-- wow -->-->
<!--    <script src="assets/js/wow.min.js"></script>-->
<!--    <!--Slick Js-->-->
<!--    <script src="assets/js/slick.min.js"></script>-->
<!--    <!-- counterup -->-->
<!--    <script src="assets/js/jQuery.rcounter.js"></script>-->
<!--    <!--Nice Select-->-->
<!--    <script src="assets/js/jquery.nice-select.min.js"></script>-->
<!--    <!-- imageloaded -->-->
<!--    <script src="assets/js/imagesloaded.pkgd.min.js"></script>-->
<!--    <!--Google Map API-->-->
<!--    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVyNXoXHkqAwBKJaouZWhHPCP5vg7N0HQ&callback=initMap"-->
<!--        async defer></script> -->-->
<!--    <!--Google Map Active-->-->
<!--    <!-- <script src="assets/js/goolg-map-activate.js"></script> -->-->
<!--    <!-- main js -->-->
<!--    <script src="assets/js/main.js"></script>-->
<script>
    function register() {
        var userName = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("phone").value;


        if (!checkValidation(userName)) {
            // iziToast.error({
            //     title: user_name_field,
            //     position: 'bottomLeft',
            //     iconUrl: 'img/warning.png',
            //     timeout: 3000,
            // });
            alert("invalid name");
        } else if (!checkEmailOrPhone(email)) {
            // iziToast.error({
            //     title: valid_email_or_phone_number,
            //     position: 'bottomLeft',
            //     iconUrl: 'img/warning.png',
            //     timeout: 3000,
            // });
            alert("invalid Email");
        } else {
            $.ajax({
                url: 'pasindu.php',
                dataType: 'json',
                type: 'post',
                contentType: 'application/json',
                data: JSON.stringify({
                    // username: userName,
                    // emailorphone: email,
                    // password: password,
                    // language: "EN"
                }),
                beforeSend: function (data) {
                    // console.log(data);

                },
                success: function (data) {
                   console.log(data);
                    alert(data.status);

                    // alert("succses");
                    window.location.replace("index.php");
                    // // register-done.php
                    // // $("").hide();
                    // $('#registerModal').modal('hide');
                },
                error: function (data) {
                    // iziToast.error({
                    //     title: data.responseJSON['messege'],
                    //     position: 'bottomLeft',
                    //     iconUrl: 'img/warning.png',
                    //     timeout: 3000,
                    // });
                    alert("error");
                }
            });
        }
    }

    // function login() {
    //     var email = document.getElementById("emailOrPhoneee").value;
    //     var pass = document.getElementById("passwordss").value;
    //
    //     $.ajax({
    //         url:'',
    //         dataType: 'json',
    //         type: 'post',
    //         contentType: 'application/json',
    //         data: JSON.stringify({
    //             // emailorphone: email,
    //             // password: pass,
    //             // language: "SH"
    //         }),
    //         beforeSend: function (data) {
    //             console.log(data);
    //
    //         },
    //         success: function (data) {
    //             console.log(data);
    //             // if (data.status == true) {
    //             //     localStorage.setItem("user_id", data["user_id"]);
    //             //     localStorage.setItem("user_name",data["username"]);
    //             //     localStorage.setItem("token", data["token"]);
    //             //     localStorage.setItem("shop_id", data['shop_id']);
    //             //     window.location.replace("index2.php");
    //             // }else{
    //             //     console.log(data);
    //             //
    //             //     iziToast.error({
    //             //         title: data.responseJSON['messege'],
    //             //         position: 'bottomCenter',
    //             //         iconUrl: 'img/warning.png',
    //             //         timeout: 3500,
    //             //     });
    //             // }
    //         },
    //         error: function (data) {
    //             iziToast.error({
    //                 title: data.responseJSON['messege'],
    //                 position: 'bottomLeft',
    //                 iconUrl: 'img/warning.png',
    //                 timeout: 3000,
    //             });
    //
    //
    //         }
    //     })
    // }

    function checkValidation(reg) {
        if (reg.match(/^[a-zA-Z\-]+$/)) {
            return true;
        } else {
            return false
        }
    }

    function checkEmailOrPhone(phoneOrEmail) {
        if (phoneOrEmail.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
            return true;
        } else if (phoneOrEmail.match(/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/)) {
            return true;
        } else {
            return false;
        }
    }

    // function passwordFiledCheck(password, conformPassword) {
    //     if (password === conformPassword) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }


</script>

</body>

</html>