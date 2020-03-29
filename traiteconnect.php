<?php 
require "bootstrap.php";

session_start();


$repoUtilisateur = $entityManager->getRepository('Utilisateur');

$utilisateur = $repoUtilisateur->findBy(array('login'=>$_POST["login"]));

$pass = $repoUtilisateur->findBy();

echo $utilisateur->getPasswd();

if(!empty($utilisateur)){
 // var_dump($utilisateur);
 if(password_verify($_POST['passwd'],$utilisateur->getPasswd())){
  echo "Bravo tu es connecté";
 }else{
  echo "Mauvais mot de passe";
 }

}else{
 echo "Ce compte n'est pas répertorié dans la base de données";
}

// $utilisateur = $utilisateur[1];

?>