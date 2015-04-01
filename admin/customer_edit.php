<?php
include_once './process/_inc.php';
include_once './inc_checklogin.php';


$customerid = get("customerid");

$view_query = "SELECT * FROM `customer` WHERE `customer_id`='$customerid'";
$view_result = execute_query($view_query);

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
    <form action="process/customer.php?do=update&customerid=<?php print_r($customerid); ?>" method="post">
        <table class="table hovered">
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" id="email"
                           value="<?php echo $view_row["email"] ?>" /></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" id="name"
                           value="<?php echo $view_row["name"] ?>" /></td>
            </tr>        
            <tr>
                <th>Phone</th>
                <td><input type="text" name="phone" id="phone"
                           value="<?php echo $view_row["phone"] ?>" /></td>
            </tr>
            <tr>
                <th><input class="info" type="submit" value="Update" /></th>
            </tr>
        </table>
    </form>
    <?php
    include_once './inc_footer.php';
    ?>