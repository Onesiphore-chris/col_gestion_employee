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
                require_once '../config/config.php';

                if(isset($_POST['send'])){

                   if(isset($_POST['email']) && isset($_POST['password'])){

                      $email = htmlspecialchars($_POST['email']);
                      $password = htmlspecialchars($_POST['password']);

                      $req = $dbb->prepare("SELECT * FROM `admin` WHERE email = '$password' ");
                      $req->execute();
                      $data = $req->fetch(PDO::FETCH_ASSOC);
                      $row = $req->rowCount();

                      if($row > 0){
                          $password = hash('md5' , $password);
                        
                          if(password_verify($password , $data[0]['password']));
                          filter_var($email, FILTER_VALIDATE_EMAIL);

                            echo header('location:dashboard.php');

                      }else{
                          echo 'mot de passe incorrect';
                      }
                   }else{
                    echo "vous n'avez pas de compte";
                   }

                }


        ?>


    <form action="" method="POST">
  
        <div class="segment">
          <h1>CONEXION</h1>
        </div>
        
        <label>
          <input type="text" name="email" placeholder="Email Address"/>
        </label>
        <label>
          <input type="password" name="password" placeholder="Password"/>
        </label>
        <button class="red"  name="send"><i class="icon ion-md-lock"></i> Log in</button>
        
        <div class="segment">
          <a href="../index.php"><button class="unit" type="button"><i class="fa-solid fa-backward"></i></button></a>
        </div>
        
      </form>
</body>
</html>








