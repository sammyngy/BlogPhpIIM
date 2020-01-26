<!-- Titre de la page -->
<?php $title = $post->getTitle() ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<p><a href="?controller=PostController&action=indexAction">Retour à la liste des Articles</a></p>


<div  class="row">

<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light"><?php echo html_entity_decode($post->getTitle()) ?></h1>
      <hr>
      <p style="font-size: 16px;" class="lead" >Par : <strong><?php echo html_entity_decode($post->getAuthor()) ?></strong>  <br>Publié le : <?php echo $post->getAddedDatetime() ?> </p>
      <p class="lead"><?php echo html_entity_decode($post->getContent()) ?></p>
    </div>
  </div>
</div>





<?php $content = ob_get_clean(); ?>

<!-- Requiert le fichier template.php -->
<?php require('app/views/template.php'); ?>