<?php
require "bootstrap.php";
session_start();
if(!$_SESSION['userId']==3){
 header("Location: listebillets.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Nouveau billet</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
 <a href="" class="navbar-brand text-light">Booska-C</a>

 <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="listebillets.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <?php 
      if(isset($_SESSION['userId'])){

       if($_SESSION['userId'] == 3){
         echo '<li class="nav-item">
         <a class="nav-link text-light" href="nouveaubillet.php">Nouveau billet</a>
       </li>';
        }
     }
      ?>
      <li class="nav-item">
        <a href="archives.php" class="nav-link text-light">
        Archives
        </a>
      </li>
      <li class="nav-item">
        
        <?php if(!isset($_SESSION['userId'])) {
 echo '<a href="index.php" class="nav-link text-light">Connexion</a>';
}else {
  echo '<a class="nav-link text-danger" href="disconnect.php">Déconnexion</a>';
} ?>
        
      </li>
    </ul>
 
    <?php 
    if(isset($_SESSION['userId'])) {
      echo '<span class="navbar-text text-light mr-4">'.'Bonjour'.' '.$_SESSION['userLogin'].' ('.$_SESSION['categorie'].') '.'</span>';}
    ?>
    


    <span class="navbar-text text-light">
      Numéro 1 sur le rap
    </span>
  </div>
 </nav>
 <div class="container">
   <h1 class="text-center">Ajouter un billet</h1>
   <div class="row">
   <form action="creer_billet.php" method="post" class="m-auto col-md-8">
              <div class="form-group col-12">
                <label for="">Titre</label>
                <input type="text" for="" name="titre" class="form-control"></input>
              </div>
              <div class="form-group col-12">
                <label for="">Ajouter un billet</label>
                <textarea name="nv" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-info">Envoyer</button>
        </form>
   </div>
 </div>
</body>
</html>