<?php
require_once './process/_inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/admin">
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="css/login_admin.css" />
        <link rel="stylesheet" type="text/css" href="css/metro-bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/iconFont.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="js/jquery.widget.min.js"></script>
        <script type="text/javascript" src="js/metro.min.js"></script>
    </head>
    <body class="metro">
        <main>
            <form class="" action="process/admin.php?do=login" method="post">
                <table class="table hovered login">
                    <thead>
                        <tr>
                            <th colspan="2" >
                                ADMIN Control Panel
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Username</th>
                            <td><input type="text" name="username" /></td>
                        </tr>

                        <tr>
                            <th>Password</th>
                            <td><input type="password" name="password" /></td>
                        </tr>

                        <tr>
                            <td colspan="2" style="text-align: center;"><input class="info" type="submit" value="Login" /></td>
                        </tr>

                        <tr>
                            <th colspan="2">
                                <?php
                                if (get("error") == 1) {
                                    echo "Đăng nhập không thành công";
                                } else if (get("error") == 2) {
                                    echo "Bạn phải đăng nhập mới vào được";
                                } else if (get("error") == 3) {
                                    echo "Bạn đã ra khỏi hệ thống";
                                }
                                ?>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </form>
        </main>
    </body>
</html>