<!DOCTYPE html>
<html>
    <head>
        <title>Gudkov</title>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="static/css/likely.css">
        <link rel="stylesheet" href="static/css/fotorama.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/cupertino/jquery-ui.css">
        <link rel="stylesheet" href="static/vendors/FancySelect/fancySelect.css" type="text/css">
        <link rel="icon" href="ico.ico.png" sizes="16x16">
        <link rel="stylesheet" href="static/css/style.css" type="text/css">
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image" content="path/to/картинка для фэйсбучных шэров" />
    </head>
    <body>

        <?php include "header.php";?>

        <?php
            if(file_exists(basename('.' . $_SERVER['REQUEST_URI'] . '.php'))) {
                include (basename('.' . $_SERVER['REQUEST_URI'] . '.php'));
            }
        ?>

        <?php include "footer.php";?>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <script src="static/vendors/FancySelect/fancySelect.js"></script>
        <script src="static/js/likely.js"></script>
        <script src="static/js/fotorama.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="static/js/script.js" type="text/javascript"></script>

    </body>
</html>