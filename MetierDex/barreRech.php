<?php
$link = new PDO('mysql:host=localhost;dbname=futurammi;', 'root', '', array
(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$alldomaine = $link->query('SELECT * FROM domaine ORDER BY id ASC');
if(isset($_GET['s']) AND !empty($_GET['s'])){
    $recherche = htmlspecialchars($_GET['s']);
    $alldomaine = $link->query('SELECT nom FROM domaine WHERE nom LIKE "%'.
$recherche.'%" ORDER BY nom ASC');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Métier-dex</title>
</head>

<body>

<h1>Métier-dex</h1>

    <form method="GET">
        <input type="search" name="s" placeholder="Rechercher un domaine ou un métier" class="barreRecherche">
    </form>

         <!-- ?php --> 
            <!-- // if($alldomaine->rowCount() > 0){ -->
                <!-- // while($user = $alldomaine->fetch()){ -->
                    <!-- // ?> -->
                    <!-- <p>?= $user['nom']; ?></p> -->
                    <!-- <!-- ?php -- -->
                <!-- // } -->
            <!-- // }else{ -->
                <!-- // ?> -->
                <!-- <p>Aucun domaine trouvé...</p> -->
                <!-- ?php -->
            <!-- // } -->
        <!-- // ?> -->

</body>
</html>