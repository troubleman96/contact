<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $user_id = $_SESSION['id'];
   

    $sql = "SELECT * FROM contacts WHERE phone='$phone' AND user_id=$user_id";
    $selectedContact = mysqli_query($conn,$sql);

    if(mysqli_num_rows($selectedContact) == 1){
       header('location:../views/addContact.php?user_id='.$_SESSION['id'].'&error=Contact already exists');
    }else{
        $insert = "INSERT INTO contacts(name,phone,user_id) VALUES('$name','$phone',$user_id)";
        $inserted = mysqli_query($conn,$insert);

        if($inserted){
            header('location:../views/index.php?user_id='.$_SESSION['id'].'&msg=New contact added');
        }
    }
}