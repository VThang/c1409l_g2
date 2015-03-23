<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
$output = '';
if (post('search') == '') {
    $p = get("p");
    if ($p < 1) {
        $p = 1;
    }
    $count_query = "SELECT COUNT(*) AS cnt FROM `order` JOIN `customer` ON `order`.customer_id = `customer`.customer_id  ORDER BY `order_id` DESC";
    $count_result = execute_query($count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    $max_page = ceil($count_row["cnt"] / PAGE_ROW);
    $query = "SELECT * FROM `order` JOIN `customer` ON `order`.customer_id = `customer`.customer_id ORDER BY `order_id` DESC" . createLimitForPaging($p);

    $result = execute_query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $orderid = $row['order_id'];
        $orderdate = $row['order_date'];
        $customername = $row['name'];
        $email = $row['email'];
        $product_quantity = $row['product_quantity'];
        $importstat = $row['import_status'];
        $exportstat = $row['export_status'];
        $remarks = $row['remarks'];
        $details = '<a href="order_details_list.php?orderid=' . $orderid . '">Details</a></td>';
        $edit = '<a href="order_edit.php?orderid=' . $orderid . '">Edit</a></td>';
        $question = "'Are you sure to delete this Order?'";
        $delete = '<a href="process/order.php?do=delete&orderid=' . $orderid . '" onclick="return confirm(' . $question . ')">X</a>';
        $output .= '<td> ' . $orderid . '</td><td>' . $orderdate . '</td><td>' . $customername . '</td><td>' . $email . '</td><td>' . $product_quantity . '</td><td>' . $importstat . '</td><td>' . $exportstat . '</td><td>' . $remarks . '</td><td>' . $details . '</td><td>' . $edit . '</td><td>' . $delete . '</td></tr>';
    }
} else {
    if (post('search')) {
        $searchq = post('search');
        $searchq = preg_replace("#[^0-9a-z@]#i", "", $searchq);
        $search_att = post('search_att');

        $p = get("p");
        if ($p < 1) {
            $p = 1;
        }
        if (post('search_att') == "order_id") {
            $count_query = "SELECT COUNT(*) AS cnt FROM `order` JOIN `customer` ON `order`.customer_id = `customer`.customer_id  ORDER BY `order_id` DESC WHERE `order`.order_id LIKE '%$searchq%'";
        } else {
            $count_query = "SELECT COUNT(*) AS cnt FROM `order` JOIN `customer` ON `order`.customer_id = `customer`.customer_id  ORDER BY `order_id` DESC WHERE `$search_att` LIKE '%$searchq%'";
        }
        $count_result = execute_query($count_query);
        $count_row = mysqli_fetch_assoc($count_result);
        $max_page = ceil($count_row["cnt"] / PAGE_ROW);
        if (post('search_att') == "order_id") {
            $query = "SELECT * FROM `order` JOIN `customer` ON `order`.customer_id = `customer`.customer_id  ORDER BY `order_id` DESC WHERE `order`.order_id LIKE '%$searchq%'" . createLimitForPaging($p);
        } else {
            $query = "SELECT * FROM `order` JOIN `customer` ON `order`.customer_id = `customer`.customer_id  ORDER BY `order_id` DESC WHERE `$search_att` LIKE '%$searchq%'" . createLimitForPaging($p);
        }

        $result = execute_query($query);
        $count = mysqli_num_rows($result);
        if ($count == 0) {
            $output = 'No search result!';
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $orderid = $row['order_id'];
                $orderdate = $row['order_date'];
                $customername = $row['name'];
                $email = $row['email'];
                $product_quantity = $row['product_quantity'];
                $importstat = $row['import_status'];
                $exportstat = $row['export_status'];
                $remarks = $row['remarks'];
                $details = '<a href="order_details_list.php?orderid=' . $orderid . '">Details</a></td>';
                $edit = '<a href="order_edit.php?orderid=' . $orderid . '">Edit</a></td>';
                $question = "'Are you sure to delete this Order?'";
                $delete = '<a href="process/order.php?do=delete&orderid=' . $orderid . '" onclick="return confirm(' . $question . ')">X</a>';
                $output .= '<td> ' . $orderid . '</td><td>' . $orderdate . '</td><td>' . $customername . '</td><td>' . $email . '</td><td>' . $product_quantity . '</td><td>' . $importstat . '</td><td>' . $exportstat . '</td><td>' . $remarks . '</td><td>' . $details . '</td><td>' . $edit . '</td><td>' . $delete . '</td></tr>';
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
    <div class="paging">
        <a href="order_list.php?p=<?php echo $p - 1; ?>">Trước</a>

        <?php for ($i = 1; $i <= $max_page; $i++) { ?>
            <a href="order_list.php?p=<?php echo $i ?>"><?php echo $i ?></a>
        <?php } ?>

        <a href="order_list.php?p=<?php echo $p + 1; ?>">Sau</a>
    </div>

    <form action="order_list.php" method="post">
        <input type="text" name="search" placeholder="Search.." />
        <select name="search_att">
            <option value="order_id">Invoice No.</option>
            <option value="name">Customer Name</option>
            <option value="email">Customer Email</option>
            <option value="import_status">Import Status Code</option>
            <option value="export_status">Export Status Code</option>
        </select>
        <input class="info" type="submit" value=">>" />
    </form>

    <table class="table hovered">
        <tr>
            <th>Invoice No.</th>
            <th>Order Date</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Product Quantity</th>
            <th>Import Status</th>
            <th>Export Status</th>
            <th>Remarks</th>
        </tr>
        <?php
        print_r($output);
        ?>
    </table>


    <a href="order_addnew.php">Create new Order</a>


    <?php
    include_once './inc_footer.php';
    ?>