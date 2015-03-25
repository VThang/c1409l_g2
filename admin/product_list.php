<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
$output = '';
if (post('search') == '') {
    $p = get("p");
    if ($p < 1) {
        $p = 1;
    }
    $count_query = "SELECT COUNT(*) AS cnt FROM `product` JOIN `category` ON product.cate_id = category.cate_id";
    $count_result = execute_query($count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    $max_page = ceil($count_row["cnt"] / PAGE_ROW);
    $query = "SELECT * FROM `product`  JOIN `category` ON product.cate_id = category.cate_id" . createLimitForPaging($p);
    $result = execute_query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $price = $row['price'];
        $cateid = $row['cate_id'];
        $catename = $row['cate_name'];
        $releasedate = $row['release_date'];
        $details = $row['product_details'];
        $image1 = $row['image1'];
        $image2 = $row['image2'];
        $image3 = $row['image3'];
        $image4 = $row['image4'];
        $image5 = $row['image5'];
        $producid = $row['product_id'];
        $edit = '<a href="product_edit.php?productid=' . $producid . '">Edit</a></td>';
        $question = "'Are you sure to delete this Product?'";
        $delete = '<a href="process/product.php?do=delete&productid=' . $producid . '" onclick="return confirm(' . $question . ')">X</a>';
        $output .= '<td> ' . $title . '</td><td>' . $price . '</td><td>' . $cateid . '</td><td>' . $catename . '</td><td>' . $releasedate . '</td><td>' . $details . '</td><td>' . $image1 . '</td><td>' . $image2 . '</td><td>' . $image3 . '</td><td>' . $image4 . '</td><td>' . $image5 . '</td><td>' . $edit . '</td><td>' . $delete . '</td></tr>';
    }
} else {
    if (post('search')) {
        $searchq = post('search');
        $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
        $search_att = post('search_att');

        $p = get("p");
        if ($p < 1) {
            $p = 1;
        }
        $count_query = "SELECT COUNT(*) AS cnt FROM `product`  JOIN `category` ON product.cate_id = category.cate_id WHERE `$search_att` LIKE '%$searchq%'";
        $count_result = execute_query($count_query);
        $count_row = mysqli_fetch_assoc($count_result);
        $max_page = ceil($count_row["cnt"] / PAGE_ROW);
        $query = "SELECT * FROM `product`  JOIN `category` ON product.cate_id = category.cate_id WHERE `$search_att` LIKE '%$searchq%' " . createLimitForPaging($p);
        $result = execute_query($query);
        $count = mysqli_num_rows($result);
        if ($count == 0) {
            $output = 'No search result!';
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $price = $row['price'];
                $cateid = $row['cate_id'];
                $catename = $row['cate_name'];
                $releasedate = $row['release_date'];
                $details = $row['product_details'];
                $image1 = $row['image1'];
                $image2 = $row['image2'];
                $image3 = $row['image3'];
                $image4 = $row['image4'];
                $image5 = $row['image5'];
                $producid = $row['product_id'];
                $edit = '<a href="product_edit.php?productid=' . $producid . '">Edit</a></td>';
                $question = "'Are you sure to delete this Product?'";
                $delete = '<a href="process/product.php?do=delete&productid=' . $producid . '" onclick="return confirm(' . $question . ')">X</a>';
                $output .= '<tr><td> ' . $title . '</td><td>' . $price . '</td><td>' . $cateid . '</td><td>' . $catename . '</td><td>' . $releasedate . '</td><td>' . $details . '</td><td>' . $image1 . '</td><td>' . $image2 . '</td><td>' . $image3 . '</td><td>' . $image4 . '</td><td>' . $image5 . '</td><td>' . $edit . '</td><td>' . $delete . '</td></tr>';
            }
        }
    }
}
if ($p > $max_page) {
    $p = $max_page;
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
    <div class="paging">
        <a href="product_list.php?p=<?php echo $p - 1; ?>">Trước</a>

        <?php for ($i = 1; $i <= $max_page; $i++) { ?>
            <a href="product_list.php?p=<?php echo $i ?>"><?php echo $i ?></a>
        <?php } ?>

        <a href="product_list.php?p=<?php echo $p + 1; ?>">Sau</a>
    </div>

    <form action="product_list.php" method="post">
        <input type="text" name="search" placeholder="Search.." />
        <select name="search_att">
            <option value="title">Title</option>
            <option value="cate_name">Category Name</option>
            <option value="price">Price</option>
        </select>
        <input class="info" type="submit" value=">>" />
    </form>

    <table class="table hovered">
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Release Date</th>
            <th>Product Details</th>
            <th>Image1</th>
            <th>Image2</th>
            <th>Image3</th>
            <th>Image4</th>
            <th>Image5</th>
        </tr>
        <?php
        print_r($output);
        ?>
    </table>


    <a href="product_addnew.php">Add new</a>


    <?php
    include_once './inc_footer.php';
    ?>