<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
date_default_timezone_set('Asia/Bangkok');

$query1 = "SELECT * FROM `customer`";
$result1 = execute_query($query1);

$query2 = "SELECT * FROM `product`";
$result2 = execute_query($query2);
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
    <form action="process/order.php?do=add_new" method="post">
        <table class="table hovered">
            <tr>
                <th>
                    Order Date
                </th>
                <td>
                    <input type="date" value="<?php echo date('Y-m-d'); ?>" name="order_date" />
                </td>
            </tr>
            <tr>
                <th>
                    Email
                </th>
                <td>
                    <select name="customer_id">
                        <?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>
                            <option value="<?php echo $row1['customer_id']; ?>"><?php echo $row1['email']; ?></option>
                        <?php } ?>
                    </select>
                </td>            
            </tr>
            <tr>
                <th>
                    Remarks
                </th>
                <td>
                    <textarea type="text" name="remarks" ></textarea>
                </td>            
            </tr>
            <tr>
                <td>
                    <input class="info" type="submit" value="Submit" />
                </td> 
                <td>
                    <input type="reset" value="Cancel" />
                </td>
            </tr>
        </table>
    </form>

    <?php
    include_once './inc_footer.php';
    ?>