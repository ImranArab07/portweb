<?php

$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        require 'controllers/HomeController.php';
        break;

    case '/home':
        require 'controllers/HomeController.php';

        case '/portfolio':
            require 'views/portfolio.view.php';
            break;

            case '/post':
                require 'views/post.view.php';
                break;

                case '/vaardigheden':
                    require 'views/vaardigheden.view.php';
                    break;

                case '/contact':
                    require 'views/contact.view.php';
                    break;

                    case'/login':
                        require 'views/login.view.php';
                    break;

                    case '/register':
                        require 'views/register.view.php';
                        break;

                    default:
                        echo " deze pagina is niet beschikbaar";








}