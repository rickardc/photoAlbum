<?php
    session_start();
    if (!isset($_SESSION['index'])) {
        $_SESSION['index'] = 3;
    }

    ?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Photo Album - Upload Photo" />
        <meta name="keywords" content="photo, album, uploader" />
        <meta name="author" content="Chris Rickard" />
        <title>Photo Album - Upload Photo</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>

    <body>
        
        <?php
            require('menu.php')
        ?>

        <?php


            if (isset($_POST['Previous']) and $_SESSION['index'] > 3) {
                $_SESSION['index']--;
            } elseif(isset($_POST['Previous']) and $_SESSION['index'] == 3){
                $_SESSION['index'] = 11;
            }

            if (isset($_POST['Next']) and $_SESSION['index'] < 11) {
                $_SESSION['index']++;
            } elseif(isset($_POST['Next']) and $_SESSION['index'] == 11){
                $_SESSION['index'] = 3;
            }

            // display all photos in the img folder
            $dir = "img/";
            $files = array_diff(scandir($dir), array('a' => '.', '..', '.DS_Store'));

            echo "<img src='img/" . $files[$_SESSION['index']] . "' alt='photo' height='600'>";
            ?>

        <br>
        <br>

        <form method="post">
        <input type="submit" name="Previous"
                value="Previous"/>
         
        <input type="submit" name="Next"
                value="Next"/>
    </form>

    </body>

</html>