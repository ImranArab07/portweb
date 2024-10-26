<?php

$uri =trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch ($uri) {
    case '':
    case 'home':
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

    case'login':
        $controller = new LoginController();
        $controller->index();
        break;

    case 'register':
        require 'views/register.view.php';
        break;

    default:
        echo " Deze pagina is niet beschikbaar";
        http_response_code(404);
        break;

}
