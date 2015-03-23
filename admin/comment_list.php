<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';

$p = get("p");
if ($p < 1) {
    $p = 1;
}

$count_query = "SELECT COUNT(*) AS cnt FROM `comment`";
$count_result = execute_query($count_query);
$count_row = mysqli_fetch_assoc($count_result);
//echo $count_row["cnt"];

$max_page = ceil($count_row["cnt"] / PAGE_ROW);
if ($p > $max_page) {
    $p = $max_page;
}
// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `comment`" . createLimitForPaging($p);

// mysql
$result = execute_query($query1);
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
<div class="paging pagination">
    <ul>
        <li class="prev"><a href="comment_list.php?p=<?php echo $p - 1; ?>"><i class="icon-previous"></i></a></li>

        <?php for ($i = 1; $i <= $max_page; $i++) {  
            if ($i == $p) { ?>
                <li class="active"><a href="comment_list.php?p=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php } else {
            ?>
        <li><a href="comment_list.php?p=<?php echo $i ?>"><?php echo $i ?></a></li>
        <?php } } ?>

            <li class="next"><a href="comment_list.php?p=<?php echo $p + 1; ?>"><i class="icon-next"></i></a></li>
    </ul>
</div>

<table class="table hovered">
    <tr>
        <th>Comment ID</th>
        <th>Product ID</th>
        <th>Email</th>
        <th>Title</th>
        <th>Content</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tr>
            <td><?php echo $row["comment_id"] ?></td>
            <td><?php echo $row["product_id"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["title"] ?></td>
            <td><?php echo $row["content"] ?></td>
            <td><a href="comment_edit.php?commentid=<?php echo $row["comment_id"] ?>">Edit</a></td>
            <td><a href="process/comment.php?do=delete&commentid=<?php echo $row["comment_id"] ?>" onclick="return confirm('Are you sure to delete this Comment?')">X</a></td>
        </tr>
    <?php } ?>
</table>

<a href="comment_addnew.php">Add new Comment</a>
<?php
include_once './inc_footer.php';
?>