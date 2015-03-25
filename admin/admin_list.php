<?php
require './process/_inc.php';
require_once './inc_checklogin.php';
// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `admin`";

// mysql
$result = execute_query($query1);
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
    <table class="table hovered">
        <thead>
        <th>Admin Id</th>
        <th>Username</th>
        <th>Fullname</th>
        <th>Email</th>
    </thead>
    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row["adminID"] ?></td>
                <td><?php echo $row["Username"] ?></td>
                <td><?php echo $row["Fullname"] ?></td>
                <td><?php echo $row["Email"] ?></td>
                <td><a href="admin_edit.php?adminid=<?php echo $row["adminID"] ?>">Edit</a></td>
                <td><a href="process/admin.php?do=delete&adminid=<?php echo $row["adminID"] ?>" onclick="return confirm('Are you sure to delete this Admin?')">X</a></td>
            </tr>
        </tbody>
    <?php } ?>	
</table>

<a href="admin_addnew.php">Add new</a>

<?php
include_once 'inc_footer.php';
?>