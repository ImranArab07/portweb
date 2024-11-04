<!-- dit is mijn aparte html voor mijn contact pagina -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US Page</title>
    <!-- deze links zorgen ervoor dat ik mijn css en media.css kan gebruiken om de layout van mijn website te laten werken en ook om de responsiviteit -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
<!-- eindigt de header en begint de body -->

<body>
<!-- hier begint mijn contactformulier -->
<section class="contact-form">
    <div class="content-contact-form">
        <h2>Contact Us</h2>

    </div>
    <div class="contact-container-form">
        <div class="contactInfo-form">

            <div class="contact-box-form">
                <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div> <!-- heb ik een class voor mijn contact icoon en geeft het font van de map icoon aan in een class en de aria hidden zorgt ervoor dat het icoon verbergt voor schermlezers omdat het decoratief is. -->
            <div class="contact-text">
                <h3>Address</h3>
                <p>Harl. , <br> Stdenwijk, Almere,<br>32</p>
            </div>
            </div>
            <div class="contact-box-form">
                <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></div> <!-- heb ik een class voor mijn contact icoon en geeft het font van de telefoon icoon aan in een class en de aria hidden zorgt ervoor dat het icoon verbergt voor schermlezers omdat het decoratief is. -->
                <div class="contact-text">
                    <h3>Phone</h3>
                    <p>+31 6 87470878</p>
                </div>
            </div>
            <div class="contact-box-form">
                <div class="contact-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div> <!-- heb ik een class voor mijn contact icoon en geeft het font van de mail icoon aan in een class en de aria hidden zorgt ervoor dat het icoon verbergt voor schermlezers omdat het decoratief is. -->
                <div class="contact-text">
                    <h3>Email</h3>
                    <p>Imran.a07@hotmail.com</p>

                </div>
            </div>
        </div>
        <div class="contactForm">
            <!-- hier is de inputbox waar als in geschreven kan worden -->
            <form method="POST" action="/contact">
                <h2>Send Message</h2>
                <div class="InputBox-contact">
                    <input type="text" name="full_name" required="required">
                    <span>Full Name</span>
                </div>
                <div class="InputBox-contact">
                    <input type="email" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="InputBox-contact">
                    <textarea name="message" required="required"></textarea>
                    <span>Type your Message</span>
                </div>
                <div class="InputBox-contact">
                    <input type="submit" name="" value="send">
                </div>
            </form>
        </div>
    </div>

</section>
<script src="/views/js/myScript.js"></script>
</body>
</html>
