<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE email='$email'";
    $selectedUser = mysqli_query($conn,$sql);

    if(mysqli_num_rows($selectedUser) == 1){
       header('location:../index.php?error=User already exists');
    }else{
        $insert = "INSERT INTO signup(username,email,phone_number,password) VALUES('$username','$email','$phone','$password')";
        $inserted = mysqli_query($conn,$insert);

        if($inserted){
            header('location:../login.php?msg=You have already signed up, Please login');
        }
    }
}