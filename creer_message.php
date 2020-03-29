<?php 
require "bootstrap.php";

 
 $newMessage = "Bonjour c'est encore mon nouveau nouveau message";
 
 $utilisateur = $entityManager->getRepository('Utilisateur')->find(2);

 $message = new Message();

 $message->setUtilisateur($utilisateur);

 $message->setText($newMessage);
 
 $entityManager->persist($message);

 $entityManager->flush();

 // echo $message->getUser()->getLogin()." a écrit: ".$message->getText()." .";

 var_dump($message);

 echo $message->getUtilisateur()->getLogin()." a écrit: ".$message->getText().". ";

?>