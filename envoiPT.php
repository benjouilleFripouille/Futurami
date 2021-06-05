<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Contact - </title>
  <link rel="stylesheet" href="styles-envoi.css">
</head>
<body>

<?php
$host = "sqletud.u-pem.fr";
$dbname = "mvelasco_db";
$username = "mvelasco";
$password = "ka4wa7wow$";

try {
    $link = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
    (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr

 
if(isset($_POST["nom"]) & isset($_POST["prenom"]) & isset($_POST["mail"]) & isset($_POST["objet"]) & isset($_POST["message"])){
  $sql = "INSERT INTO formulairePT(nom, prenom, mail, message) VALUES (:nom, :prenom, :mail, :objet, :message)";
  // On prépare la requête avant l'envoi :
  $req = $link -> prepare($sql);
  // On exécute la requête en insérant la valeur transmise en POST
  $req -> execute(array('nom' => $_POST["nom"],
                        'prenom' => $_POST["prenom"], 
                        'mail' => $_POST["mail"],
                        'objet' => $_POST["objet"],
                        'message' => $_POST["message"]));
                        if (isset($_POST['mail']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['objet']) && isset($_POST['message'])) {

                          $retour = mail('futurammichamps@gmail.com', $_POST['nom'], $_POST['prenom'], $_POST['objet'], $_POST['message']);
      
                          if($retour){
                              echo '<script>alert("Message Envoyé !")</script>';
                          }
                          else{
                              echo '<script>alert("Une erreur est survenue :(")</script>';
                          }
                      }

  // $req = null;
  // On affiche l'adresse inscrite en évitant une injection de code JS
  echo "<h1 style='margin: auto;'>Merci pour votre message !</h1>";

}
?>
 

  <a href="https://etudiant.u-pem.fr/~mvelasco/index.php">Retour au site</a>
</body>
</html>