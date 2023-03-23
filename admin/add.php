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

        $req = $dbb->prepare("SELECT * FROM `employee` WHERE email = '$email' password = '$password'");
        $req->execute();
        
   }
}




?>
