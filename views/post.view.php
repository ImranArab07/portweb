
<html lang="en">
<head>
<link rel="stylesheet" href="/views/css/myStyle.css">
</head>
<body>

<?php if (!empty($message)): ?>
<p><?php echo $message;?></p>
<?php endif; ?>

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
</body>
</html>

