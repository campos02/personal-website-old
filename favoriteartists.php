<?php require('usedatabase.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/favoriteartists.css">
        <title>Favorite artists</title>
        <meta name="description" content="My favorite artists along with my favorite albums from them">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://campos02.me/favoriteartists">
        <meta property="og:title" content="Favorite artists">
        <meta property="og:description" content="My favorite artists along with my favorite albums from them">
    </head>
    <body class="body-dark-mode">
        <div class="wrapper">
            <?php require('header.php')?>
            <div class="artists side-padding">
                <?php
                try
                {
                    // Create a new instance to use the database
                    $database = new UseDatabase();
                }
                catch (Exception $e)
                {
                    echo "Failed to connect to the database";
                    return;
                }
                ?>
                <div class="listening">
                    <h3>Currently listening to*:</h3>
                    <ul>
                        <?php
                        // Add listening artists to list
                        $artists = $database->selectListeningArtists();
                        foreach($artists as $artist)
                        {
                            echo '<li>' . $artist['artist'] . '</li>';
                        }
                        ?>
                    </ul>
		        <p>And more...</p>
                </div>
                <div class="other-artists">
                    <h3>Some other artists I like*:</h3>
                    <ul>
                        <?php
                        // Add other artists to list
                        $artists = $database->selectOtherArtists();
                        foreach($artists as $artist)
                        {
                            echo '<li>' . $artist['artist'] . '</li>';
                        }
                        ?>
                    </ul>
                    <h4 class="medium-small-font">*Not always up to date</h4>
                </div>
            </div>
            <div class="albums-section">
                <h3 class="centered-text">Favorite albums from those:</h3>
                <div class="all-albums">
                    <?php
                        $artists = $database->selectArtistsWithAlbums();
                        foreach($artists as $artist)
                        {
                            // List each artist's albums
                            if ($albums = $database->selectAlbums($artist['artist']))
                            {
                                echo '<div class="artist-albums"><p>' . $artist['artist'] . ':</p>' . '<ul>';
                                foreach($albums as $album)
                                {
                                    echo '<li>' . $album['album'] . '</li>';
                                }
                                echo '</ul></div>';
                            }
                        }
                    ?>
                </div>
            </div>
            <?php require('footer.php')?>
        </div>
    </body>
</html>
