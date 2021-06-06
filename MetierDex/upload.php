<?php
try{
    $bdd = new PDO('mysql:host=sqletud.u-pem.fr;dbname=mvelasco_db;', 'mvelasco','ka4wa7wow$', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //$bdd = new PDO('mysql:host=localhost;dbname=futurammi;', 'root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch(Exception $e){
    die('Une erreur a été trouvé:' .$e->getMessage());
}


$output='';
$rec_id = $_POST['id'];


$resultat = $bdd->prepare('SELECT * FROM metier WHERE id =' .$rec_id. ';');
$resultat->execute();

if($resultat){
    while($modal = $resultat->fetch()){

        $output = 
    
        '<h1 class="titreMetierModal">' .$modal["nom"]. '</h1>
            <br>
         <h2 class="intro2"> Introduction </h2>
         <p class="Pintro2">' .$modal["introduction"]. '</p>

         <h3 class="formation"> Niveau de formation </h3>
         <p class="modalP Pformation">' .$modal["niveau_formation"]. '</p>

         <h3 class="description"> Descrition </h3>
         <p class="modalP Pdescription">' .$modal["description"]. '</p>

         <h3 class="foncComp"> Fonctions et compétences </h3>
         <p class="modalP PfoncComp">' .$modal["fonctions_competence"]. '</p>

         <h3 class="qualiHumaines"> Qualités humaines </h3>
         <p class="modalP PqualiHumaines">' .$modal["qualites_humaine"]. '</p>

         <h3 class="salaire"> Salaire </h3>
         <p class="modalP Psalaire">' .$modal["salaire"]. '</p>

         <h3 class="secteur_emploi"> Secteur(s) d\'emploi </h3>
         <p class="modalP Psecteur_emploi">' .$modal["secteur_emploi"]. '</p>

         <h3 class="evol_poss"> Évolution(s) possibles </h3>
         <p class="modalP Pevol_poss">' .$modal["evolution_possible"]. '</p>

         <h3 class="autre"> Autre </h3>
         <p class="modalP autre">' .$modal["autre"]. '</p>';
    }
}

echo $output;

$bdd = null;

?>