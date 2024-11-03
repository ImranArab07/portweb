<?php

require_once 'controllers/HomeController.php';
require_once 'controllers/NewPostController.php';
require_once 'controllers/ContactController.php';
require_once 'controllers/PostsController.php';



$uri =trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch ($uri) {
    case '':
    case 'home':
        require 'views/home.view.php';
        $controller = new HomeController();
        $controller->index();
        break;

    case 'portfolio':
        require 'views/portfolio.view.php';
        break;

    case 'post':
        $controller = new NewPostController();
        $controller->store();
        break;


    case 'contact':
        $controller = new ContactController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->store($_POST);
        } else {
            $controller->index();
        }
        break;





    case 'posts':
        $controller = new PostsController();
        $controller->index();
        break;

    default:
        echo " Deze pagina is niet beschikbaar";
        http_response_code(404);
        break;

}
