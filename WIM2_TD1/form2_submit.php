<?php
session_start();
$_SESSION['error_message'] = array();
//Sécurité, identification du formulaire
if(!isset($_POST) || !isset($_POST['form_id']) || ($_POST['form_id'] != $_SESSION['form_id']))
    $_SESSION['error_message'][] = 'Formulaire non reconnu !';
//Validation des données
if( empty($_POST['nom'])){
  $_SESSION['error_message'][] = 'Nom manquant !';
}
else {
  $values['nom'] = str_replace(array("\r","\n"),'',$_POST['nom']);
}
if( empty($_POST['prenom'])){
  $_SESSION['error_message'][] = 'Prénom manquant !';
}
else {
  $values['prenom'] = str_replace(array("\r","\n"),'',$_POST['prenom']);
}

if(empty($_POST['annee'])){
  $_SESSION['error_message'][] = 'pas de date de naissance';
}
else{
  $values['annee'] = $_POST['annee'];
}

if( empty($_POST['sexe'])){
  $_SESSION['error_message'][] = 'pas de sexe défini';
}
else{
  $values['sexe'] = $_POST['sexe'];
}


//Réaffichage du formulaire si erreurs
if( !empty($_SESSION['error_message'] )){
  header( 'Location: form1_show.php' ) ;
}

//Enregistrement si tout est OK
else {
  $pdo = new PDO('mysql:host=localhost;dbname=drupalNL', 'admin', 'password');
  $sql = 'INSERT INTO wim2_etudiant (nom, prenom, annee, sexe) VALUES (:nom, :prenom, :annee, :sexe)';
  $stmt = $pdo->prepare($sql);
  $nb_insert = $stmt->execute($values);
  
  //Test erreur d'insertion
  if($nb_insert == 0) {
    $_SESSION['error_message'][] ='Erreur BD';
    header( 'Location: form1_show.php' );
  }
  //Confirmation de l'insertion
  else {
    echo '<html><head><meta charset="utf-8"><title>Confirmation</title>
      </head><body>
        <h2>Données enregistrées</h2><a href="form1_show.php">Retour</a>
      </body></html>';
} }