<?php
session_start();
include 'connection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM contacts WHERE id=$id";

    if(mysqli_query($conn,$sql)){
         header('location: ../views');
    }
}