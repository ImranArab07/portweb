<?php

class HomeController {
    public function index() {
        $view = 'views/home.view.php';
        if (file_exists($view)) {
            require_once $view;
        } else {
            echo 'File not found';
        }
    }
}

