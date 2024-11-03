<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webportfolio</title>
    <link rel="stylesheet" href="/views/css/myStyle.css">
    <link rel="stylesheet" href="/views/css/mediaqueries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<!--<body>-->
<header>
    <nav id="desktop-nav">
        <div class="logo">Imran Arab</div>
        <div>

        <ul class="nav-links">
            <li class="hideOnMobile"><a href="/home">Home</a></li>
            <li class="hideOnMobile"><a href="#about">Over mij</a></li>
            <li class="hideOnMobile"><a href="#vaardigheden">Vaardigheden</a></li>
            <li class="hideOnMobile"><a href="#portfolio">Portfolio</a></li>
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
            <div class="hamburger-icon" onclick="togglesidebar()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <span class="close-btn" onclick="toggleMenu()">×</span>
                <li><a href="/home" onclick="toggleMenu()">Home</a></li>
                <li><a href="#about" onclick="toggleMenu()">Over mij</a></li>
                <li><a href="#portfolio" onclick="toggleMenu()">Portfolio</a></li>
                <li><a href="#vaardigheden" onclick="toggleMenu()">Vaardigheden</a></li>
                <li><a href="/contact" onclick="toggleMenu()">Contact </a></li>
                <li><a href="/posts" onclick="toggleMenu()">Posts </a></li>
                <li><a href="/post" onclick="toggleMenu()">New post</a></li>

            </div>
        </div>
    </nav>
