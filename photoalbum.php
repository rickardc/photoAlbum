<!DOCTYPE html>

<html lang="en">

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

        <br>
        <br>
        
        <?php

        $index = 0;

        if (isset($_POST['Previous'])) {
            $index += 1;
        }

        if (isset($_POST['Next'])) {
            $index -= 1;
        }

        // display all photos in the img folder
        $dir = "/img/";
        $files = array_diff(scandir($dir), array('.', '..'));

        echo "<img src='/img/" . $files[$index] . "' alt='photo' width='800'>";
        print_r(scandir($dir));
        print_r($files);
        ?>

        <form method="post">
        <input type="submit" name="Previous"
                value="Previous"/>
         
        <input type="submit" name="Next"
                value="Next"/>
    </form>

        <a href="photouploader.php">Photo Uploader</a>
        <a href="photolookup.php">Photo Lookup</a>

    </body>

</html>