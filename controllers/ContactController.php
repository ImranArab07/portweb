
<?php
require_once 'database.php';

//Controllers verwerken verzoeken die worden gedaan en sturen deze door naar de juiste views.
class ContactController{// dit geeft aan om welke class het gaat.
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function index()
    {
        $view = 'views//contact.view.php';// dit zorgt voor het pad naar contact view.
        if (file_exists($view)) { // hier controleren we of de view bestaat.
            require_once $view; // als het bestaat includen we die view.
        } else {
            echo 'File not found'; // als de file niet bestaat, heeft het deze melding.
        }
    }

    public function store($data)
    {
        $query = "INSERT INTO contact_messages (full_name, email, message) VALUES (:full_name, :email, :message)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':full_name', $data['full_name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':message', $data['message']);

        if ($stmt->execute()) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}
