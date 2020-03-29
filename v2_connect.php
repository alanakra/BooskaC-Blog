<?php 
session_start();

require "bootstrap.php";

 $login = htmlspecialchars($_POST['login']);

 $pw = htmlspecialchars($_POST['password']);

 $repositoryUtilisateur = $entityManager->getRepository('Utilisateur');
 $utilisateur = $repositoryUtilisateur->findBy(array('login' => $login));
//  $utilisateur = $utilisateur[0];
//      if(empty($utilisateur)){
//          echo "Remplit les champs";
//      } else {
        //  if(!password_verify($_POST['passwd'], $utilisateur->getPasswd())){
         if($pw = $utilisateur->getPasswd()){
             echo "C'est bon";
         } else {
             echo "Non";
         }
     //}
?>