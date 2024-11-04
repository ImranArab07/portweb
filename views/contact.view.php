<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/views/css/myStyle.css">
    <link rel="stylesheet" href="/views/css/mediaqueries.css">
</head>
<header>
    <nav id="desktop-nav">
        <div class="logo">Imran Arab</div>
        <div>

            <ul class="nav-links">
                <li class="hideOnMobile"><a href="/home">Home</a></li>
                <li class="hideOnMobile"><a href="/home#about">Over mij</a></li>
                <li class="hideOnMobile"><a href="/home#vaardigheden">Vaardigheden</a></li>
                <li class="hideOnMobile"><a href="/home#portfolio">Portfolio</a></li>
                <li class="hideOnMobile"><a href="/contact">Contact </a></li>
                <li class="hideOnMobile"><a href="/posts">Posts</a></li>
                <li class="hideOnMobile"><a href="/post">New post</a></li>


            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo">Imran Arab</div>
        <div class="menu-overlay"></div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">
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
<body>
<section class="contact-form">
    <div class="content-contact-form">
        <h2>Contact Us</h2>
        <p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="contact-container-form">
        <div class="contactInfo-form">

            <div class="contact-box-form">
                <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
            <div class="contact-text">
                <h3>Address</h3>
                <p>Harl. , <br> Stdenwijk, Almere,<br>32</p>
            </div>
            </div>
            <div class="contact-box-form">
                <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="contact-text">
                    <h3>Phone</h3>
                    <p>+31 6 87470878</p>
                </div>
            </div>
            <div class="contact-box-form">
                <div class="contact-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="contact-text">
                    <h3>Email</h3>
                    <p>Imran.a07@hotmail.com</p>

                </div>
            </div>
        </div>
        <div class="contactForm">
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
