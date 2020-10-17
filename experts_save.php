<?php
include 'db/dbConnection.php';

if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $mysqli->query("INSERT INTO `ask_the_experts`(id, name, email, phone, subject, message)
                    VALUES ('','$name','$email','$phone','$subject','$message')")
    or die($mysqli->error);

    header("location:index.php");
}
?>