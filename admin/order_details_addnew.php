<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';

$query2 = "SELECT order_id FROM `order` ORDER BY order_id DESC LIMIT 1;";
$result2 = execute_query($query2);
$row2 = mysqli_fetch_assoc($result2);
$orderid = $row2["order_id"];

$productquantity = post("product_quantity");
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
        <script type="text/javascript" src="js/order_details_addnew.js"></script>
    </head>
    <?php
    include_once './inc_header.php';
    ?>
    <form action="order_details_addnew.php?orderid=<?php print_r($orderid); ?>" method="post">
        <table class="table hovered" style="display: inline-table">
            <tr>
                <th colspan="2">
                    Number of Product
                </th>
            </tr>
            <tr>
                <th>
                    <select name="product_quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </th>
                <td>
                    <input class="info" type="submit" />
                </td>
            </tr>
        </table>
    </form>

    <form action="process/order_details.php?do=add_new&orderid=<?php print_r($orderid); ?>" method="post">
        <input type="hidden" name="product_quantity" value="<?php print_r($productquantity); ?>" />
        <?php
        for ($i = 0; $i < $productquantity; $i++) {
            if ($i < 5) {
                ?>
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
                                    <option value="<?php echo $row1['product_id']; ?>">
                                        <?php echo $row1['title']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Import Price</th>
                        <td><input type="number" name="import_price[<?php print_r($i) ?>]" value="" /></td>
                    </tr>
                    <tr>
                        <th>Export Price</th>
                        <td><input type="number" name="export_price[<?php print_r($i) ?>]" value="" /></td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td><input type="number" name="quantity[<?php print_r($i) ?>]" value="" /></td>
                    </tr>
                </table>
                <?php
            } elseif ($i == '5') {
                echo '<br />';
                ?>
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
                                    <option value="<?php echo $row1['product_id']; ?>">
                                        <?php echo $row1['title']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Import Price</th>
                        <td><input type="number" name="import_price[<?php print_r($i) ?>]" value="" /></td>
                    </tr>
                    <tr>
                        <th>Export Price</th>
                        <td><input type="number" name="export_price[<?php print_r($i) ?>]" value="" /></td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td><input type="number" name="quantity[<?php print_r($i) ?>]" value="" /></td>
                    </tr>
                </table>
                <?php
            } else {
                ?>
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
                                    <option value="<?php echo $row1['product_id']; ?>">
                                        <?php echo $row1['title']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Import Price</th>
                        <td><input type="number" name="import_price[<?php print_r($i) ?>]" value="" /></td>
                    </tr>
                    <tr>
                        <th>Export Price</th>
                        <td><input type="number" name="export_price[<?php print_r($i) ?>]" value="" /></td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td><input type="number" name="quantity[<?php print_r($i) ?>]" value="" /></td>
                    </tr>
                </table>
                <?php
            }
        }
        ?>
        <input class="info" type="submit"/>
    </form>
    <?php
    include_once './inc_footer.php';
    ?>