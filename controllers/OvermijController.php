<?php
class OvermijController {
public function index() {
$view = 'views/Overmij.view.php';
if (file_exists($view)) {
require_once $view;
} else {
echo 'File not found';
}
}
}
?>
