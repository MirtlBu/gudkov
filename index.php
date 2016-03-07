<!DOCTYPE html>
<html>
    <head>
        <title>Gudkov</title>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:500,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/static/css/likely.css">
        <link rel="stylesheet" href="/static/css/fotorama.css">
        <link rel="stylesheet" href="/static/vendors/FancySelect/fancySelect.css" type="text/css">
        <link rel="icon" href="ico.ico.png" sizes="16x16">
        <link rel="stylesheet" href="/static/css/style.css" type="text/css">
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <?php include "header3.php";?>

        <?php
            if(file_exists(basename('.' . $_SERVER['REQUEST_URI'] . '.php'))) {
                include (basename('.' . $_SERVER['REQUEST_URI'] . '.php'));
            }
            else {
                include "golosuem.php";
                include "modal3.php";
            }
        ?>

        <?php include "footer.php";?>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <script src="/static/vendors/FancySelect/fancySelect.js"></script>
        <script src="/static/js/likely.js"></script>
        <script src="/static/js/fotorama.js"></script>
        <script src="/static/js/script.js" type="text/javascript"></script>

    </body>
</html>