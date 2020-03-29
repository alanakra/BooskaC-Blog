<?php 
include 'start.php';
session_start();

$login = htmlspecialchars($_POST['login']);

$pw = htmlspecialchars($_POST['password']);

if (isset($login)&&($pw)){
 $requete = "SELECT * FROM utilisateur WHERE login = ? AND passwd = ?";
 $stmt = $db->prepare($requete);
 $stmt->execute(array($login, $pw));
 $stmt->execute();
 $userexist = $stmt->rowCount();
 if($userexist == 1) {
  $userinfo = $stmt->fetch();
  $_SESSION['id'] = $userinfo['id'];
  echo "C'est carré";
  echo '<br>';
  echo $userinfo['id'];
} else {
 echo "C'est pas carré"; }

}
?>