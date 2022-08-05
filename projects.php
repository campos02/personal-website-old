<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/projects.css">
        <title>Projects</title>
        <meta name="description" content="Projects I've done and their descriptions">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://campos02.me/projects">
        <meta property="og:title" content="Projects">
        <meta property="og:description" content="Projects I've done and their descriptions">
    </head>
    <body class="body-dark-mode">
        <div class="wrapper">
            <?php require('header.php')?>
            <p class="side-padding">Some projects I've done over time, their repositories can be found at my
            <a href="https://github.com/campos02" target="_blank">GitHub</a> profile.</p>
            <div class="projects side-padding">
                <div class="project">
                    <div class="title-and-image">
                        <h4>UWPMessengerClient</h4>
                        <img class="uwpmsn-img" src="images/loginscreen.jpg" alt="UWPMessengerClient login screen"/>
                    </div>
                    <div class="project-description">
                        <p>
                            A UWP MSNP client. As stated in the README it's possible to choose between MSNP12 
                            and MSNP15. Managing your contact list and chatting are implemented in both versions, 
                            as well as features like nudges(no window shaking, just a notification) and ink.
                        </p>
                        <p>
                            MSNP was the procotol used by MSN Messenger, protocol versions mentioned above 
                            especifically were used by versions 7.5 and 8.5 of the program, respectfully. 
                            Though Messenger has been dead for years now, there's a server called Escargot that
                            implements those MSNP versions and more, thus reviving both official and
                            third-party clients, e.g. this one.
                        </p>
                        <p>
                            This was more of an MSNP and UWP learning project, as I was interested in learning 
                            both when I made it. There's no great practical use to it due to the fact that it's 
                            Windows-only and the only compatible version that doesn't have a better-functioning 
                            official client already is Windows for ARM, but even that is used by very few people.
                        </p>
                        <p>
                            The project was made in C#.
                        </p>
                    </div>
                </div>
                <div class="project">
                    <div class="title-and-image">
                        <h4>VerificarMudancasNoQ</h4>
                        <img class="verificar-q-img" src="images/verificarqconfig.png" alt="VerificarMudancasNoQ config screen"/>
                    </div>
                    <div class="project-description">
                        <p>
                            Basically a webscraper and page monitor. A sound is played everytime changes are 
                            detected in a page over time. It sits in the system tray and can be configured by 
                            editing its .config file or by using its configuration screen, which can be seen 
                            in the image above.
                        </p>
                        <p>
                            It was pretty useful to know when the teachers posted some grade in my school's 
                            website, which was where it was designed to scrape pages from. The site isn't used 
                            anymore by the school, having been replaced by a more advanced one, so this project 
                            doesn't have much use now.
                        </p>
                        <p>
                            This version was made in C# as well, using WPF for its graphical interface.
                        </p>
                    </div>
                </div>
            </div>
            <?php require('footer.php')?>
        </div>
    </body>
</html>
