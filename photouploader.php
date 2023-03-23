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
        <?php
        require('menu.php')
        ?>

        <form method="post" >
        <fieldset><legend>Photo Details</legend>
            <p class="row">	<label for="title">Photo title: </label>
                <input type="text" name="title" id="title" />
            </p>

            <p class="row">	<label for="fileToUpload">Select a photo: </label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </p>

            <p class="row">	<label for="desc">Description: </label>
                <input type="text" name="desc" id="desc" />
            </p>

            <p class="row">	<label for="date">Date: </label>
                <input type="date" name="date" id="date" />
            </p>

            <p class="row">	<label for="keywords">Keywords: (seperated by a semicolon, e.g. keyword1; keyword2; etc.):</label>
                <input type="text" name="keywords" id="keywords" />
            </p>

                <input type="submit" value="Upload" name="submit"/> 

        </fieldset>
        </form>
        
        <br>
        <a href="photoalbum.php">Photo Album</a>
        <a href="photolookup.php">Photo Lookup</a>

        <?php

            function sanitise_input($data){ //stat sanitise function
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
            ?>
            
    </body>

</html>