<?php
session_start();
include '../process/connection.php';
$id = $_SESSION['id'];

    $sql = "SELECT * FROM signup WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){
        $user = mysqli_fetch_assoc($result);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Edit Profile</title>
    <style>
        *{
            margin:0;
        }
        .container{
            padding:16px;
            left:35%;
             top:25%;
           position: absolute;

        }
        form{
    width:380px;
    height:auto;
    border:3px solid rgb(145, 114, 75);
    border-radius:10px;
    padding:10px;
   
  }

  input[type=text],input[type=password],input[type=email],input[type=number]{
    width:100%;
    border:1px solid black;
    border-radius:5px;
    margin:8px 0;
    padding:12px 20px;
    box-sizing:border-box;
  }
  .bottomconatiner{
    text-align:center;
  }
  button{
    border:none;
    cursor:pointer;
    margin: 5px 0;
    border-radius: 10px;
    font-size:15px;
    padding:10px;
    
  }
  .editbtn{
    width:40%;
    background-color:blue;
  }  
  .savebtn{
    width:40%;
    background-color:Green;
  }   
    </style>
</head>
<body>
<div class='container'>
    <form action="../process/edit_profile.php" method='post'>
  <label for="username" >Username:</label>
  <input type="text" name="username"  required value='<?=$user['username'] ?? null?>'>
  <br>
  <label for="Phone Number">Phone number:</label>
  <input type="text" name="phone_number"  required value='<?=$user['phone_number'] ?? null?>'>
  <br>
  <label for="email">Email:</label>
  <input type="email" name="email"  required value='<?=$user['email'] ?? null?>'>
  <br>
  <div class="bottomconatiner">
      <button type="submit" class="savebtn" name='save'>Save</button>
      </div>
      </form>
      
    </div>
</body>
</html>