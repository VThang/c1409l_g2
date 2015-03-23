<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';

$orderid = get("orderid");

$query2 = "SELECT * FROM `order` WHERE `order_id` = $orderid";
$result2 = execute_query($query2);
$row2 = mysqli_fetch_assoc($result2);
$product_quantity = $row2['product_quantity'];
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
    <form action="process/order_details.php?do=update&orderid=<?php print_r($orderid); ?>" method="post">
        <input type="hidden" name="product_quantity" value="<?php echo $product_quantity ?>"/>
        <?php
        for ($i = 0; $i < $product_quantity; $i++) {
            $m = $i;
            $o = $m++;
            $n = $o++;
            $query3 = "SELECT * FROM `order_details` JOIN `product` ON `order_details`.product_id = `product`.product_id WHERE `order_id` = $orderid LIMIT $n, 1";
            $result3 = execute_query($query3);
            $row3 = mysqli_fetch_assoc($result3);

            if ($i < 5) {
                ?>
        <input type="hidden" name="details_id[<?php print_r($i); ?>]" value="<?php echo $row3['details_id']; ?>" />
                <table class="table hovered" style="display: inline-table">
                    <tr>
                        <th colspan="2"> 
                            Product <?php print_r($i + 1) ?>
                        </th>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td>
                            <select name="product_id[<?php print_r($i) ?>]">
                                <?php
                                $query1 = "SELECT * FROM `product`";
                                $result1 = execute_query($query1);
                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                    ?>
                                    <option value="<?php echo $row1['product_id']; ?>" <?php
                                    if ($row1['product_id'] === $row3['product_id']) {
                                        echo 'selected';
                                    }
                                    ?>>
                                                <?php echo $row1['title']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Import Price</th>
                        <td><input type="number" name="import_price[<?php print_r($i) ?>]" value="<?php echo $row3['import_price'] ?>" /></td>
                    </tr>
                    <tr>
                        <th>Export Price</th>
                        <td><input type="number" name="export_price[<?php print_r($i) ?>]" value="<?php echo $row3['export_price'] ?>" /></td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td><input type="number" name="quantity[<?php print_r($i) ?>]" value="<?php echo $row3['quantity'] ?>" /></td>
                    </tr>
                </table>
                <?php
            }
        }
        ?>
        <input class="info" type="submit" />
    </form>

    <?php
    include_once './inc_footer.php';
    ?>