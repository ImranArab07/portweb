<?php

require_once 'controllers/HomeController.php';
require_once 'controllers/NewPostController.php';
require_once 'controllers/ContactController.php';
require_once 'controllers/OvermijController.php';
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

    case 'vaardigheden':
        require 'views/vaardigheden.view.php';
        break;

    case 'contact':
        $controller = new ContactController();
        $controller->index();
        break;

    case'overmij':
        $controller = new OvermijController();
        $controller->index();
        break;

    case 'register':
        require 'views/register.view.php';
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
