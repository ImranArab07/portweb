<?php
////require 'router/router.php';
//
//// Database inloggegevens
//$host = "localhost";
//$dbname = "profileapp";
//$username = "root";
//$password = "";
//
//$message = "";
//
//try {
//    // Nieuwe PDO-Verbinding maken
//    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully<br>";
//
//    // Controleer of het formulier via een POST-verzoek is ingediend
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        // Haal de gegevens op uit het formulier
//        $title = $_POST['title'];
//        $content = $_POST['content'];
//        $author = $_POST['author'];
//
//        // SQL-query om gegevens in te voegen met voorbereide statements
//        $sql = "INSERT INTO posts (title, content, author) VALUES (:title, :content, :author)";
//
//        $stmt = $conn->prepare($sql);
//
//        // Koppel de waarden aan de parameters
//        $stmt->bindParam(':title', $title);
//        $stmt->bindParam(':content', $content);
//        $stmt->bindParam(':author', $author);
//
//        // Voer de query uit
//        $stmt->execute();
//
//        // Succesbericht
//        echo "Nieuwe post succesvol aangemaakt!";
//    }
//}
//catch (PDOException $e) {
//    // Foutmelding tonen als er iets misgaat
//    echo "Fout bij het verbinden met de database: " . $e->getMessage();
//}
//
//
require 'router/router.php';

//// Database inloggegevens
//$host = "localhost";
//$dbname = "profileapp";
//$username = "root";
//$password = "";
//
//$message = "";
//
//try {
//    // Nieuwe PDO-Verbinding maken
//    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        // Haal de gegevens op uit het formulier
//        $title = $_POST['title'];
//        $content = $_POST['content'];
//        $author = $_POST['author'];
//
//        // SQL-query om gegevens in te voegen met voorbereide statements
//        $sql = "INSERT INTO posts (title, content, author) VALUES (:title, :content, :author)";
//
//        $stmt = $conn->prepare($sql);
//
//        // Koppel de waarden aan de parameters
//        $stmt->bindParam(':title', $title);
//        $stmt->bindParam(':content', $content);
//        $stmt->bindParam(':author', $author);
//
//        // Voer de query uit
//        $stmt->execute();
//
//        // Succesbericht
//        $message = "Nieuwe post succesvol aangemaakt!";
//        require 'views/post.view.php';
//    } else {
//        require 'views/post.view.php';
//    }
//} catch (PDOException $e) {
//    // Foutmelding tonen als er iets misgaat
//    $message = "Fout bij het verbinden met de database: " . $e->getMessage();
//    require 'views/post.view.php';
//}
//?>
<!---->
<!---->
