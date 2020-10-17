<!DOCTYPE html>
<html lang="en">



<body>



<?php require_once 'insert-order.php'?>

<?php
include 'db/dbConnection.php';
//$result = $mysqli-> query("SELECT * FROM review_tbl") or die($mysqli->error);

?>

<!-- preloader area start -->

<!--// Open Menu Cart-->

<!--Main Header Start-->
<?php include 'header.php'?>
<!--// Main Header End Here-->

<!--Breadcrumb Start-->
<div class="breadcrumb-area" style="background-image: url('assets/img/carolyn-v-SvbDNnbipj0-unsplash.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="page-title">Add New Order</h1>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Add New Order</li>
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
            <div class="col-lg-5">
                <div class="left-content">
                    <div class="section-title">
                        <h2 class="heading-02 padding-bottom-20">Get In Touch</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <form action="insert-order.php" class="contact-form" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="firstname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="lastname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="postalcode">Postal Code</label>
                                <input type="text" class="form-control" name="postalcode">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="custom-select-box w-100">
                              <select name="teaCat">
                                <option value="">Select Tea Category</option>
                                <option value="Black Tea">Black Tea</option>
                                <option value="Jasmine Tea">Jasmine Tea</option>
                                <option value="Green Tea">Green Tea</option>
                                <option value="Normal Tea">Normal Tea</option>
                               </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="custom-select-box w-100">
                                <select name="teaType">
                                    <option value="">Select Tea Type</option>
                                    <option value="Loose Tea">Loose Tea</option>
                                    <option value="Tea Bags">Tea Bags</option>

                                </select>
                            </div>
                        </div>

                            <div>
                                <h2><br></h2>
                            </div>


                        <div class="col-lg-12">
                            <div class="main-btn-wrap">
                                <input class="main-btn black" name="save" type="submit" value="Send Message">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--// Cantact-->


<?php include 'footer2.php'?>

<!-- footer area start -->


</body>

</html>