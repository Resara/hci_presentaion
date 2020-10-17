<!DOCTYPE html>
<html lang="en">

<?php include('header.php');?>
<?php require_once 'experts_save.php'?>

<?php
include 'db/dbConnection.php';
//$result = $mysqli-> query("SELECT * FROM review_tbl") or die($mysqli->error);

?>


<!--Breadcrumb Start-->
<div class="breadcrumb-area" style="background-image: url('assets/img/Pazan/leaves.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="page-title">Ask the Experts</h1>
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li>Ask the Experts</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb End-->

<!--Cantact-->
<div class="contact-page padding-top-115 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">
                <form action="experts_save.php" class="contact-form" method="post" required>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"  required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" cols="30" rows="10" id="message" name="message" required></textarea>
                            </div>
                            <div class="main-btn-wrap">
                                <input class="main-btn black" name="save" type="submit" value="Send Message">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
    </div>
</div>
<!--// Cantact-->

<?php include('footer2.php');?>


</html>