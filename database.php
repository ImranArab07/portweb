
<?php
// dit is de database voor mijn contactpage
class Database {
    // hier gef ik aan welke database ik wil gebruiken
    private $host = 'localhost';
    private $db = 'contactbase';
    private $user = 'root';
    private $pass = '';
    public $conn;


    public function connect() {  // dit verbindt met mijn MySQL database
        $this->conn = null; // zorgt ervoor dat er geen andere verbinding wordt gemaakt
        try { /// hier wordt geprobeerd om connectie te maken met mijn database
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass); // de host, dbname, user en pass is boven aangegeven en met die database is hier de connectie gemaakt
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // zorgt ervoor dat een fout kan worden gegeven als de connectie mislukt
        } catch(PDOException $e) { /// geeft de fout weer en de $e geeft meer info over de fout
            echo "Connection failed: " . $e->getMessage(); // als er een fout optreedt wordt deze foutmelding gegeven
        }
        return $this->conn; // dit retourneert de PDO-verbinding, hierdoor kunnen er dingen bijgewerkt worden in de code
    }
}


