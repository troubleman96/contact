<?php
session_start();
include '../process/connection.php';
$user_id = $_SESSION['id'];
$sql = "SELECT * FROM contacts WHERE user_id=$user_id";
$contacts = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>HomePage</title>
    <style>
      
        body{
            display:flex;
            justify-content:center;
            flex-direction:column;
            padding-left: 20%;
        }

        nav{
            padding:1em;
            width:70%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            font-size:26px;
        }
          .Logo-menu{
            display : flex;
            align-items : center;
          
        }
        .add-contact{
            position: absolute;
            margin-top: 40%;
            margin-left: 50%;
            font-size:30px;
            border-radius:50%;
            padding:.6em;
            transition:300ms ease;
        }
        .add-contact:hover{
            background-color: rgb(145, 114, 75);
            color:white;
        }
        .dropdown {
  position: relative;
  display: inline-block;
  font-size: 25px;
} 
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  list-style-type: none;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: rgb(145, 114, 75)
}
.td{
  text-align:center;
}
        
        
        
    </style>
</head>
<body>

          <nav>
              <div class="dropdown">
                   <i class='bx bx-menu dropbtn'></i>

                             <div class="dropdown-content">
                   <li><a href="profile.php"><span class="material-symbols-outlined">
                                    person  
                                  </span> Profile </a></li>
                     <li><a href="#"><span class="material-symbols-outlined">
                                  settings
                                  </span> Settings</a></li>
            
                               </div>
               </div>

        <div class="">
            <span class="material-symbols-outlined">
                    search
            </span>
            Search bar 
        </div>

        <div class="logo-options">
        <!-- <i class='bx bx-dots-vertical-rounded'></i> -->
        
            <a href="../process/logout.php">
                <button>Log Out</button>
            </a>
        </span>
        </div>
        
    </nav>
    <p><?=$_GET['msg'] ?? null ?></p>



<div class="table">
    <table border='1' style='border-collapse:collapse;
    width:80%'>
      <thead>
      <th>Id</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Operation</th>
      </thead>
      <tbody>
        <?php $i = 1; foreach($contacts as $contact) {?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$contact['name']?></td>
            <td><?=$contact['phone']?></td>
            <td> 
              <a href="addContact.php?contact=<?=$contact['id']?>">
                <button><i class='bx bx-edit-alt'></i></button>
              </a>
              <a href="">
                <button><i class='bx bxs-share-alt'></i></button>
              </a>
              <a href="../process/deleteAction.php?id=<?=$contact['id']?>">
                <button> 
                  <span class="material-symbols-outlined">person_remove
                  </span> 
                </button>
              </a>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>

    
     <a href="addContact.php?user_id=<?=$_SESSION['id']?>" class='add-contact'>

    <div class="addconct" >
    <i class='bx bxs-user-plus'></i>
    <span class="add-coontact"> </span>

    </div>
    </a>
    
</body>

</html>