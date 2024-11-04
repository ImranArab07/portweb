<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webportfolio</title>
    <link rel="stylesheet" href="/views/css/myStyle.css">
    <link rel="stylesheet" href="/views/css/mediaqueries.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>

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
            <div class="hamburger-icon" onclick="toggleMenu()">
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
            <p class="section__text__p1"> Hello I'm</p>
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
                            <p> Ik ben nu 3 maanden bezig met Frontend en Backend Development.
                                Ik begon met de opleiding zonder kennis over programmeren.
                                Het proces van het leren van de programeer talen en het begrijpen ervan ging moeizaam aan het begin.
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
                            <p>Ik heb op het Baken Park Lyceum havo gedaan.
                                Na 5 jaar heb ik mijn havo diploma gehaald.
                                Ik heb daarna voor de studie AD Software Development gekozen en dat is de nu mijn huidige studie.
                                Deze studie duurt 2 jaar als ik het in een keer haal, Ik was eerst van plan om bouwkunde te doen, maar ik heb daarna toch gekozen voor Software Development, omdat ik erachter kwam dat je voor bouwkunde goed in natuurkunde moest zijn.
                                Ik heb Natuurkunde maar 2 jaar gedaan in mijn middelbare school studie, dus vandaar dat ik niet voor Bouwkunde heb gekozen. </p>
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
        <div class="vaardigheden-details-container">
            <div class="about-containers">
            <div class="details-container">
                <h2 class="vaardigheden-sub-title">Frontend Development</h2>
                <div>
                    <h3>HTML</h3>
                    <div class="progress-bar">
                        <div class="progress" data-progress="60">60%</div>
                    </div>
                </div>
                <div>
                    <h3>CSS</h3>
                    <div class="progress-bar">
                        <div class="progress" data-progress="50">50%</div>
                    </div>

                </div>
                <div>
                    <h3>JavaScript</h3>
                    <div class="progress-bar">
                        <div class="progress" data-progress="40">40%</div>
                    </div>
                </div>
                <div class="lees-meer-container">
                    <button class="lees-meer-btn" onclick="showExtraContent(this)">Lees meer</button>
                </div>

                <!-- Extra content to be shown on button click -->
                <div class="extra-content">
                    <p> <strong> HTML:</strong> Het begin, Toen ik aan mijn opleiding begon, zijn me begonnen met het leren van Html.
                        Ik vond dit toch wel makkelijk om te leren alhoewel ik wel eerst achter liep met programmeren omdat ik niet echt de motivatie had tijdens de lessen,
                        vind ik wel dat ik html nu echt wel goed beheers. Dit komt ook door dat we dit project hebben gekregen om een website te bouwen dat heeft me ook geholpen bij het kennen en kunnen toepassen van html.
                        Ook heb ik veel geleerd op Codecademy. <br> <br> <br> <strong> CSS:</strong> Na HTML zijn we gaan leren hoe we onze website moeten stijlen en dat doe je met CSS.
                        Ik vind Css en Javascript toch wel het leukste op te leren en gebruiken.
                        We zijn het verschil gaan leren van Flexbox en Grid. Ik vind dat ik CSS ook bovengemiddeld beheers,
                        ik heb het toch wat lager gezet dan html omdat bij css voor elke type selector zoveel soorten pseudo elementen en klassen zijn waardoor ik dat ik nog lang niet altijd weet welke elementen ik moet gebruiken.
                        <br> <br> <br> <strong>JavaScript:</strong> Javascript is de laatste Frontend taal die we hebben gehad. We hebben JavaScript heel kort behandeld en dat is ook deels de reden dat ik erg achterliep.
                        Ik wist bijna helemaal niks over Javascript totdat ik het ging gebruiken voor deze website.
                        Dat is de reden dat ik JavaScript nog niet goed ken en kan toepassen.
                        Wel vind ik dat ik na het gebruiken van Javascript voor deze Website het een van de leukste programeer talen omdat je er echt veel mee kan doen.
                    </p>
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
                        <div class="progress" data-progress="50">50%</div>
                    </div>
                </div>
                <div>
                    <h3>Git</h3>
                    <div class="progress-bar">
                        <div class="progress" data-progress="30">30%</div>
                    </div>
                </div>
                <div class="lees-meer-container">
                    <button class="lees-meer-btn" onclick="showExtraContent(this)">Lees meer</button>
                </div>
                <div class="extra-content">
                    <p>
                        <strong>PHP:</strong> De eerste programeer taal die we hebben geleerd voor de Backend van de website.
                        Ik heb hier aan het begin helemaal niks van gesnapt en het werd echt te veel voor mij.
                        Ik kreeg na een tijdje hier wel het besef van ik begin echt achter te lopen er moet wat gaan veranderen.
                        Ik ben meer gaan opzoeken en proberen en heb meer kennis gemaakt met alle porgrameer talen die ik tot nu toe heb gehad en meer gaan verdiepen in PHP.
                        Na een week of twee begon ik PHP beter te snappen en ook gebruik te maken van PHP in mijn website.
                        Ook hebben we kennis gemaakt met het MVC-Model waarbij het gebruik maken van PHP ook heel essentieel was.
                        Daarom heb ik voor php gekozen dat ik het voor de helft beheers want ik kan nog lang niet alles, maar ben we goed op weg.
                        <br><br><br> <strong>MySQL:</strong> MySQL was voor mij een verandering.
                        Nadat ik bij PHP het besef kreeg om inzet te tonen en te verdiepen in de stof heb ik veel geleed over het maken van een database met MySQL.
                        Ik kan een database maken, bepalen wat erin komt, dingen erin veranderen zoals het veranderen van hoeveel characters erin mag zitten, ik kan in de nieuwe gemaakte database een table toevoegen.
                        In die table kunnen we dingen zetten voor bijvoorbeeld een formulier die we dan linken aan deze database.
                        Ik heb bij mySQL echt me best gedaan om zoveel mogelijk erover te zoeken. <br><br><br> <strong>Git:</strong> Git is voor mij nog niet helemaal helder.
                        Ik wist eigenlijk niet waarom we een branch toevoegde aan onze website.
                        Sinds het Einde nadert van de inlevering van mijn project heb ik even opgezocht wat het doet en waar het bij helpt bij de backend.
                        Git doet niet per se wat voor de Code, maar je kan wel je wijzigingen die je heb verricht op een dag opslaan en bijhouden wat je heb gedaan.
                        Dit is bijvoorbeeld voor degene die jouw code wil inzien heel essentieel.
                        Door bijvoorbeeld een Git Repository aan te maken en je website daar aan te linken.
                        Kan je je code makkelijk doorsturen of het tonen door het public te maken of juist prive te houden door het private te maken.
                    </p>
                </div>
            </div>
        </div>
        <img src="/views/assets/arrow.jpg" alt="arrow icon" class="icon arrow" onclick="scrollToSection('#portfolio')">
    </section>


    <section id="portfolio">
        <p class="section__text__p1">Browse My Recent</p>
        <h1 class="title">Portfolio</h1>
        <h2> <em> Mijn Projecten: </em> </h2>

        <div class="experience-details-container">
            <div class="about-containers">
            <div class="details-container color-container" >
                <div class="article-container">
                    <img
                        src="/views/images/Project1.jpg"
                        alt="Portfolio project 1"
                        class="project-img"/>
                </div>
                <h2 class="experience-sub-title project-title">Professional Skills </h2>
                <p class="section__text__p1"> My first project is .... , Do you want to know more? Click on GitHub or live Demo to go to my project </p>
                <div class="btn-container">
                    <button class="btn btn-color-2 project-btn"
                            onclick="window.open('/views/assets/Profskills.pdf')">
                        Live Demo
                    </button>
                </div>
            </div>
        <div class="details-container color-container" >
            <div class="article-container">
                <img
                        src="/views/images/Project2.jpg"
                        alt="Portfolio project 2"
                        class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">SDD Document</h2>
            <p class="section__text__p1"> My Second project is .... , Do you want to know more? Click on GitHub or live Demo to go to my project </p>
            <div class="btn-container">
                <button class="btn btn-color-2 project-btn"
                        onclick="window.open('/views/assets/SDD.pdf')">
                    Live Demo
                </button>
            </div>
        </div>
        <div class="details-container color-container" >
            <div class="article-container">
                <img
                        src="/views/images/Project3.jpg"
                        alt="Portfolio project 3"
                        class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">Portfolio Website </h2>
            <p class="section__text__p1"> My Third project is .... , Do you want to know more? Click on GitHub or live Demo to go to my project </p>
            <div class="btn-container">
                <button class="btn btn-color-2 project-btn"
                        onclick="location.href='https://github.com/ImranArab07'">
                    Github
                </button>
            </div>
        </div>
            </div>
        </div>

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

