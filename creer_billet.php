<?php 
require "bootstrap.php";
session_start();

$newTitle = htmlspecialchars($_POST["titre"]);

$newBillet = htmlspecialchars($_POST["nv"]);

$date = new DateTime();

$utilisateur = $entityManager->getRepository('Utilisateur')->find($_SESSION['userId']);

$billet = new Billet();

$billet->setContenu($newBillet);

$billet->setIntitule($newTitle);

$billet->setDatepost($date);

$entityManager->persist($billet);

$entityManager->flush();

header('location: listebillets.php');
?>