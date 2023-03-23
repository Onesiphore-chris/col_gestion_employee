<?php

require_once '../config/config.php';

    if(isset($_POST['send'])){

   if(isset($_POST['nom']) && isset($_POST['prenom']) 
   && isset($_POST['email']) && isset($_POST['departement'])
   && isset($_POST['numero']) && isset($_POST['password']) ){

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $departement = htmlspecialchars($_POST['departement']);
    $numero = htmlspecialchars($_POST['numero']);
    $password = htmlspecialchars($_POST['password']);

        $req = $dbb->prepare(" SELECT * FROM `employee` WHERE email = '$email' AND  password = '$password'");
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        $row = $req->rowCount();

        if($row > 0){
            $message['user'] = 'compte existant';
        }else{
                if(strlen($email <= 100))
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        $password = hash('md5', $password);
                        $ip = $_SERVER['REMOTE_ADDR'];

                        $insert = $dbb->prepare("INSERT INTO `employee`(nom, prenom, email, numero, departement, password)
                        VALUES('{$nom}', '{$prenom}', '{$email}', '{$numero}', '{$departement}', '{$password}')");
                        $insert->execute(array(
                            $nom => 'nom',
                            $prenom => 'prenom',
                            $email => 'email',
                            $numero => 'numero',
                            $departement => 'departement',
                            $password => 'password'
                        ));
                        
                            echo header('location:add-employee.php');
                    }else{
                        $message_err = 'email incorrect';
                    }

                }else{
                    $message_err = 'moins de 100 caractere';
                }

           
        }
        
   }
}




?>
