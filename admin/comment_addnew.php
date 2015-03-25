<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
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
<form action="process/comment.php?do=add_new" method="post">
    <table class="table hovered">
        <tr>
            <th>
                Product ID
            </th>
            <td>
                <input type="text" value="" name="product_id" />
            </td>
        </tr>
        <tr>
            <th>
                Email
            </th>
            <td>
                <input type="text" value="" name="email" />
            </td>            
        </tr>
        <tr>
            <th>
                Title
            </th>
            <td>
                <input type="text" value="" name="title" />
            </td>            
        </tr>
        <tr>
            <th>
                Content
            </th>
            <td>
                <input type="text" value="" name="content" />
            </td>            
        </tr>
        <tr>
            <td>
                <input class="info" type="submit" value="Submit" />
            </td> 
            <td>
                <input type="reset" value="Cancel" />
            </td>
        </tr>
    </table>
</form>

<?php
include_once './inc_footer.php';
?>