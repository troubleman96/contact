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
    <title>Profile Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

 <style>
    *{
    margin: 0;
}
.outercontainer{
    position: absolute;
    top:5%;
    left:35%;
   
   
    
    
  }
  form{
    width:380px;
    height:auto;
    border:3px solid rgb(145, 114, 75);
    border-radius:10px;
    overflow:hidden;
   
  }
  .container{
    padding:16px;
  }
  input[type=text],input[type=password],input[type=email],input[type=number]{
    width:100%;
    border:1px solid black;
    border-radius:5px;
    margin:8px 0;
    padding:12px 20px;
    box-sizing:border-box;
  }
  h1{
    text-align: center;
    text-transform: uppercase;
  }
  button{
    border:none;
    cursor:pointer;
    margin: 8px 0;
    border-radius: 5px;
    font-size:15px;
  }
  .change-password{
    width:50%;
    
    padding:12px 8px;
    text-transform:uppercase;
    background-color:rgb(145, 114, 75);
  }
  .change-password:hover{
    background-color:grey;

  }
  .edit-profile{
    width:40%;
     
    padding:12px 8px;
    text-transform:uppercase;
    background-color:blue;

  }
  .edit-profile:hover{
    background-color:grey;

  }
 
  .img-container{
    text-align:center;
  }
  

 </style>
    
</head>

<body>
      
    <div class='outercontainer'>
<form action="" method="post" name="user-info">
<h1>Profile </h1>

        <div class="img-container">
            <img src="avtar.jpg" alt="avatar icon" width='50%' r>
        </div>
            
    <div class='container'>
  <label for="username" >Username:</label>
  <input type="text" name="username" readonly  required value='<?=$user['username'] ?? null?>'>
  <br>
  <label for="Phone Number">Phone number:</label>
  <input type="number" name="phone_number" readonly  required value='<?=$user['phone_number'] ?? null?>'>
  <br>
  <label for="email">Email:</label>
  <input type="email" name="email" readonly  required value='<?=$user['email'] ?? null?>'>
  <br>
  
   <div class="buttonsss">
    <a href="changepassword.php">
    <button type="button" class="change-password">
        Change Password
    </button> 
</a> 
    <a href="editprofile.php">
    <button type="button" class="edit-profile">
    <i class='bx bx-edit-alt'></i>
        Edit Profile
    </button>
    </a>
             </div>
    
</form>
    </div>
    





</body>
</html>
