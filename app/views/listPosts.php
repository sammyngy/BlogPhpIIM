<!-- Titre de la page -->
<?php $title = 'Liste des chapitres'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<h1>Liste des Articles</h1>
<hr>
<div class="row">

<?php
while ($post = $posts->fetch())
{
    ?>


<div class="col-lg-4 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="?controller=PostController&action=showAction&id=<?= $post['id'] ?>"><?= (html_entity_decode($post['title'])) ?></a>
            
          </h4>
          <p>Publié le <?= $post['added_datetime_fr'] ?></p>
          <p class="card-text"><?= substr (nl2br(html_entity_decode($post ['content'])), 0, 100) . '...' ?></p>
          <a href="?controller=PostController&action=showAction&id=<?= $post['id'] ?>" title="Lire le Article" >Lire la suite</a>
        </div>
      </div>
    </div>



    <?php
}
$posts->closeCursor();
?>
</div>
<hr>

<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('app/views/template.php'); ?>
