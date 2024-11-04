<!-- dit is mijn aparte html file voor mijn blog pagina die ik door middel van het MVC-model require -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webportfolio</title>
    <!-- deze links zorgen ervoor dat ik mijn css en media.css kan gebruiken om de layout van mijn website te laten werken en ook om de responsiviteit -->
    <link rel="stylesheet" href="/views/css/myStyle.css">
    <link rel="stylesheet" href="/views/css/mediaqueries.css">

</head>

<!--hier begint de header-->
<header>
    <nav id="desktop-nav">
        <div class="logo">Imran Arab</div>
        <div>
            <!--dit zijn de links naar verschillende pagina's op secties -->
            <ul class="nav-links">
                <!-- de /home#about, /home#vaardigheden en de /home#portfolio zorgen er voor dat het terug gaat naar de home-pagina en dat het dan direct scrolt naar de over mij, vaardigheden of portfolio sectie -->
                <li class="hideOnMobile"><a href="/home">Home</a></li>  <!-- hideonmobile zorgt ervoor dat de links niet te zien zijn op telefoon -->
                <li class="hideOnMobile"><a href="/home#about">Over mij</a></li>
                <li class="hideOnMobile"><a href="/home#vaardigheden">Vaardigheden</a></li>
                <li class="hideOnMobile"><a href="/home#portfolio">Portfolio</a></li>
                <li class="hideOnMobile"><a href="/contact">Contact </a></li>
                <li class="hideOnMobile"><a href="/posts">Posts</a></li>
                <li class="hideOnMobile"><a href="/post">New post</a></li>

            </ul>
        </div>
    </nav>
    <!--    de hamburger menu is er voor dat als het scherm te klein is voor de link in de navbar is er een hamburger menu met de links erin-->
    <nav id="hamburger-nav">
        <div class="logo">Imran Arab</div>
        <div class="menu-overlay"></div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()"> <!-- de toggleMenu wordt gebruikt om het hamburgermenu te openen -->
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <span class="close-btn" onclick="toggleMenu()">×</span>
                <li><a href="/home" onclick="toggleMenu()">Home</a></li>
                <li><a href="/home#about" onclick="toggleMenu()">Over mij</a></li>
                <li><a href="/home#vaardigheden" onclick="toggleMenu()">Vaardigheden</a></li>
                <li><a href="/home#portfolio" onclick="toggleMenu()">Portfolio</a></li>
                <li><a href="/contact" onclick="toggleMenu()">Contact </a></li>
                <li><a href="/posts" onclick="toggleMenu()">Posts </a></li>
                <li><a href="/post" onclick="toggleMenu()">New post</a></li>

            </div>
        </div>
    </nav>
</header>

<!-- hier begint de body -->
<body class="posts-page">
<section id="blog-posts">
    <h1 class="title">Blog Posts</h1>
    <?php if(!empty($posts)): // dit controleert of er blogposts beschikbaar zijn?>
    <?php foreach ($posts as $post): // gaat door elke post in de $posts array en maakt voor ele post een $post variabele ?>
        <div class="post-box">
            <!-- de htmlspecialchars voorkomt HTML-injecties -->
            <h2><?php echo htmlspecialchars($post['title']);  // dit toont de inhoud van de post?></h2>
            <p><?php echo htmlspecialchars($post['content']); // dit toont de inhoud van de post?></p>
            <div class="post-meta">
                <span>Author: <?php echo htmlspecialchars($post['author']); //dit toont de auteur van de post ?></span><br>
                <span>Published on: <?php echo htmlspecialchars($post['created_at']); // dit toont de datum waarop de post is geslaagd  ?></span>
            </div>
        </div>
    <?php endforeach; // hier eindigt de foreach loop waarbij alle geplaatste blogs zijn weergeven?>
    <?php else: // als er geen posts zijn gevonden geeft hij de tekst die hieronder in de p tag staat ?>
    <p> Geen posts gevonden</p>
    <?php endif; ?>
</section>
<script src="/views/js/myScript.js"></script>
</body>
</html>