<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>SIGN UP</title>
    <style>
        *{
  font-family: Arial, Helvetica, sans-serif;
}
form {
    width: 500px;
    margin: 0 auto;
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
  
  h1{
    text-align: center;
  }
  .remember{
    display: flex;
    justify-content: center;
  }
  .outercontainer{
    position: absolute;
    top:15%;
    down:25%;
    left:25%;
    right:25%;
    transform:tanslate (-50%,-50%)
  }
  form{
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
 
    </style>
</head>
<body>


<div class='outercontainer'>
<form action="process/signup.php" method="post">
<h1>SIGN UP FORM</h1>
<p style='color:red;'><?=$_GET['error'] ?? null?></p>
<div class='container'>
  <label for="username" ></label>
  <input type="text" name="username" placeholder="Username" required>
  <br>
  <label for="Phone Number"></label>
  <input type="text" name="phone_number" placeholder="Phone Number" required>
  <br>
  <label for="email"></label>
  <input type="email" name="email" placeholder="Email" required>
  <br>
  <label for="password"></label>
  <input type="password" name="password" placeholder="Password" required><br>
    
  <div class="bottomcontainer">

  <button type="submit" name="submit">Sign Up</button>
      <h3>Have an account? <a href="login.php">Log in</a> </h3>
      </div>
      </div>
</form>
</div>

    
</body>
</html>