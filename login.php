<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      *{
  font-family: Arial, Helvetica, sans-serif;
}

  
  form p {
    color: red;
  }
  input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
  }
  button{
    border:none;
    cursor:pointer;
    margin:8px 0;
    border-radius:5px;
    color:#fff;
    font-size:15px;
    font-weight:bold;
    transition:0.3s;
    width: 100%;
    padding: 10px;
    background-color: rgb(145, 114, 75);
  }
  h1{
    text-align: center;
  }
  .remember{
    display: flex;
    justify-content: center;
  }
  .outercontainer{
    position: absolute;
    top:25%;
    
    left: 35%;
    right:50%;
    transform:tanslate (-50%,-50%)
  }
  form{
    position: centerabsolute;
    width:380px;
    height:auto;
    border:3px solid rgb(145, 114, 75);
    border-radius:10px;

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
  #btn1{
    padding:14px 20px;
    text-transform:uppercase;
    background-image:linear-gradient(to right)
  }
  label[for=remember]{
    font-size:14px;
    color: dimgray;
  }
 
    </style>

    <title>LOG IN</title>
</head>
<body>
    
<div class='outercontainer'>

    <form action="process/login.php" method="post">
    <H1>LOG IN </H1>
    <p style='color:green;'><?=$_GET['msg'] ?? null ?></p>

    <div class='container'>

  <label for="Email" ></label>
  <input type="email" name="email" placeholder="Email" required >
  <br>
  <label for="password"></label>
  <input type="password" name="password" placeholder="password" required  >
  <br>
  <button type="submit" name="login" id="btn1">Login</button>
  <br>
<div class="remember">
  <div class="">
  <input type="checkbox" name="remember" checked="checked" placeholder="Remember Me">
  </div>
  <div class="">
  <label for="remember"> Remember Me</label>
  </div>
  

</div>

<div>


<div>
</body>
</html>