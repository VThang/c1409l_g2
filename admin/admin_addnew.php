<?php
require './process/_inc.php';
require_once './inc_checklogin.php';
include_once './inc_header.php';
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
        <script type="text/javascript" src="js/validateform.js"></script>
    </head>
    <?php
    include_once './inc_header.php';
    ?>
    <form action="process/admin.php?do=add_new" method="post" onsubmit="return validate()">
        <table class="table hovered">
            <tr>
                <th>
                    Username
                </th>
                <td>
                    <input type="text" id="username" value="" name="username" />
                </td>
            </tr>
            <tr>
                <th>
                    Password
                </th>
                <td>
                    <input type="password" id="password" value="" name="password" />
                </td>            
            </tr>
            <tr>
                <th>
                    Fullname
                </th>
                <td>
                    <input type="text" id="fullname" value="" name="fullname" />
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
            msg += validateRequire("username");
            msg += validateRequire("password");
            msg += validateRequire("fullname");

            if (msg != "") {
                $("#error-msg").html(msg);
                return false;

            } else {
                return true;
            }
        }
    </script>




    <?php
    include_once 'inc_footer.php';
    ?>