<?php

$uri =trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch ($uri) {
    case '':
    case 'home':
        require 'views/home.view.php';
        break;

        case 'portfolio':
            require 'views/portfolio.view.php';
            break;

            case 'post':
                require 'views/post.view.php';
                break;

                case 'vaardigheden':
                    require 'views/vaardigheden.view.php';
                    break;

                case 'contact':
                    require 'views/contact.view.php';
                    break;

                    case'login':
                        require 'views/login.view.php';
                    break;

                    case 'register':
                        require 'views/register.view.php';
                        break;

                    default:
                        echo " Deze pagina is niet beschikbaar";
                        http_response_code(404);
                        break;








}