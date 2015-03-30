<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
date_default_timezone_set('Asia/Bangkok');

$customer_query = "SELECT * FROM `customer`";
$customer_result = execute_query($customer_query);

$query2 = "SELECT * FROM `product`";
$result2 = execute_query($query2);
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
        <script type="text/javascript" src="js/validateform.js"></script>
    </head>
    <?php
    include_once './inc_header.php';
    ?>
    <form action="process/order.php?do=add_new" method="post" onsubmit="return validate()">
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
                        <?php while ($customer_row = mysqli_fetch_assoc($customer_result)) { ?>
                            <option value="<?php echo $customer_row['customer_id']; ?>"><?php echo $customer_row['email']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    Method
                </th>
                <td>
                    <select name="remarks">
                        <option value="1">Online Banking</option>
                        <option value="2">By Mobile Card</option>
                        <option value="3">In our Store</option>
                    </select>
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

    <script type="text/javascript">
        function validate() {
            msg = "";
            msg += validateRequire("content");
            //msg += validateEmail("email");

            if (msg != "") {
                $("#error-msg").html(msg);
                return false;

            } else {
                return true;
            }
        }
    </script> 

    <?php
    include_once './inc_footer.php';
    ?>