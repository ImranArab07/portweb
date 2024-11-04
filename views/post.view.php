<!-- dit is mijn aparte html file voor mijn new post pagina -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webportfolio</title>
    <!-- deze links zorgen ervoor dat ik mijn css en media.css kan gebruiken om de layout van mijn website te laten werken en ook om de responsiviteit -->
    <link rel="stylesheet" href="/views/css/myStyle.css">
    <link rel="stylesheet" href="/views/css/mediaqueries.css">

</head>

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
    <div class="menu-overlay"></div>
</header>
<!--<body>-->
<body>

<?php if (!empty($message)): // controleert of de varlabele $message niet leeg is, als het niet leeg is wordt het verder uitgevoerd  ?>
<p><?php echo $message; // hier wordt de inhoud van message getoond ?></p>
<?php endif; // hier eindigt de if ?>

<?php if (!isset($postCreated) || !$postCreated): // controleert of de variable $postcreated niet is ingesteld  en of het false is  ?>
    <!-- hier wordt de post formulier gemaakt -->
    <div class="post-page-container">
        <div class="post-form-wrapper">
            <h2>Create New Post</h2>
            <!-- hier gebruiken we <form> om een formulier aan te maken -->
            <form action="/post" method="post" class="post-form-style"> <!-- action zorgt ervoor dat het formulier ergens naar toe wordt verzonden, method zorgt ervoor dat de gegevens niet te zien zijn in de URl -->
                <div>
                    <label for="title">Title:</label> <!-- hierdoor weet de gebruiker waar hij zijn de titel moet geven -->
                    <input type="text" id="title" name="title"> <!-- dit zorgt voor de input box waar in het getypt kan worden en hier vul je dan de titel in -->
                </div>

                <div>
                    <label for="content">Content:</label> <!-- hierdoor weet de gebruiker waar hij de content moet geven -->
                    <input type="text" id="content" name="content"> <!-- dit zorgt voor de input box waar in het getypt kan worden en hier vul je dan de content inhoud in -->
                </div>

                <div>
                    <label for="author">Author:</label>  <!-- hierdoor weet de gebruiker waar hij de auteur naam moet geven -->
                    <input type="text" id="author" name="author"> <!-- dit zorgt voor de input box waar in het getypt kan worden en hier vul je dan de naam inhoud in -->
                </div>

                <div class="post-submit">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php endif; // hier eindigt de if is is gestart ?>
<script src="/views/js/myScript.js"></script> <!-- hier wordt weer mijn javascript gelinkt aan mijn html zodat de functies van javascript worden voldaan -->
</body>
</html>