</header>
<body>
    <section id="profile">

        <div class="section_pic-container">
            <img src="/views/images/Imran.png" alt="Imran Arab profile picture">
        </div>



        <div class="section__text">
            <p class="section__text__p1"> Hallo ik ben</p>
            <h1 class="title">Imran Arab</h1>
            <p class="section__text__p2">Software Developer</p>
            <div class="btn-container">
            <button class="btn btn-color-2" onclick="window.open('/views/assets/cv imran.docx.pdf')">Download cv</button>
            <button class="btn btn-color-1" onclick="location.href='./views/contact.view.php'">Contact info</button>
        </div>
        <div id="socials-container">
            <img src="/views/assets/teamss.jpg" alt="My Teams profile"
                 class="icon" onclick="location.href='https://teams.microsoft.com/v2/'"/>

            <img src="/views/assets/github.jpg" alt="My Github profile"
                 class="icon" onclick="location.href='https://github.com/ImranArab07'"/>
        </div>
    </section>
    <section id="about">
       <p class="section__text__p1"> Kom Meer Over Mij Te Weten</p>
        <h1 class="title">Over mij</h1>
        <div class="section-container">
            <div class="section_pic-container">
                <img src="/views/images/Arab.jpeg" alt="Profile picture" class="about-pic"/>
                </div>
            <div class="about-details-container">
                <div class="about-containers">
                    <div class="details-container">
                        <img src="/views/images/experience.jpg" alt="experience icon" class="icon">
                       <h3>Mijn Ervaring</h3>
                        <p> 3 maanden ervaren  <br> Frontend Developer <br> Backend Developer</p>
                        <div class="lees-meer-container">
                            <button class="lees-meer-btn" onclick="showExtraContent(this)">Lees meer</button>
                        </div>

                        <div class="extra-content">
                            <p> Ik ben nu Ongeveer 3 maanden bezig met Frontend en Backend Development.
                                Ik begon met de opleiding zonder kennis over programmeren.
                                Het proces van het leren van de Programeertalen en het begrijpen ervran ging oeizaam aan het begin.
                                Daarna kreeg ik het besef dat je bij deze opleiding echt veel tijd aan kwijt moet raken.  </p>
                        </div>
                    </div>
                    <div class="details-container">
                        <img src="/views/assets/educIcon.jpg" alt="Education icon" class="icon">
                        <h3>Onderwijs</h3>
                        <p> Havo Diploma <br> (huidige studie) AD Software Development</p>
                        <div class="lees-meer-container">
                            <button class="lees-meer-btn" onclick="showExtraContent(this)">Lees meer</button>
                        </div>

                        <!-- Extra content to be shown on button click -->
                        <div class="extra-content">
                            <p>Hier komt meer tekst over mijn ervaring...</p>
                        </div>
                    </div>
                </div>
                <div class="text-container">

                </div>
            </div>
        </div>
        <img
                src="/views/assets/arrow.jpg"
                alt="arrow icon" class="icon arrow"
                onclick="scrollToSection('#vaardigheden')">
    </section>
    <section id="vaardigheden">
       <p class="section__text__p1">Ontdek mijn </p>
        <h1 class="title">Vaardigheden</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt</p>
        <div class="vaardigheden-details-container">
            <div class="about-containers">
            <div class="details-container">
                <h2 class="vaardigheden-sub-title">Frontend Development</h2>
                <div>
                    <h3>HTML</h3>
                    <div class="progress-bar">
                        <div class="progress" data-progress="80">80%</div>
                    </div>
                </div>
                <div>
                    <h3>CSS</h3>
                    <div class="progress-bar">
                        <div class="progress" data-progress="70">70%</div>
                    </div>

                </div>
                <div>
                    <h3>JavaScript</h3>
                    <div class="progress-bar">
                        <div class="progress" data-progress="60">60%</div>
                    </div>
                </div>
                <div class="lees-meer-container">
                    <button class="lees-meer-btn" onclick="showExtraContent(this)">Lees meer</button>
                </div>

                <!-- Extra content to be shown on button click -->
                <div class="extra-content">
                    <p>Hier komt meer tekst over mijn ervaring...</p>
                </div>
            </div>
            <div class="details-container">
                <h2 class="vaardigheden-sub-title">Backend Development</h2>
                <div>
                    <h3>PHP</h3>
                    <div class="progress-bar">
                        <div class="progress" data-progress="50">50%</div>
                    </div>
                </div>
                <div>
                    <h3>MySQL</h3>
                    <div class="progress-bar">
                        <div class="progress" data-progress="65">65%</div>
                    </div>
                </div>
                <div>
                    <h3>Git</h3>
                    <div class="progress-bar">
                        <div class="progress" data-progress="75">75%</div>
                    </div>
                </div>
                <div class="lees-meer-container">
                    <button class="lees-meer-btn" onclick="showExtraContent(this)">Lees meer</button>
                </div>
                <div class="extra-content">
                    <p>Hier komt meer tekst over mijn ervaring...</p>
                </div>
            </div>
        </div>
        <img src="/views/assets/arrow.jpg" alt="arrow icon" class="icon arrow" onclick="scrollToSection('#portfolio')">
    </section>
    <section id="portfolio">
        <p class="section__text__p1">Browse My Recent</p>
        <h1 class="title">Portfolio</h1>
        <div class="experience-details-container">
            <div class="about-containers">
            <div class="details-container color-container">
                <div class="article-container">
                    <img
                        src="/views/images/Project1.jpg"
                        alt="Portfolio project 1"
                        class="project-img"/>
                </div>
                <h2 class="experience-sub-title project-title">Project One</h2>
                <p class="section__text__p1"> My first project is .... , Do you want to know more? Click on GitHub or live Demo to go to my project </p>
                <div class="btn-container">
                    <button class="btn btn-color-2 project-btn"
                            onclick="location.href='https://github.com/ImranArab07'">
                        Github
                    </button>
                    <button class="btn btn-color-2 project-btn"
                            onclick="location.href='https://github.com/ImranArab07'">
                        Live Demo
                    </button>
                </div>
                <div class="lees-meer-container">
                    <button class="lees-meer-btn" onclick="showExtraContent(this)">Lees meer</button>
                </div>
                <div class="extra-content">
                    <p>Hier komt meer tekst over mijn ervaring...</p>
                </div>
            </div>
        <div class="details-container color-container">
            <div class="article-container">
                <img
                        src="/views/images/Project2.jpg"
                        alt="Portfolio project 2"
                        class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">Project Two</h2>
            <p class="section__text__p1"> My Second project is .... , Do you want to know more? Click on GitHub or live Demo to go to my project </p>
            <div class="btn-container">
                <button class="btn btn-color-2 project-btn"
                        onclick="location.href='https://github.com/ImranArab07'">
                    Github
                </button>
                <button class="btn btn-color-2 project-btn"
                        onclick="location.href='https://github.com/ImranArab07'">
                    Live Demo
                </button>
            </div>
            <div class="lees-meer-container">
                <button class="lees-meer-btn" onclick="showExtraContent(this)">Lees meer</button>
            </div>
            <div class="extra-content">
                <p>Hier komt meer tekst over mijn ervaring...</p>
            </div>
        </div>
        <div class="details-container color-container">
            <div class="article-container">
                <img
                        src="/views/images/Project3.jpg"
                        alt="Portfolio project 3"
                        class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">Project three</h2>
            <p class="section__text__p1"> My Third project is .... , Do you want to know more? Click on GitHub or live Demo to go to my project </p>
            <div class="btn-container">
                <button class="btn btn-color-2 project-btn"
                        onclick="location.href='https://github.com/ImranArab07'">
                    Github
                </button>
                <button class="btn btn-color-2 project-btn"
                        onclick="location.href='https://github.com/ImranArab07'">
                    Live Demo
                </button>
            </div>
            <div class="lees-meer-container">
                <button class="lees-meer-btn" onclick="showExtraContent(this)">Lees meer</button>
            </div>

            <!-- Extra content to be shown on button click -->
            <div class="extra-content">
                <p>Hier komt meer tekst over mijn ervaring...</p>
            </div>
        </div>
            </div>
        </div>
<!--        <img-->
<!--                src="/views/assets/arrow.jpg"-->
<!--                alt="arrow icon" class="icon arrow"-->
<!--                onclick="scrollToSection('#footer')">-->

    </section>

    <footer id="footer">
        <div class="footer-content">
            <h3> I.Arab Portfolio</h3>

            <ul class="socials-footer">
                <li><a href="https://facebook.com" target="_blank" class="fab fa-facebook-f"></a></li>
                <li><a href="https://instagram.com" target="_blank" class="fab fa-instagram"></a></li>
                <li><a href="https://twitter.com" target="_blank" class="fab fa-twitter"></a></li>
                <li><a href="https://teams.microsoft.com" target="_blank" class="fab fa-microsoft"></a></li>
            </ul>

            <div class="footer-menu">
                <ul class="f-menu">
                    <li><a href="/views/home.view.php">Home</a></li>
                    <li><a href="#about">Over mij</a></li>
                    <li><a href="/views/contact.view.php">Contact</a></li>
                    <li><a href="/posts">Blog posts</a></li>
                    <li><a href="#portfolio">Projects</a></li>
                </ul>

            </div>

        </div>
>

    </footer>
    <script src="/views/js/myScript.js"></script>
</body>


</html>

