<?php

    try {
        $dbb = new PDO('mysql:host:localhost;dbname=gestion_employees;charset=UTF8', 'root','');

        $dbb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $th) {
        die('error'.$th->getMessage());
    }
?>