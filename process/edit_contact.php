<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $id = $_POST['id'];

    $sql = "UPDATE contacts SET name='$name' , phone='$phone' WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        header('location:../views');
    }

 
}