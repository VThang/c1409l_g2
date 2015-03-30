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
        <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
        <link rel="stylesheet" type="text/css" href="css/iconFont.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="js/jquery.widget.min.js"></script>
        <script type="text/javascript" src="js/metro.min.js"></script>
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <?php
    include_once './inc_header.php';
    ?>
    <main>
        <form action="email/email_admin_send.php" method="post">
            <table class="table hovered">
                <tr>
                    <th>
                        Email
                    </th>
                    <td>
                        <input type="email" name="email"/>
                    </td>
                </tr>
                <tr>
                    <th>
                        Subject
                    </th>
                    <td>
                        <input type="text" name="subject"/>
                    </td>
                </tr>
                <tr>
                    <th>
                        Title
                    </th>
                    <td>
                        <input type="text" name="title"/>
                    </td>
                </tr>
                <tr>
                    <th>
                        Message
                    </th>
                    <td>
                        <textarea name="message" id="message" rows="10" cols="80">
                        </textarea>
                        <script>
                            CKEDITOR.replace('message');
                        </script>   
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <input type="submit" class="info" />
                    </td>
                </tr>
            </table>
        </form>


    </main>
    <?php
    include_once './inc_footer.php';
    ?>