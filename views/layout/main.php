<!-- views/layout/main.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webportfolio</title>
    <link rel="stylesheet" href="/views/css/myStyle.css">
</head>
<body>
<?php include 'header.php'; ?>
<main>
    <?php
    if (isset($view) && file_exists($view)) {
        include $view;
    } else {
        echo "<p>Sorry, de pagina kon niet worden geladen.</p>";
    }
    ?>
</main>
</body>
</html>
