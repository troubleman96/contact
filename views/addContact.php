<?php
session_start();
include '../process/connection.php';

if(isset($_GET['contact'])){
    $id = $_GET['contact'];

    $sql = "SELECT * FROM contacts WHERE id=$id";
     $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){
        $contact = mysqli_fetch_assoc($result);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact </title>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
   
}

header {
    background-color: rgb(145, 114, 75);
    color: #fff;
    text-align: center;
    padding: 1rem;
}

main {
    display: flex;
    justify-content: space-around;
    padding: 1rem;
}

.contacts, .add-contact {
    text-align: center;
    width: 45%;
    padding: 1rem;
}

ul {
    list-style: none;
}

li {
    border: 1px solid #ccc;
    padding: 1rem;
    margin: 1rem 0;
}

form {
    display: flex;
    flex-direction: column;
}

input, button {
    margin: 0.5rem 0;
    padding: 0.5rem;
}

button {
    background-color:rgb(145, 114, 75);
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color:#0056b3;
}

  </style>    
</head>
<body>
    <header>
        <h1> New Contact </h1>
    </header>
    <main>
        
    <div class='outercontainer'>
            <h2>Contact Info:</h2>
            <form id="add-contact-form" action='<?=(isset($_GET['contact']) ? '../process/edit_contact.php' : '../process/add_contact.php')?>' method='post'>
                <p><?=$_GET['error'] ?? null ?></p>
                <div class='container'>
                <input type="hidden" name="id" value='<?=$contact['id'] ?? null?>'>
                <input type="text" id="name" placeholder="Name" name='name' required value='<?=$contact['name'] ?? null?>'>
                <input type="text" id="phone" placeholder="Phone" name='phone' required value='<?=$contact['phone'] ?? null?>'>
                <button type="submit" name='submit'><?=(isset($_GET['contact']) ? 'Edit Contact' : 'Add Contact')?></button>
</div>
            </form>
        </div>
    </main>
   
    <div class="contacts">
            
            <ul id="contact-list">
               
            </ul>
     </div>
    
</body>
</html>