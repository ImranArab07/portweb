<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webportfolio</title>
    <link rel="stylesheet" href="/views/css/myStyle.css">

</head>
<!--<body>-->
<header>
    <nav id="desktop-nav">
        <div class="logo">Imran Arab</div>
        <div>

        <ul class="nav-links">
            <li class="hideOnMobile"><a href="/home">Home</a></li>
            <li class="hideOnMobile"><a href="#about">Over mij</a></li>
            <li class="hideOnMobile"><a href="#portfolio">Portfolio</a></li>
            <li class="hideOnMobile"><a href="#vaardigheden">Vaardigheden</a></li>
            <li class="hideOnMobile"><a href="/contact">Contact </a></li>
            <li class="hideOnMobile"><a href="/posts">Posts</a></li>
            <li class="hideOnMobile"><a href="/post">New post</a></li>

            <!--            <li class="menu-button" onclick=showSidebar()> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>-->
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
            <p class="section__text__p1"> Hello I'm</p>
            <h1 class="title">Imran Arab</h1>
            <p class="section__text__p2">Software Developer</p>
            <div class="btn-container">
            <button class="btn btn-color-2" onclick="window.open('/views/assets/cv imran.docx.pdf')">Download cv</button>
            <button class="btn btn-color-1" onclick="location.href='./#contact'">Contact info</button>
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
                       <h3>Experience</h3>
                        <p> 3 Months <br> Frontend Developer</p>
                    </div>
                    <div class="details-container">
                        <img src="/views/assets/educIcon.jpg" alt="Education icon" class="icon">
                        <h3>Education</h3>
                        <p> Havo Diploma <br> (current study) AD Software Development</p>
                    </div>
                </div>
                <div class="text-container">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
        <img
                src="/views/assets/arrow.jpg"
                alt="arrow icon" class="icon arrrow"
                onclick="scrollToSection('#vaardigheden')">
    </section>
    <section id="vaardigheden">
       <p class="section__text__p1">Explore my</p>
        <h1 class="title">Vaardigheden</h1>
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
            </div>
        </div>
        <img src="/views/assets/arrow.jpg" alt="arrow icon" class="icon arrrow" onclick="scrollToSection('#portfolio')">
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
            </div>
        <div class="details-container color-container">
            <div class="article-container">
                <img
                        src="/views/images/Project2.jpg"
                        alt="Portfolio project 2"
                        class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">Project Two</h2>
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
        </div>
        <div class="details-container color-container">
            <div class="article-container">
                <img
                        src="/views/images/Project3.jpg"
                        alt="Portfolio project 3"
                        class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">Project three</h2>
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
        </div>
            </div>
        </div>
        <img
                src="/views/assets/arrow.jpg"
                alt="arrow icon" class="icon arrrow"
                onclick="scrollToSection('#portfolio')">

    </section>

    <script src="/views/js/myScript.js"></script>
</body>


</html>

