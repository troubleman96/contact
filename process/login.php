<?php
session_start();
include 'connection.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE email='$email'";
    $selectedUser = mysqli_query($conn,$sql);

    if(mysqli_num_rows($selectedUser) == 1){
       $user = mysqli_fetch_assoc($selectedUser);
        
       if($user['password'] == $password){
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header('location:../views/index.php');
       }else{
         header('location:../login.php?msg=Wrong password');
         
       }
    }else{
        header('location:../login.php?msg=Incorrect email or password , please sign up');
    }
}