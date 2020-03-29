<?php 
require "bootstrap.php";
session_start(); 

$login = htmlspecialchars($_POST["login"]);

$passwd = htmlspecialchars($_POST["passwd"]);

$rep = $entityManager -> getRepository('Utilisateur');

$user = $rep -> findOneBy(array('login' => $login, 'passwd' => $passwd));

if($user){
  $_SESSION = ['userId' => $user -> getId(), 'userLogin' => $user -> getLogin(), 'categorie' => $user -> getCategorie()];
  header('Location:listebillets.php');

}else{
  echo "Les logins et mots de passe ne correspondent pas";
}

?>