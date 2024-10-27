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
<!---->
<!--        <ul class="sidebar">-->
<!--            <li onclick="hideSidebar()"> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>-->
<!--            <li><a href="index.view.php">Home</a></li>-->
<!--            <li><a href="login.view.php">Login</a></li>-->
<!--            <li><a href="project.view.php">Portfolio</a></li>-->
<!--            <li><a href="vaardigheden.view.php">Vaardigheden</a></li>-->
<!--            <li><a href="contact.view.php">Contact</a></li>-->
<!--            <li><a href="post.view.php">New post</a></li>-->
<!---->
<!---->
<!--        </ul>-->
        <ul class="nav-links">
            <li class="hideOnMobile"><a href="/home">Home</a></li>
            <li class="hideOnMobile"><a href="/login">Login</a></li>
            <li class="hideOnMobile"><a href="/portfolio">Portfolio</a></li>
            <li class="hideOnMobile"><a href="/vaardigheden">Vaardigheden</a></li>
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
                <li><a href="/login" onclick="toggleMenu()">Login</a></li>
                <li><a href="/portfolio" onclick="toggleMenu()">Portfolio</a></li>
                <li><a href="/vaardigheden" onclick="toggleMenu()">Vaardigheden</a></li>
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
        </div>
    </section>
<script src="/views/js/myScript.js"></script>
</body>

</html>
<!--<script>-->
<!--    function showSidebar(){-->
<!--        const sidebar = document.querySelector('.sidebar')-->
<!--        sidebar.style.display = 'flex'-->
<!--    }-->
<!--    function hideSidebar(){-->
<!--        const sidebar = document.querySelector('.sidebar')-->
<!--        sidebar.style.display = 'none'-->
<!--    }-->
<!--</script>-->
<!--</header>-->

<!--<! Main layout with sidebar and content -->
<!--<div class="container">-->
<!---->
    <!-- Sidebar -->
<!--    <aside class="sidebar">-->
<!--        <h2>Categorieen</h2>-->
<!--        <ul>-->
<!--            <li><a href="#">post geschiedenis</a></li>-->
<!--            <li><a href="#">Andere posts</a></li>-->
<!---->
<!--        </ul>-->
<!--    </aside>-->

    <!-- Main content area using Grid -->
<!--    <main class="main">-->
<!--        <section class="content" id="content1">-->
<!--            <h2>Content 1</h2>-->
<!--            <p>Mijn portfolio</p>-->
<!--        </section>-->
<!--        <section class="content" id="content2">-->
<!--            <h2>Content 2</h2>-->
<!--            <p>Dit is het tweede inhoudsgebied.</p>-->
<!--        </section>-->
<!---->
<!---->
<!--    </main>-->
<!---->
<!--</body>-->
<!--<script src="js/myScript.js"></script>-->
<!--</html>-->


