<?php
//Controllers verwerken verzoeken die worden gedaan en sturen deze door naar de juiste views.
class HomeController { // dit geeft aan om welke class het gaat.
    public function index() {
        $view = 'views/home.view.php'; // dit zorgt voor het pad naar de home view.
        if (file_exists($view)) { // hier controleren we of de view bestaat.
            require_once $view; // als het bestaat includen we die view.
        } else {
            echo 'File not found'; // als de file niet bestaat geeft het deze melding.
        }
    }
}

