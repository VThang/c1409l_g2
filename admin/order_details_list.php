<?php
require './process/_inc.php';
require_once './inc_checklogin.php';

$output = '';
if (isset($_SESSION['previous_page'])) {
    if (basename($_SERVER['PHP_SELF']) == $_SESSION['previous_page']) {
        unset($_SESSION["searchq"]);
        unset($_SESSION["search_att"]);
    }
}

if (post('search') == '') {
    $orderid = get('orderid');
    $p = get("p");
    if ($p < 1) {
        $p = 1;
    }
    $count_query = "SELECT COUNT(*) AS cnt FROM `order_details` JOIN `product` ON `order_details`.product_id = `product`.product_id WHERE `order_id` = '$orderid'";
    $count_result = execute_query($count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    $max_page = ceil($count_row["cnt"] / PAGE_ROW);
    if ($p > $max_page) {
        $p = $max_page;
    }
    $query = "SELECT * FROM `order_details` JOIN `product` ON `order_details`.product_id = `product`.product_id WHERE `order_id` = '$orderid'" . createLimitForPaging($p);

    $result = execute_query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $orderid = $row['order_id'];
        $title = $row['title'];
        $impprice = $row['import_price'];
        $expprice = $row['export_price'];
        $quantity = $row['quantity'];
        $edit = '<a href="order_details_edit.php?orderid=' . $orderid . '">Edit</a></td>';
        $question = "'Are you sure to delete Order Details have Order ID = $orderid?'";
        $delete = '<a href="process/order_details.php?do=delete&orderid=' . $orderid . '" onclick="return confirm(' . $question . ')">X</a>';
        $output .= '<td> ' . $orderid . '</td><td>' . $title . '</td><td>' . $impprice . '</td><td>' . $expprice . '</td><td>' . $quantity . '</td><td>' . $edit . '</td><td>' . $delete . '</td></tr>';
    }
} elseif (isset($_SESSION["searchq"])) {
    $orderid = get('orderid');

    $searchq = $_SESSION["searchq"];
    $search_att = $_SESSION["search_att"];

    $p = get("p");
    if ($p < 1) {
        $p = 1;
    }
    $count_query = "SELECT COUNT(*) AS cnt FROM `order_details` JOIN `product` ON `order_details`.product_id = `product`.product_id WHERE `$search_att` = '$searchq'";
    $count_result = execute_query($count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    $max_page = ceil($count_row["cnt"] / PAGE_ROW);
    if ($p > $max_page) {
        $p = $max_page;
    }

    $query = "SELECT * FROM `order_details` JOIN `product` ON `order_details`.product_id = `product`.product_id WHERE `$search_att` = '$searchq' " . createLimitForPaging($p);

    $result = execute_query($query);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        $output = 'No search result!';
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $orderid = $row['order_id'];
            $title = $row['title'];
            $impprice = $row['import_price'];
            $expprice = $row['export_price'];
            $quantity = $row['quantity'];
            $detailsid = $row['details_id'];
            $edit = '<a href="order_details_edit.php?orderid=' . $orderid . '">Edit</a></td>';
            $question = "'Are you sure to delete Order Details have Order ID = $orderid?'";
            $delete = '<a href="process/order_details.php?do=delete&detailsid=' . $detailsid . '" onclick="return confirm(' . $question . ')">X</a>';
            $output .= '<td> ' . $orderid . '</td><td>' . $title . '</td><td>' . $impprice . '</td><td>' . $expprice . '</td><td>' . $quantity . '</td><td>' . $edit . '</td><!--<td>' . $delete . '</td>--></tr>';
        }
    }
} else {
    if (post('search')) {
        $searchq = post('search');
        $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
        $search_att = post('search_att');

        $_SESSION["searchq"] = $searchq;
        $_SESSION["search_att"] = $search_att;

        $p = get("p");
        if ($p < 1) {
            $p = 1;
        }
        $count_query = "SELECT COUNT(*) AS cnt FROM `order_details` JOIN `product` ON `order_details`.product_id = `product`.product_id WHERE `$search_att` = '$searchq'";
        $count_result = execute_query($count_query);
        $count_row = mysqli_fetch_assoc($count_result);
        $max_page = ceil($count_row["cnt"] / PAGE_ROW);
        if ($p > $max_page) {
            $p = $max_page;
        }
        $query = "SELECT * FROM `order_details` JOIN `product` ON `order_details`.product_id = `product`.product_id WHERE `$search_att` = '$searchq' " . createLimitForPaging($p);
        $result = execute_query($query);
        $count = mysqli_num_rows($result);
        if ($count == 0) {
            $output = 'No search result!';
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $orderid = $row['order_id'];
                $title = $row['title'];
                $impprice = $row['import_price'];
                $expprice = $row['export_price'];
                $quantity = $row['quantity'];
                $detailsid = $row['details_id'];
                $edit = '<a href="order_details_edit.php?orderid=' . $orderid . '">Edit</a></td>';
                $question = "'Are you sure to delete Order Details have Order ID = $orderid?'";
                $delete = '<a href="process/order_details.php?do=delete&detailsid=' . $detailsid . '" onclick="return confirm(' . $question . ')">X</a>';
                $output .= '<td> ' . $orderid . '</td><td>' . $title . '</td><td>' . $impprice . '</td><td>' . $expprice . '</td><td>' . $quantity . '</td><td>' . $edit . '</td><!--<td>' . $delete . '</td>--></tr>';
            }
        }
    } else {
        echo "error";
    }
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
    <div class="paging pagination">
        <ul>
            <li class="prev"><a href="order_details_list.php?orderid=<?php echo $orderid ?>&p=<?php echo $p - 1; ?>" onclick="$.post({search: <?php echo $_SESSION["searchq"] ?>});
                    $.post({search_att: <?php echo $_SESSION["search_att"] ?>});
                    return true;">
                    <i class="icon-previous"></i></a></li>

            <?php
            for ($i = 1; $i <= $max_page; $i++) {
                if ($i == $p) {
                    ?>
                    <li class="active"><a href="order_details_list.php?orderid=<?php echo $orderid ?>&p=<?php echo $i ?>" onclick="$.post({search: <?php echo $_SESSION["searchq"] ?>});
                            $.post({search_att: <?php echo $_SESSION["search_att"] ?>});
                            return true;"><?php echo $i ?></a></li>
                    <?php } else {
                        ?>
                    <li><a href="order_details_list.php?orderid=<?php echo $orderid ?>&p=<?php echo $i ?>" onclick="$.post({search: <?php echo $_SESSION["searchq"] ?>});
                            $.post({search_att: <?php echo $_SESSION["search_att"] ?>});
                            return true;"><?php echo $i ?></a></li>
                        <?php
                    }
                }
                ?>

            <li class="next"><a href="order_details_list.php?orderid=<?php echo $orderid ?>&p=<?php echo $p + 1; ?>"  onclick="$.post({search: <?php echo $_SESSION["searchq"] ?>});
                    $.post({search_att: <?php echo $_SESSION["search_att"] ?>});
                    return true;"><i class="icon-next"></i></a></li>
        </ul>
    </div>

    <form action="order_details_list.php" method="post">
        <input type="text" name="search" placeholder="Search.." />
        <select name="search_att">
            <option value="order_id">Order ID</option>
            <option value="title">Product Name</option>
            <option value="quantity">Quantity</option>
        </select>
        <input class="info" type="submit" value=">>" />
    </form>

    <table class="table hovered">
        <tr>
            <th>Order ID</th>
            <th>Product Name</th>
            <th>Import Price</th>
            <th>Export Price</th>
            <th>Quantity</th>
        </tr>
        <?php
        print_r($output);
        ?>
    </table>

    <?php
    $_SESSION['previous_page'] = basename($_SERVER['PHP_SELF']);
    include_once 'inc_footer.php';
    ?>