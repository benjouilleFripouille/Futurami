<?php
try{
    //$bdd = new PDO('mysql:host=sqletud.u-pem.fr;dbname=mvelasco_db;', 'mvelasco','ka4wa7wow$', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $bdd = new PDO('mysql:host=localhost;dbname=futurammi;', 'root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
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
    <link rel="stylesheet" href="BRstyle.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>Métier-dex</title>
</head>
<body>

<!-- Titre -->
    <div class="titre">
        <h1 class="titreMetierDex"> Métier-dex </h1>
        <img src="../Img/PI.png" class="PI">
    </div>

    <!-- Bouton information -->
    <div class="modal-bg">
            <div class="modal">
                <img src="../Img/PI.png" class="PI2">
                <p class="mText"> Tu peux rechercher un métier par son nom comme "Développeur Front-end" ou "Graphiste" ou en tapant le nom du domaine lui appartenant !</p>

                <div class="modal-close"></div>
            </div>
        </div>


    <a href=""><div class="triangle"></div></a>

    <form method="GET">
        <input type="search" name="s" placeholder="Rechercher un métier" class="barreRecherche">
    </form>

    <section class="afficheMetiers">
        <?php
            if(isset($_GET['s']) AND !empty($_GET['s'])){
                $recherche = htmlspecialchars($_GET['s']);
                $rechercheTrouve = $bdd->prepare('SELECT * FROM metier WHERE nom LIKE "%'.$recherche.'%"');
                $rechercheTrouve -> execute();
            }

            if(isset($rechercheTrouve) AND $rechercheTrouve->rowCount() > 0){
                while($resultat = $rechercheTrouve->fetch()){
                    ?>
                <a href="#" data-id='<?php echo $resultat['id']?>' data-target="#modal" class="parceQue"><div class="carteMetier">
                    <h3><?= $resultat['nom'] ?></h3>
                    <p class="intro1">
                        <?= $resultat['introduction'] ?>
                    </p>
                </div></a> 
                <?php
                }
            }else{ 
                ?>
                <p class="noMetier"> Aucun métier trouvé... </p>
                <?php
             }
            $bdd = null;
                ?>

    <div class="modal-bg2" id="modal" role="dialog">
        <div class="modal2">
            <div class="modalContent" id="load_data">
            </div>
                <div class="modal-close2"></div>
        </div>
    </div>  



    </section>
    <script type="text/javascript" src="BRjava.js"></script>
</body>
</html>