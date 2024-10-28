
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webportfolio</title>
    <link rel="stylesheet" href="/views/css/myStyle.css">

</head>

<header>
    <nav id="desktop-nav">
        <div class="logo">Imran Arab</div>
        <div>
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
<!--<body>-->
<body>

<?php if (!empty($message)): ?>
<p><?php echo $message;?></p>
<?php endif; ?>

<?php if (!isset($postCreated) || !$postCreated): ?>
<form action="/post" method="post">

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
<?php endif; ?>
<script src="/views/js/myScript.js"></script>
</body>
</html>

