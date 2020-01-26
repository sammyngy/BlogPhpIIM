<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="app/public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="app/public/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            mode : "textareas",
            editor_selector : "mceEditor"
        });
    </script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php" title="Accueil">Accueil
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=PostController&action=indexAction">Liste des Articles</a>
        </li>
        <?php
        if(isset($_SESSION) && empty($_SESSION)) {
    ?>
        <li class="nav-item">
        
          <a class="nav-link" href="?controller=UserController&action=loginAction">Connexion</a>
        </li>
        <?php
        }
     ?>
     <?php
        if(isset($_SESSION) && !empty($_SESSION)) {
    ?>
        <li class="nav-item">
          <a class="nav-link" href="?controller=AdminController&action=indexAction" title="Espace d'administration">Administration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=UserController&action=logoutAction" title="Se déconnecter" >Déconnexion</a>
        </li>

        <?php
        }
    ?>
      </ul>
    </div>
  </div>
</nav>

<header>
<div class="container-fluid">

<div class="topnav" id="myTopnav">
  <!-- <a href="index.php" class="active" title="Accueil">Article simple pour l'Alaska</a> -->
  <a href="?controller=PostController&action=indexAction">Liste des chapitres</a>
    <?php
        if(isset($_SESSION) && empty($_SESSION)) {
    ?>
        <a href="?controller=UserController&action=loginAction" title="Se connecter">Connexion</a>
    <?php
        }
     ?>
    <?php
        if(isset($_SESSION) && !empty($_SESSION)) {
    ?>
        <!--<li><a href="?controller=UserController&action=registerAction" title="S'incrire">Inscription</a></li>-->
        <a href="?controller=AdminController&action=indexAction" title="Espace d'administration">Administration</a>
        <a href="?controller=UserController&action=logoutAction" title="Se déconnecter">Déconnexion</a>
    <?php
        }
    ?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div class="container">
    <div id="message">
        <?php include 'inc/_alertMessage.php'; ?>
    </div>

    <!-- Contenu de la page -->
    <?= $content ?>

</div><!-- /.container -->
</body>

</body>
</html>
