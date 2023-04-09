<?php
    session_start();
    if (!isset($_SESSION['index'])) {
        $_SESSION['index'] = 0;
    }

    ?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Photo Album" />
        <meta name="keywords" content="photo, album, uploader" />
        <meta name="author" content="Chris Rickard" />
        <title>Photo Album - Upload Photo</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>

    <body>
        
        <?php
            ini_set('display_errors', 1);
            require 'mydb.php';
            require_once 'constants.php';
            require('menu.php');


            if (isset($_POST['Previous']) and $_SESSION['index'] > 0) {
                $_SESSION['index']--;
            } elseif(isset($_POST['Previous']) and $_SESSION['index'] == 0){
                $_SESSION['index'] = 11;
            }

            if (isset($_POST['Next']) and $_SESSION['index'] < 3) {
                $_SESSION['index']++;
            } elseif(isset($_POST['Next']) and $_SESSION['index'] == 3){
                $_SESSION['index'] = 3;
            }
            // get photos from database
            $my_db = new MyDB();
		    $photos = $my_db->getAllPhotos();

            // add photos to an array
            $photo_array = array();
            foreach ($photos as $photo) {
                array_push($photo_array, $photo->getS3Reference());
            }



            // display all photos in the img folder
            //$dir = "img/";
            //$files = array_diff(scandir($dir), array('a' => '.', '..', '.DS_Store'));

            echo "<img src='" . $photo_array[$_SESSION['index']] . "' alt='photo' height='600'>";
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