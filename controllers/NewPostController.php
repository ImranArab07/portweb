<?php
//require 'router/router.php';

class NewPostController
{
    private $conn;

// Database inloggegevens
    public function __construct()
    {
        $host = "localhost";
        $dbname = "profileapp";
        $username = "root";
        $password = "";


        try {
            // Nieuwe PDO-Verbinding maken
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Fout bij verbinden met database " . $e->getMessage();
            exit();
        }
    }

    public function store()
    {
        $message = "";
        $postCreated = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Haal de gegevens op uit het formulier
            $title = $_POST['title'];
            $content = $_POST['content'];
            $author = $_POST['author'];

            // SQL-query om gegevens in te voegen met voorbereide statements
            $sql = "INSERT INTO posts (title, content, author) VALUES (:title, :content, :author)";
            $stmt = $this->conn->prepare($sql);
            // Koppel de waarden aan de parameters
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':author', $author);
            // Voer de query uit
            $stmt->execute();

            // Succesbericht
            $message = "Nieuwe post succesvol aangemaakt!";
            $postCreated = true;
        }

        $view = 'views/post.view.php';
        require 'views/layout/main.php';
    }
}



?>



