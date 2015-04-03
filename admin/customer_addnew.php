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
        <script type="text/javascript" src="js/validateform.js"></script>
    </head>
    <?php
    include_once './inc_header.php';
    ?>
    <form action="process/customer.php?do=add_new" method="post" onsubmit="return validate()">
        <table class="table hovered">
            <tr>
                <th>
                    Email
                </th>
                <td>
                    <input type="enail" id="emailInput" value="" name="email" />
                </td>
            </tr>
            <tr>
                <th>
                    Name
                </th>
                <td>
                    <input type="text" id="name" value="" name="name" />
                </td>            
            </tr>
            <tr>
                <th>
                    Phone Number
                </th>
                <td>
                    <input type="number" id="phone" value="" name="phone" />
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
            msg += validateRequire("emailInput");
            msg += validateEmail("emailInput");
            msg += validateRequire("name");
            msg += validateRequire("phone");
            
            if (msg != "") {
                $("#error-msg").html(msg);
                return false;

            } else {
                return true;
            }
        }
    </script> 

    <?php
    include_once './inc_footer.php';
    ?>