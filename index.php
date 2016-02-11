<!DOCTYPE html>
<html>
    <head>
        <title>Gudkov</title>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:500,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/static/css/social-likes_birman.css">
        <link rel="stylesheet" href="/static/vendors/FancySelect/fancySelect.css" type="text/css">
        <link rel="stylesheet" href="/static/css/style.css" type="text/css">
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <?php include "header.php";?>

            <?php
                if(file_exists(basename('.' . $_SERVER['REQUEST_URI'] . '.php'))) {
                    echo "<div class='main'>";
                    include (basename('.' . $_SERVER['REQUEST_URI'] . '.php'));
                }
                else {
                    echo "<div class='main main--fixed'>";
                    include "golosuem.php";
                    include "modal.php";
                }
            ?>
        </div>

        <center>
            <div id="map"></div>
        </center>

        <?php include "footer.php";?>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?=$apiKey;?>&signed_in=true&callback=gdMap.init"></script>
        <script src="/static/js/markerclusterer_compiled.js"></script>

        <script src="/static/vendors/FancySelect/fancySelect.js"></script>
        <script src="/static/js/social-likes.min.js"></script>
        <script src="/static/js/script.js" type="text/javascript"></script>

    </body>
</html>