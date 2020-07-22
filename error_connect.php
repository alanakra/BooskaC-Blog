<?php 
require "bootstrap.php";
session_start();
if(isset($_SESSION['userId'])) {
 header("Location: listebillets.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Booska-C</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <div class="rep m-auto">
      <h1 class="text-center">Vous n'avez pas pu vous connecter</h1> <br>
      <p class="text-center">Login ou mot de passe incorrect</p> <br>
      <a href="index.php" class="text-center btn
      btn-primary">Connexion</a>
    </div>
 </div>
</body>
</html>