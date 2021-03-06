<?php 
require 'bootstrap.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
</head>
<?php 
$userRepository = $entityManager->getRepository('Utilisateur');
$rep = $entityManager -> getRepository('Billet');
$listecom = $entityManager -> getRepository('Commentaire');
$billet = $rep->findOneBy(array('id'=>$_GET['id']));
$comment = $listecom -> findBy(array('billet' => $billet));

?>
<title>Booska-C | <?php echo $billet->getIntitule() ?></title>
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
              <a class="nav-link text-light disabled" href="nouveaubillet.php">Nouveau billet</a>
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
}else{
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
   <div class="row">
   <div class=col-12>
     <h1 class="text-center mt-3"><?php echo $billet->getIntitule() ?></h1>
     <p class="text-center">Le: <?php echo $billet->getDatepost()->format('d-m-Y')?></p>
     <p class="text-center"><?php echo $billet->getContenu() ?></p>
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
    <h2>Commentaires:</h2>
    <button id="comment" class="btn btn-primary">Afficher les commentaires</button>
      <?php foreach($comment as $com){ 
            $user = $userRepository -> findOneBy(['id'=>$com -> getUtilisateur() -> getId()])?>
                <div class="com card my-2 mx-2 px-3 py-2">

                    <p class="login"> Posté par : <?php echo $user -> getLogin() ?> le <?php echo $com -> getDatepost() -> format('d-m-Y')?> </p>
                    <p class="com"> <?php echo $com -> getContenu()?> </p>
                    
                </div>
                

        <?php
        } ?>
    </div>
   </div>  
 </div>



 <script>
 $(document).ready(function(){
   $(".com").hide();
   $("#comment").on('click',function(){
    $(".com").toggle();
  })
 })
 </script>
</body>
</html>