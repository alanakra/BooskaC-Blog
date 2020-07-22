<?php

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
 <title>Connexion</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container">
 <h1 class="text-center mb-2 mt-5">Booska - C | Connexion</h1>
  <div class="row">
 <form action="connect.php" method="post" class="m-auto col-md-8">
  <div class="form-group">
   <label for="">Login</label>
   <input type="text" name="login" id="" class="form-control"></div> <br>

  <div class="form-group">
   <label for="">Mot de passe</label>
   <input type="password" name="passwd" id="" class="form-control">
   </div>

  <button input type="submit" value="Envoyer" class="btn btn-primary">Connexion</button>
 </form>
 </div>
  <div class="row mt-5">
 <a href="listebillets.php" class="btn btn-primary m-auto">Accèder aux billets (non logué)</a>
  </div>
</div>
</body>
</html>