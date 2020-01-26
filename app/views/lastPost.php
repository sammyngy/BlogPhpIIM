<?php $title = 'Dernier chapitre'; ?>
<?php ob_start(); ?>

<div class="LastPost">
<h4><?php echo $lastPost['title'] ?></h4>
</div>
<hr>
<p> Par : <strong><?php echo $lastPost['author'] ?></p></strong>
    Publié le : <?php echo $lastPost['added_datetime_fr'] ?><br>

<p><?php echo html_entity_decode($lastPost['content']) ?> </p>
<a href="?controller=PostController&action=showAction&id=<?= $lastPost['id'] ?>" title="Lire les commentaires">Lire l'article</a>
<hr>

<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('app/views/template.php'); ?>
