<!DOCTYPE html>

<html lang="en">

    <?php
    session_start();
    if (!isset($_SESSION['index'])) {
        $_SESSION['index'] = 3;
    }

    ?>

    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Photo Album - Upload Photo" />
        <meta name="keywords" content="photo, album, uploader" />
        <meta name="author" content="Chris Rickard" />
        <title>Photo Album - Upload Photo</title>
        <link href="styles/style.css" rel="stylesheet">


    </head>

    <body>

        <h1>Photo Album</h1>
        <h3>Student ID: 6512178</h3>
        <h3>Name: Christopher Rickard</h3>

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

            echo "<p> files index: " . $_SESSION['index'] . "</p>";
            echo "<img src='img/" . $files[$_SESSION['index']] . "' alt='photo' height='650'>";
            ?>

        <br>
        <br>

        <form method="post">
        <input type="submit" name="Previous"
                value="Previous"/>
         
        <input type="submit" name="Next"
                value="Next"/>
    </form>

    <br>
    <br>
    <a href="photouploader.php">Photo Uploader</a>
    <a href="photolookup.php">Photo Lookup</a>

    </body>

    

</html>