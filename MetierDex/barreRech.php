<?php
try{
    $bdd = new PDO('mysql:host=sqletud.u-pem.fr;dbname=mvelasco_db;', 'mvelasco','ka4wa7wow$', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch(Exception $e){
    die('Une erreur a été trouvé:' .$e->getMessage());
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

    <h1> Métier-dex </h1>   
    <form method="GET">
        <input type="search" name="s" placeholder="Rechercher un métier" class="barreRecherche">
    </form>

    <section class="afficheMetier">
        <?php
            if(isset($_GET['s']) AND !empty($_GET['s'])){
                $recherche = htmlspecialchars($_GET['s']);
                $rechercheTrouve = $bdd->prepare('SELECT nom FROM metier WHERE nom LIKE "%'.$recherche.'%"');
                $rechercheTrouve -> execute();
            

            if($resultat = $rechercheTrouve -> fetch()){
                    ?>
                <div class="carte"><?= $resultat['nom'] ?></div>           
                <?php
                    
            }else{ 
                ?>
                <p>Aucun métier trouvé...</p>
                <?php
             }
            }
                ?>
    </section>

</body>
</html>