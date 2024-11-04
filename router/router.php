<?php
// de router zorgt voor de logica van de website
// Dit zorgt ervoor dat de router elke controller een keer wordt geladen om fouten te voorkomen

require_once 'controllers/HomeController.php';
require_once 'controllers/NewPostController.php';
require_once 'controllers/ContactController.php';
require_once 'controllers/PostsController.php';


// dit zorgt ervoor dat het pad in de URL klopt en netjes is
$uri =trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

//  bepaalt welke actie uitgevoerd moet worden en schakelt over naar die $uri
switch ($uri) {

    case '':  // als de $uri leeg is wordt de homepage geladen
    case 'home':
        require 'views/home.view.php'; // hier pakt hij mijn html homepagina
        $controller = new HomeController();
        $controller->index(); // dit roept de logica van de startpagina op
        break;



    case 'post': // dit is de uri post en daarvoor wordt de NewpostController geinstalleerd
        $controller = new NewPostController();
        $controller->store();
        break;


    case 'contact': // dit is de uri contact en daarvoor wordt de ContactController geinstalleerd
        $controller = new ContactController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { // zoekt of er een post verzoek is
            $controller->store($_POST); // als er een post verzoek is, slaat hij het op.
        } else {
            $controller->index(); // anders wordt de contactpagina getoont
        }
        break;





    case 'posts': // dit is de uri posts en daarvoor wordt de PostsController geinstalleerd
        $controller = new PostsController();
        $controller->index(); // dit toont de blogposts die zijn geplaatst
        break;

        // dit is voor als de gevraagde pagina niet wordt gevonden, dan geeft het deze fout meding
    default:
        echo " Deze pagina is niet beschikbaar";
        http_response_code(404);
        break;

}
