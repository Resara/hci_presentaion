<?php include 'header.php'; 
include '../db/dbConnection.php';  

// $result=mysqli_query($connection,"SELECT COUNT(*) AS `Unverified_users` FROM user_details WHERE is_verified = 0");
// $data=mysqli_fetch_assoc($result);
// $Unverified_users = $data['Unverified_users'];


?>
    <style>
        .my-card
        {
            position:absolute;
            left:40%;
            top:-20px;
            border-radius:50%;
        }
    </style>
<main class="app-content">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">

    <div class="jumbotron">
        <div class="row w-100">
            <div class="col-md-4">
                <div class="card border-info mx-sm-1 p-3">
<!--                    <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-car" aria-hidden="true"></span></div>-->
                    <div class="text-info text-center mt-3"><h4>Available Orders</h4></div>
                        <?php
                            $sql="SELECT COUNT(order_id) AS NumberOfProducts FROM user_order where status=0;";
                            $data=mysqli_query($connection,$sql);
                            $result=mysqli_fetch_array($data);

                        ?>
                    <div class="text-info text-center mt-2"><h1><?php echo $result['NumberOfProducts']?></h1></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success mx-sm-1 p-3">
                    <?php
                    $sql="SELECT COUNT(order_id) AS NumberOfProducts FROM user_order where status=1;";
                    $data=mysqli_query($connection,$sql);
                    $result=mysqli_fetch_array($data);

                    ?>
                    <div class="text-success text-center mt-3"><h4>Complete Orders</h4></div>
                    <div class="text-success text-center mt-2"><h1><?php echo $result['NumberOfProducts']?></h1></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-danger mx-sm-1 p-3">
                    <?php
                    $sql="SELECT COUNT(user_id) AS NumberOfProducts FROM user_tbl";
                    $data=mysqli_query($connection,$sql);
                    $result=mysqli_fetch_array($data);

                    ?>
                    <div class="text-danger text-center mt-3"><h4> Registered Customer</h4></div>
                    <div class="text-danger text-center mt-2"><h1><?php echo $result['NumberOfProducts']?></h1></div>
                </div>
            </div>

        </div>
    </div>
</main>
<?php include 'footer.php'; ?>