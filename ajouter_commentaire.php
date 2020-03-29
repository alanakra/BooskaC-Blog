<?php 
require "bootstrap.php";
session_start();

$utilisateur = $entityManager->getRepository('Utilisateur')->find($_SESSION['userId']);

$billet = $entityManager->getRepository('Billet')->find($_GET['id']);

$newCom = htmlspecialchars($_POST['newcom']);

$date = new DateTime();

$com = new Commentaire();

$com->setUtilisateur($utilisateur);

$com->setContenu($newCom);

$com->setDatepost($date);

$com->setBillet($billet);

$entityManager->persist($com);

$entityManager->flush();

header('Location:affiche_billet.php?id='.$_GET['id']);
?>