<?php 
require 'bootstrap.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Billets</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <style></style>
</head>
<?php 
$billetRepo = $entityManager -> getRepository('Billet');
$afficheBillet = $billetRepo -> findBy(array(),array('id'=>'DESC'),3);
?>
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
        <a href="archives.php" class="nav-link text-light">Archives</a>
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
      echo '<span class="navbar-text text-light mr-4">'.'Bonjour'.' '.$_SESSION['userLogin'].' ('.$_SESSION['categorie'].') '.'</span>';}else{
      echo '<span class="navbar-text text-light mr-4>Bonjour</span>';}
    ?>
    


    <span class="navbar-text text-light">
      Numéro 1 sur le rap
    </span>
  </div>
 </nav>
 <h1 class="text-center mt-3">Billets récents</h1>

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

     <div class="row mt-5">

     <?php 
     if(isset($_SESSION['userId'])){
      if($_SESSION['userId'] == 3){
        echo '
        <form action="creer_billet.php" method="post">
              <div class="form-group col-12">
                <label for="">Titre</label>
                <input type="text" for="" name="titre" class="form-control"></input>
              </div>
              <div class="form-group col-12">
                <label for="">Ajouter un billet</label>
                <textarea name="nv" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-info m-auto">Envoyer</button>
        </form>
        ';
       }
     }else{
       echo "<p>Veuillez vous connecter pour poster un billet</p>";
     }
     ?>
      
     </div>
     
 </div>
 
</body>
</html>