<?php
require './process/_inc.php';
require_once './inc_checklogin.php';

$adminid = get("adminid");

$view_result = execute_query("SELECT * FROM `admin` WHERE `adminID` ='$adminid'");

if (mysqli_num_rows($view_result) > 0) {
    $view_row = mysqli_fetch_assoc($view_result);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin ControlPanel</title>        
        <meta content="../images/favicon128.png" itemprop="image">
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
    <form action="process/admin.php?do=update&adminid=<?php print_r($adminid) ?>" method="post">
        <table class="table hovered">
            <tr>
                <th>Username</th>
                <td><input type="text" name="username" id="username"
                           value="<?php echo $view_row["Username"] ?>" /></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input type="password" name="password" id="password"
                           value="<?php echo $view_row["Password"] ?>" /></td>
            </tr>


            <tr>
                <th>Fullname</th>
                <td><input type="text" name="fullname" id="fullname"
                           value="<?php echo $view_row["Fullname"] ?>" /></td>
            </tr>

            <tr>
                <th colspan="2"><input class="info" type="submit" value="Cập nhật" /></th>

            </tr>
        </table>
    </form>
    <?php
    require 'inc_footer.php';
    ?>