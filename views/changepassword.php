<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Change Password</title>
    <style>
      *{
        margin:0;
      }
       form{
    width:390px;
    height:300px;
    border:3px solid rgb(145, 114, 75);
    border-radius:10px;
    padding:10px;
   
  }
  .container{
    padding:16px;
  }
  input[type=text],input[type=password],input[type=email],input[type=number]{
    width:100%;
    border:1px solid black;
    border-radius:5px;
    margin:8px 0;
    padding:18px 10px;
    box-sizing:border-box;
  }
  h1{
    font-style:arial;
    text-align:center;
    text-transform:uppercase;
  }
  .profileinformation{
    position: absolute;
    top:10%;
    left:35%;
    padding:16px;
  }
  .changebtn{
    width:100%;
    background-color:rgb(145, 114, 75);
    padding:10px 8px;
    text-transform:uppercase;
  }
  button{
    border:none;
    cursor:pointer;
    margin: 0px 0;
    border-radius: 10px;
    font-size:15px;
    
  }
  
    </style>
</head>
<body>
    
</body>
</html>

                <div class="profileinformation">
     <form action="/change-password" method="post">
        <label for="password">Current Password:</label>
        <input type="password" name="current_password" id="password">

        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" id="new_password">

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password">
        

        <a href="#"> <button type="button" class="changebtn" >Save Changes</button></a>
      </form>

    

        
    </form>
                </div>