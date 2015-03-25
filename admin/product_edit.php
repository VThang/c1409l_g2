<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
$producid = get("productid");

$query = "SELECT * FROM `product` WHERE `product_id`='$producid'";
$result = execute_query($query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
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
    <form action="process/product.php?do=update&productid=<?php print_r($producid); ?>" method="post">
        <table class="table hovered">
            <tr>
                <th>Title</th>
                <td><input type="text" name="title" id="title"
                           value="<?php echo $row["title"] ?>" /></td>
            </tr>
            <tr>
                <th>Price</th>
                <td><input type="number" name="price" id="price"
                           value="<?php echo $row["price"] ?>" /></td>
            </tr>        
            <tr>
                <th>Category ID</th>
                <td><input type="text" name="cate_id" id="cate_id"
                           value="<?php echo $row["cate_id"] ?>" /></td>
            </tr>
            <tr>
                <th>Release Date</th>
                <td><input type="date" name="release_date" id="release_date"
                           value="<?php echo $row["release_date"] ?>" /></td>
            </tr>
            <tr>
                <th>Product Details</th>
                <td><input type="text" name="product_details" id="cate_id"
                           value="<?php echo $row["product_details"] ?>" /></td>
            </tr>
            <tr>
                <th>Image 1</th>
                <td><input type="text" name="image1" id="image1"
                           value="<?php echo $row["image1"] ?>" /></td>
            </tr>
            <tr>
                <th>Image 2</th>
                <td><input type="text" name="image2" id="image2"
                           value="<?php echo $row["image2"] ?>" /></td>
            </tr>
            <tr>
                <th>Image 3</th>
                <td><input type="text" name="image3" id="image3"
                           value="<?php echo $row["image3"] ?>" /></td>
            </tr>
            <tr>
                <th>Image 4</th>
                <td><input type="text" name="image4" id="image4"
                           value="<?php echo $row["image4"] ?>" /></td>
            </tr>
            <tr>
                <th>Image 5</th>
                <td><input type="text" name="image5" id="image5"
                           value="<?php echo $row["image5"] ?>" /></td>
            </tr>
            <tr>
                <th colspan="2"><input class="info" type="submit" value="Update" /></th>
            </tr>
        </table>
    </form>







    <?php
    include_once './inc_footer.php';
    ?>