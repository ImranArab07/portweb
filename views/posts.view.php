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
                <li class="hideOnMobile"><a href="/portfolio">Portfolio</a></li>
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
                <li><a href="/Over mij" onclick="toggleMenu()">Over mij</a></li>
                <li><a href="/portfolio" onclick="toggleMenu()">Portfolio</a></li>
                <li><a href="#vaardigheden" onclick="toggleMenu()">Vaardigheden</a></li>
                <li><a href="/contact" onclick="toggleMenu()">Contact </a></li>
                <li><a href="/posts" onclick="toggleMenu()">Posts </a></li>
                <li><a href="/post" onclick="toggleMenu()">New post</a></li>

            </div>
        </div>
    </nav>
</header>

<body class="posts-page">
<section id="blog-posts">
    <h1 class="title">Blog Posts</h1>
    <?php if(!empty($posts)):?>
    <?php foreach ($posts as $post): ?>
        <div class="post-box">
            <h2><?php echo htmlspecialchars($post['title']); ?></h2>
            <p><?php echo htmlspecialchars($post['content']); ?></p>
            <div class="post-meta">
                <span>Author: <?php echo htmlspecialchars($post['author']); ?></span><br>
                <span>Published on: <?php echo htmlspecialchars($post['created_at']); ?></span>
            </div>
        </div>
    <?php endforeach; ?>
    <?php else: ?>
    <p> Geen posts gevonden</p>
    <?php endif; ?>
</section>
</body>