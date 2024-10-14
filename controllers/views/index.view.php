<html lang="en" class="focus-outline-visible">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Layout</title>
    <link rel="stylesheet" href="css/myStyle.css">

</head>
<body>
<!-- Start Header -->

<header class="header">
    <h1>Welkom op onze portfolio website</h1>
    <nav>
        <button class="nav-btn">Projects</button>
        <button class="nav-btn">Contact us</button>
        <button class="nav-btn">New post</button>

    </nav>
</header>

<main>


    <form action="/index.php" method="post">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title"><br><br>
        </div>

        <div>
            <label for="content">Content:</label>
            <input type="text" id="content" name="content"><br><br>
        </div>

        <div>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author"><br><br>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

</main>

</body>
<script src="js/myScript.js"></script>
</html>
