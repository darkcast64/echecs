<?php

/*Insertion dans la BDD */
try{
    $bdd=new PDO('mysql:host=localhost;dbname=echecs;charset=utf8','root','zz',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}
$email=$_POST['email'];
$mdp=password_hash($_POST['mdp'],PASSWORD_DEFAULT);
$pseudo=$_POST['pseudo'];


$sql="INSERT INTO inscription(email,mdp,pseudo) VALUES(:email,:mdp,:pseudo)";

$values=array(
    'email'=>$email,
    'mdp'=>$mdp,
    'pseudo'=>$pseudo);


$req=$bdd->prepare($sql);


$req->execute($values);

echo 'inscription réussi Vous allez être redirigé vers la page d\'accueil dans 5 secondes';
header( "refresh:5;url=index.php" );

?>