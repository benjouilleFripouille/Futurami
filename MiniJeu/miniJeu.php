<?php
try{
    //$bdd = new PDO('mysql:host=sqletud.u-pem.fr;dbname=mvelasco_db;', 'mvelasco','ka4wa7wow$', array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));

    $bdd = new PDO('mysql:host=localhost;dbname=futurammi;', 'root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));}catch(Exception $e){
        die('Une erreur a été trouvé:' .$e->getMessage());
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="miniJeu.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title> Mini-Jeu </title>
</head>
<body>



    <script type="text/javascript" src="miniJeu.js"></script>
</body>
</html>