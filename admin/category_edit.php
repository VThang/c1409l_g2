<?php
require './process/_inc.php';
require_once './inc_checklogin.php';

$categoryid = get("categoryid");

$query = "SELECT * FROM `category` WHERE `cate_id`='$categoryid'";
$result = execute_query($query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
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
    ?>
<form action="process/category.php?do=update&categoryid=<?php print_r($categoryid); ?>" method="post">
    <table class="table hovered">
        <tr>
            <th>Category Name</th>
            <td><input type="text" name="cate_name" id="cate_name"
                       value="<?php echo $row["cate_name"] ?>" /></td>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" value="Update" /></th>
        </tr>
    </table>
</form>

<?php
require 'inc_footer.php';
?>
