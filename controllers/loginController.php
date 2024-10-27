<?php
class LoginController {
public function index() {
$view = 'views/login.view.php';
if (file_exists($view)) {
require_once $view;
} else {
echo 'File not found';
}
}
}
?>
