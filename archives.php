<?php 
require 'bootstrap.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Archives</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<?php 
$billetRepo = $entityManager -> getRepository('Billet');
$afficheBillet = $billetRepo -> findAll();
?>
<body>
 <nav class="navbar navbar-expand-lg bg-dark">
 <a href="listebillets.php" class="navbar-brand text-light">Booska-C</a>

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
        <a href="archives.php" class="nav-link text-light">Archives</a>
      </li>
      <li class="nav-item">
        
        <?php 
        if(!isset($_SESSION['userId'])) {
 echo '<a href="index.php" class="nav-link text-light">Connexion</a>';
}else {
  echo '<a class="nav-link text-danger" href="disconnect.php">Déconnexion</a>';
} 
       ?>
        
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
 <h1 class="text-center mt-3">Tous les billets</h1>

 <div class="container">

     <div class="row">

      <?php foreach($afficheBillet as $billet){
        ?>
      
        <div class="col-lg-4 col-md-6">

         <div class="billet">
         <h2><?php echo $billet -> getIntitule() ?></h2>
          <p>Posté le: <?php echo $billet -> getDatepost() -> format('d-m-Y')?></p>
          <a href="affiche_billet.php?id=<?php echo $billet -> getId() ?>" class="text-dark"><?php echo substr($billet -> getContenu(), 0, 25) ?> ...Lire la suite</a>
          <form action="ajouter_commentaire.php?id=<?php echo $billet->getId()?>" class='mt-1' method='post'>

          <?php 
          if(isset($_SESSION['userId'])){
            echo "<div class='form-group d-flex-row'>
              <input type='text' class='form-control' name='newcom'>
              <button type=submit class='btn btn-primary mt-2'>Poster</button>
            </div>";
          }else{
            echo '<p>Vous devez être connecté pour ajouter un commentaire</p>';
          } ?>
          </form>
        
         </div>
          

        </div> 

      <?php }  ?>        
      
     </div>
     
 </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>