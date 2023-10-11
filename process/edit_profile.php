<?php
session_start();
include 'connection.php';

if(isset($_POST['save'])){
    $name = $_POST['username'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $id = $_SESSION['id'];

    $sql = "UPDATE signup SET username='$name' , phone_number='$phone',email='$email' WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        header('location:../views/profile.php');
    }

 
}