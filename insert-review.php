<?php
include 'db/dbConnection.php';

    if (isset($_POST['save'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $review = $_POST['review'];

        $mysqli ->query("INSERT INTO `review_tbl`(id, name, email, review) VALUES ('','$name','$email','$review')")
        or die($mysqli->error);

        header("location:tea_review.php");
    }
?>