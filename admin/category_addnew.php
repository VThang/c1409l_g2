<?php
require './process/_inc.php';
require_once './inc_checklogin.php';
include_once './inc_header.php';
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
        <script type="text/javascript" src="js/validateform.js"></script>
    </head>
    <?php
    include_once './inc_header.php';
    ?>
    <form action="process/category.php?do=add_new" method="post" onsubmit="return validate()">
        <table class="table hovered">
            <tr>
                <th>
                    Category Name
                </th>
                <td>
                    <input type="text" id="category_name" value="" name="cate_name" />
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
    
    <script type="text/javascript">
        function validate() {
            msg = "";
            msg += validateRequire("category_name");

            if (msg != "") {
                $("#error-msg").html(msg);
                return false;

            } else {
                return true;
            }
        }
    </script>
    
    <?php
    require 'inc_footer.php';
    ?>