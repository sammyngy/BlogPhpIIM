<?php

namespace controllers;

use models\ArticleManager;
use models\CommentManager;

class PostController {

    // Lister les Articles à l'accueil
    public function indexAction()
    {
        $newArticleManager = new ArticleManager();
        $posts = $newArticleManager->getPreviousPosts();
        require 'app/views/listPosts.php';
    }

    // Afficher le dernier  Article en date
    public function showLastPostAction()
    {
        $newArticleManager = new ArticleManager();
        $lastPost = $newArticleManager->getLastPost();
        require 'app/views/lastPost.php';
    }

    // Afficher le contenu d'un Article
    public function showAction($id)
    {
        $newArticleManager = new ArticleManager();
        $post = $newArticleManager->getPost($id);
        // Si l'id du Article n'existe pas alors on affiche une erreur
        if ($post->getId() == null)
        {
            // Vue
            require 'app/views/error.php';
        }
        else
        {
            // Vue
            require 'app/views/postView.php';
        }
    }
}