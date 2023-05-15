<?php
// clearstatcache();

session_cache_limiter('none');
header('Cache-control: max-age='.(60*60*24*1));
header('Expires: '.gmdate(DATE_RFC1123,time()+60*60*24*1));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>&Oacute;leo Amigo</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style></style>
    </head>
    <body>
        <img id="bg" src="img/bg.jpg" />
        <img id="logo" src="img/logo.png" />
        <img id="estamos-trabalhando" src="img/estamos-trabalhando.png" />
        <img id="bio" src="img/bio.png" />
        <img id="qr-code" src="img/qr-code.gif" />

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>