<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/index.css">
        <title>campos' website</title>
        <meta name="description" content="My personal website">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://campos02.me/">
        <meta property="og:title" content="campos' website">
        <meta property="og:description" content="My personal website">
    </head>
    <body class="body-dark-mode">
        <div class="wrapper">
            <?php require('header.php')?>
            <div class="centered-text">
                <p>Hey, I'm campos and this is my personal website.</p>
                <div class="bio">
                    <h2>A short bio</h2>
                    <p>I'm a 20 year old brazilian interested in programming, electronics and music.</p>
                </div>
            </div>
            <?php require('footer.php')?>
        </div>
    </body>
</html>
