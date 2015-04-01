<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';

$orderid = get("orderid");
$view_query = "SELECT * FROM `order` JOIN `customer` ON `order`.customer_id = `customer`.customer_id";
$view_result = execute_query($view_query);

if (mysqli_num_rows($view_result) > 0) {
    $view_row = mysqli_fetch_assoc($view_result);
}

$query1 = "SELECT * FROM `customer`";
$result1 = execute_query($query1);
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
    <form action="process/order.php?do=update&orderid=<?php print_r($orderid); ?>" method="post">
        <table class="table hovered">
            <tr>
                <th>Order Date</th>
                <td><input type="date" name="order_date"
                           value="<?php echo $view_row["order_date"] ?>" /></td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <select name="customer_id" >
                        <?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>
                            <option value="<?php echo $row1['customer_id']; ?>"><?php echo $row1['email']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>   
            <tr>
                <th>Product Quantity</th>
                <td><input type="text" name="product_quantity"
                           value="<?php echo $view_row["product_quantity"] ?>" /></td>
            </tr>
            <tr>
                <th>Import Status</th>
                <td><input type="text" name="import_status"
                           value="<?php echo $view_row["import_status"] ?>" /></td>
            </tr>
            <tr>
                <th>Export Status</th>
                <td><input type="text" name="export_status"
                           value="<?php echo $view_row["export_status"] ?>" /></td>
            </tr>
            <tr>
                <th>Remarks</th>
                <td><textarea name="remarks"><?php echo $view_row["remarks"] ?></textarea>
                </td>
            </tr>
            <tr>
                <th colspan="2"><input class="info" type="submit" value="Update" /></th>
            </tr>
        </table>
    </form>







    <?php
    include_once './inc_footer.php';
    ?>