<?php

namespace models;

class ArticleManager extends Manager {

    // Obtenir la liste de TOUS les Articles
    public function getPosts()
    {
        // Connexion à la base de données
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        // Requête
        $request = $db->query('SELECT id, author, title, content, DATE_FORMAT(added_datetime, \'le %d/%m/%Y à %Hh%i\') AS added_datetime_fr, DATE_FORMAT(updated_datetime, \'le %d/%m/%Y à %Hh%i\') AS updated_datetime_fr FROM posts ORDER BY added_datetime DESC');
        // Résultat
        $request->execute(array());
        $result = $request->fetchAll();
        $posts = [];
        foreach ($result as $post) {
            $newPost = new Post($post['id'], $post['author'], $post['title'], $post['content'], $post['added_datetime_fr'], $post['updated_datetime_fr']);
            $posts[] = $newPost;
        }
        return $posts;
    }

    // Obtenir la liste de TOUS les Articles SAUF le dernier en date
    public function getPreviousPosts()
    {
        // Connexion à la base de données
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        // Requête
        $request = $db->query('SELECT id, author, title, content, DATE_FORMAT(added_datetime, \'%d/%m/%Y à %Hh%i\') AS added_datetime_fr, updated_datetime FROM posts ORDER BY added_datetime DESC LIMIT 1, 99999');
        return $request;
    }

    // Récupérer le dernier Article en date
    public function getLastPost()
    {
        // Connexion à la base de données
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        // Requête
        $request = $db->prepare('SELECT id, author, title, content, DATE_FORMAT(added_datetime, \'%d/%m/%Y à %Hh%i\') AS added_datetime_fr FROM posts ORDER BY id DESC LIMIT 1');
        // Exécute la requête
        $request->execute(array());
        // Résultat
        $lastPost = $request->fetch();
        return $lastPost;
    }

    // Obtenir les données d'un SEUL Article
    public function getPost($id)
    {
        // Connexion à la base de données
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        // Requête
        $request = $db->prepare('SELECT id, author, title, content, DATE_FORMAT(added_datetime, \'%d/%m/%Y à %Hh%i\') AS added_datetime_fr, DATE_FORMAT(updated_datetime, \'le %d/%m/%Y à %Hh%i\') AS updated_datetime_fr FROM posts WHERE id = ?');
        // Exécute la requête
        $request->execute(array($id));
        // Résultat
        $post = $request->fetch();
        return new Post($post['id'], $post['author'], $post['title'], $post['content'], $post['added_datetime_fr'], $post['updated_datetime_fr']);
    }

    // Créer un nouveau Article
    public function addPost($title, $content)
    {
        // Connexion à la base de données
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        // Requête
        $request = $db->prepare('INSERT INTO posts (author, title, content, added_datetime) VALUES ("Sammy Nguyen", ?, ?, NOW())');
        // Execution
        $request->execute(array($title, $content));
    }

    // Modifier un Article existant
    public function updatePost($id, $title, $content)
    {
        // Connexion à la base de données
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        // Requête
        $request = $db->prepare('UPDATE posts SET title = ?, content = ?, updated_datetime = NOW() WHERE id = ?');
        $post = $request->execute(array($title, $content, $id));
        // Résultat
        return $post;
    }

    // Supprimer un Article
    public function deletePost($id)
    {
        // Connexion à la base de données
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        // Requête
        $request = $db->prepare('DELETE FROM posts WHERE id = ?');
        // Résultat
        $request->execute(array($id));
    }

}