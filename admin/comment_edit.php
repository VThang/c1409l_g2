<?php
include_once './process/_inc.php';
include_once './inc_checklogin.php';

$commentid = get("commentid");

$query = "SELECT * FROM `comment` WHERE `comment_id`='$commentid'";
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
    <form action="process/comment.php?do=update&commentid=<?php print_r($commentid); ?>" method="post">
        <table class="table hovered">
            <tr>
                <th>Product ID</th>
                <td><input type="text" name="product_id" id="product_id" readonly
                           value="<?php echo $row["product_id"] ?>" /></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" id="email" readonly
                           value="<?php echo $row["email"] ?>" /></td>
            </tr>
            <tr>
                <th>Title</th>
                <td><input type="text" name="title" id="title"
                           value="<?php echo $row["title"] ?>" /></td>
            </tr>        
            <tr>
                <th>Content</th>
                <td><input type="text" name="content" id="content"
                           value="<?php echo $row["content"] ?>" /></td>
            </tr>
            <tr>
                <th colspan="2"><input class="info" type="submit" value="Update" /></th>
            </tr>
        </table>
    </form>
    <?php
    include_once './inc_footer.php';
    ?>