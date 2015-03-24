<?php
require './process/_inc.php';
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

    $viewquery = "SELECT * FROM `config` WHERE `config_key` LIKE '%banner_home%'";
    $viewresult = execute_query($viewquery);
    $row = mysqli_fetch_assoc($viewresult);

    get_value_config('banner_home1');
    ?>

    <form action="process/config.php?do=update_headerlogo" method="post">
        <table class="table hovered">
            <tr>
                <th>Header logo</th>
                <td><input type="text"  name="logo_header"
                           value="<?php echo get_value_config('logo_header'); ?>" /></td>
            </tr>

            <tr>
                <th colspan="2"><input class="info" type="submit" value="Update" /></th>

            </tr>
        </table>
    </form>

    <form action="process/config.php?do=update_bannerfooter" method="post">
        <table class="table hovered">
            <tr>
                <th>Footer Banner</th>
                <td><input type="text"  name="banner_footer"
                           value="<?php echo get_value_config('banner_footer'); ?>" /></td>
            </tr>

            <tr>
                <th colspan="2"><input class="info" type="submit" value="Update" /></th>

            </tr>
        </table>
    </form>







    <?php
    include_once 'inc_footer.php';
    ?>