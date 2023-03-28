<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Photo Album - Upload Photo" />
        <meta name="keywords" content="photo, album, uploader" />
        <meta name="author" content="Chris Rickard" />
        <title>Photo Album - Photo Lookup</title>
        <link href="styles/style.css" rel="stylesheet">


    </head>

    <body>

        <?php
        require('menu.php')
        ?>

        <p> add some text here ok now main branch has something new </p>
        

        <form method="post" >
        <fieldset><legend>Photo Search</legend>
            <p class="row">	<label for="title">Photo title: </label>
                <input type="text" name="title" id="title" />
            </p>

            <p class="row">	<label for="keywords">Keyword: </label>
                <input type="text" name="keywords" id="keywords" />
            </p>

            <p class="row">	<label for="from_date">From date: </label>
                <input type="date" name="from_date" id="from_date" />
            </p>

            <p class="row">	<label for="to_date">To date: </label>
                <input type="date" name="to_date" id="to_date" />
            </p>

                <input type="submit" value="Search" name="submit"/> 

        </fieldset>
        </form>

    </body>

</html>