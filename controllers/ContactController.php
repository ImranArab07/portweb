
<?php

class ContactController{
    public function index() {
        $view = 'views//contact.view.php';
        if (file_exists($view)) {
            require_once $view;
        } else {
            echo 'File not found';
        }
    }
}
?>