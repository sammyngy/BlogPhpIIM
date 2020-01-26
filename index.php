<?php

namespace controllers;
ini_set ( 'display_errors' , 1 ); 
session_start();

// Autoloader de classe
require 'app/vendor/autoload.php';

// Si présence d'un controller
if (isset($_GET['controller'])) {
    // Si présence d'une action
    if (isset($_GET['action'])) {
        // UserController
        if ($_GET['controller'] == 'UserController') {
            // Inscription
            if ($_GET['action'] == 'registerAction') {
                // Conditions 
                $pseudo = isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : NULL;
                $password_hash = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : NULL;
                $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : NULL;
                $newUserController = new UserController();
                $newUserController->register($pseudo, $password_hash, $email);
            }
            // Connexion
            elseif ($_GET['action'] == 'loginAction') {
                // Conditions 
                $pseudo = isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : NULL;
                $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : NULL;
                $newUserController = new UserController();
                $newUserController->login($pseudo, $password);
            }
            // Déconnexion
            elseif ($_GET['action'] == 'logoutAction') {
                require 'app/views/logout.php';
            }
            else {
                require 'app/views/error.php';
            }
        }
        // PostController
        elseif ($_GET['controller'] == 'PostController') {
            // Affiche la liste des Articles en ligne
            if ($_GET['action'] == 'indexAction') {
                $newPostController = new PostController();
                $newPostController->indexAction();
            }
            // Affiche le contenu d'un Article 
            elseif ($_GET['action'] == 'showAction') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $newPostController = new PostController();
                    $newPostController->showAction($_GET['id']);
                } else {
                    // erreur 404
                    require 'app/views/error.php';
                }
            }
        
            // Obtenir les informations sur l'auteur
            elseif ($_GET['action'] == 'about') {
                require 'app/views/about.php';
            }
            else {
                require 'app/views/error.php';
            }
        }
        // Actions possibles depuis la page d'administration (connexion obligatoire)
        elseif (isset($_SESSION) && !empty($_SESSION)) {
            // AdminController
            if ($_GET['controller'] == 'AdminController') {
                // Affiche les Articles en ligne 
                if ($_GET['action'] == 'indexAction') {
                    $newAdminController = new AdminController();
                    $newAdminController->indexAction();
                }
                // Publier un nouveau Article
                elseif ($_GET['action'] == 'postAction') {
                    // Conditions ternaires
                    $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : NULL;
                    $content = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : NULL;
                    $newAdminController = new AdminController();
                    $newAdminController->postAction($title, $content);
                }
                // Modifier un Article
                elseif ($_GET['action'] == 'editPostAction') {
                    $newAdminController = new AdminController();
                    $newAdminController->editPostAction($_GET['id']);
                }
                // Supprimer un Article
                elseif ($_GET['action'] == 'deletePostAction') {
                    $newAdminController = new AdminController();
                    $newAdminController->deletePostAction($_GET['id']);
                }              
                else {
                    require 'app/views/error.php';
                }
            }
        }
        // Si on tente de se connecter sans être identifié
        else {
            require 'app/views/error.php';
        }
    }
    // Si on tente d'acéder à un autre controller
    else {
        require 'app/views/error.php';
    }
}
else {
    // Page d'accueil du site, affiche le dernier Article publié
    $newPostController = new PostController();
    $newPostController->showLastPostAction();
}

