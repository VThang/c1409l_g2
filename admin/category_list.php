<?php
require './process/_inc.php';
require_once './inc_checklogin.php';

$p = get("p");
if ($p < 1) {
    $p = 1;
}


// dem so ban ghi trong toan bo bang
$count_query = "SELECT COUNT(*) AS cnt FROM category";
$count_result = execute_query($count_query);
$count_row = mysqli_fetch_assoc($count_result);
//echo $count_row["cnt"];

$max_page = ceil($count_row["cnt"] / PAGE_ROW);

if ($p >$max_page) {
    $p = $max_page;
}
// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `category`" . createLimitForPaging($p);

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
    <div class="paging pagination">
        <ul>
            <li class="prev"><a href="category_list.php?p=<?php echo $p - 1; ?>"><i class="icon-previous"></i></a></li>

            <?php for ($i = 1; $i <= $max_page; $i++) {
                if ($i == $p) {
                    ?>
                    <li class="active"><a href="category_list.php?p=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php } else {
                    ?>
                    <li><a href="category_list.php?p=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php }
            } ?>

            <li class="next"><a href="category_list.php?p=<?php echo $p + 1; ?>"><i class="icon-next"></i></a></li>
        </ul>
    </div>

    <table class="table hovered">
        <tr>
            <th>Category Name</th>
        </tr>

        <?php
        while (($row = mysqli_fetch_assoc($result))) {
            ?>
            <tr>
                <td><?php echo $row["cate_name"] ?></td>
                <td><a href="category_edit.php?categoryid=<?php echo $row["cate_id"] ?>">Edit</a></td>
                <td><a href="process/category.php?do=delete&categoryid=<?php echo $row["cate_id"] ?>" onclick="return confirm('Are you sure to delete this Category?')">X</a></td>
            </tr>
<?php } ?>	
    </table>

    <a href="category_addnew.php">Add new Category</a>
    
    
    <?php
    require './inc_footer.php';
    ?>
