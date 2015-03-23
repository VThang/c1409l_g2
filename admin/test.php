<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/metro-bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/global_admin.css" />
        <link rel="stylesheet" type="text/css" href="css/iconFont.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="js/jquery.widget.min.js"></script>
        <script type="text/javascript" src="js/metro.min.js"></script>
    </head>
    <?php
    include_once './inc_header.php';
    ?>
    <body>
        <form method="post" action="email/email_invoice.php">
            Email: <input name="email" id="email" type="text" /><br />

            Message:<br />
            <textarea name="message" id="message" rows="15" cols="40"></textarea><br />

            <input type="submit" value="Submit" />
        </form>

    </body>
</html>