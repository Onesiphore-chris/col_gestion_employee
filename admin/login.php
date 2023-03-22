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

                if($_POST['send']){

                  echo 'ok';
                }


        ?>


    <form>
  
        <div class="segment">
          <h1>Sign up</h1>
        </div>
        
        <label>
          <input type="text" name="email" placeholder="Email Address"/>
        </label>
        <label>
          <input type="password" name="password" placeholder="Password"/>
        </label>
        <button class="red" type="button" name="send"><i class="icon ion-md-lock"></i> Log in</button>
        
        <div class="segment">
          <a href="../index.php"><button class="unit" type="button"><i class="fa-solid fa-backward"></i></button></a>
        </div>
        
      </form>
</body>
</html>








