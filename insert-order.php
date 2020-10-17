<?php
include 'db/dbConnection.php';

if (isset($_POST['save'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $postalcode = $_POST['postalcode'];
    $teaCat = $_POST['teaCat'];
    $teaType = $_POST['teaType'];


    $mysqli ->query("INSERT INTO `new_order`(id, firstname, lastname, email, phone, address, postalcode, teaCat, teaType)
                    VALUES ('','$firstname','$lastname','$email','$phone','$address','$postalcode','$teaCat','$teaType')")
    or die($mysqli->error);

    header("location:new_order.php");

//    window.location.replace("new_order.php");
}
?>