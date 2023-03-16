<?php
   
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../employee/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <title>login_employee</title>
</head>
<body>

        <?php

          include_once '../config/config.php';
          
          if(isset($_POST['send'])){
        
            if(isset($_POST['email']) && isset($_POST['password'])){
                
              $email = htmlspecialchars($_POST['email']);
              $password = htmlspecialchars($_POST['password']);

              $req = $dbb->prepare("SELECT * FROM `gestion_employee` WHERE '$email' = email ");
              $req->execute();
               
                  var_dump($req);
                  die('ok');
            }
            
          }

        ?>


    <form action="" method="POST"  enctype="multipart/form-data">
  
        <div class="segment">
          <h1>Sign up</h1>
        </div>
        
        <label>
          <input type="email" name="email" placeholder="Email Address"/>
        </label>
        <label>
          <input type="password" name="password" placeholder="Password"/>
        </label>
        <button class="red" type="submit" name="send"> Log in</button>
        </form>

        <div class="segment">
          <a href="../index.php"><button class="unit" type="button"><i class="fa-solid fa-backward"></i></button></a>
        </div>
        
     
</body>
</html>








