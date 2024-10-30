<?php

class PostsController {
    private $conn;

    public function __construct() {
        $host = "localhost";
        $dbname = "profileapp";
        $username = "root";
        $password = "";

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database verbinding mislukt: " . $e->getMessage();
            exit();
        }
    }

    public function index() {
        $sql = "SELECT title, content, author, created_at FROM posts ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $view = 'views/posts.view.php';
        require 'views/layout/main.php';
    }
}


