<?php

namespace controllers;

use models\CommentManager;
use models\Message;
use models\ArticleManager;

class AdminController {

    // depuis la page d'administration
    public function indexAction()
    {
        // Objet
        $newArticleManager = new ArticleManager();
        // Méthode
        $posts = $newArticleManager->getPosts();
        // Vue
        require 'app/views/adminPanel.php';
    }

    // Publier un nouveau Article depuis la page d'administration
    public function postAction($title, $content)
    {
        // Si la requête serveur est une méthode POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if (!empty($title) && !empty($content))
            {
                $newArticleManager = new ArticleManager();
                $newArticleManager->addPost($title, $content);
                $newMessage = new Message();
                $newMessage->setSuccess("<p>Merci, votre Article a bien été publié !</p>");
            }
            else
            {
                $newMessage = new Message();
                $newMessage->setError("<p>Tous les champs doivent être rempli !</p>");
            }
        }
        // Sinon on reste sur la page
        $newAdminController = new AdminController();
        $newAdminController->indexAction();
    }

    // Modifier un Article depuis la page d'administration
    public function editPostAction($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $post = new ArticleManager();
            $post->updatePost($_GET['id'], htmlspecialchars($_POST['title']), htmlspecialchars($_POST['content']));
            $newMessage = new Message();
            $newMessage->setSuccess("<p>Merci, votre Article a bien été modifié !</p>");
        }
        $newArticleManager = new ArticleManager();
        $post = $newArticleManager->getPost($id);
        // Vue
        require 'app/views/editPost.php';
    }

    // Supprimer un Article depuis la page d'administration
    public function deletePostAction($id)
    {
        $newArticleManager = new ArticleManager();
        $deletedPost = $newArticleManager->deletePost($id);
        // Gestion des erreurs
        if ($deletedPost === false)
        {
            throw new Exception("Impossible de supprimer le Article !");
        }
        else
        {
            header('Location: ?controller=AdminController&action=indexAction');
        }
    }

   
}