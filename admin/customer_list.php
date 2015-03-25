<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
$output = '';

if (post('search') == '') {
    $p = get("p");
    if ($p < 1) {
        $p = 1;
    }
    $count_query = "SELECT COUNT(*) AS cnt FROM `customer`";
    $count_result = execute_query($count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    $max_page = ceil($count_row["cnt"] / PAGE_ROW);
    $query = "SELECT * FROM `customer`" . createLimitForPaging($p);
    $result = execute_query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $email = $row['email'];
        $name = $row['name'];
        $phone = $row['phone'];
        $customerid = $row['customer_id'];
        $edit = '<a href="customer_edit.php?customerid=' . $customerid . '">Edit</a></td>';
        $question = "'Are you sure to delete this Customer?'";
        $delete = '<a href="process/customer.php?do=delete&customerid=' . $customerid . '" onclick="return confirm(' . $question . ')">X</a>';
        $output .= '<td> ' . $email . '</td><td>' . $name . '</td><td>' . $phone . '</td><td>' . $edit . '</td><td>' . $delete . '</td></tr>';
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
        $count_query = "SELECT COUNT(*) AS cnt FROM `customer` WHERE `$search_att` LIKE '%$searchq%'";
        $count_result = execute_query($count_query);
        $count_row = mysqli_fetch_assoc($count_result);
        $max_page = ceil($count_row["cnt"] / PAGE_ROW);
        $query = "SELECT * FROM `customer` WHERE `$search_att` LIKE '%$searchq%'" . createLimitForPaging($p);

        $result = execute_query($query);
        $count = mysqli_num_rows($result);
        if ($count == 0) {
            $output = 'No search result!';
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $email = $row['email'];
                $name = $row['name'];
                $phone = $row['phone'];
                $customerid = $row['phone'];
                $edit = '<a href="customer_edit.php?customerid=' . $customerid . '">Edit</a></td>';
                $question = "'Are you sure to delete this Customer?'";
                $delete = '<a href="process/customer.php?do=delete&customerid=' . $customerid . '" onclick="return confirm(' . $question . ')">X</a>';
                $output .= '<td> ' . $email . '</td><td>' . $name . '</td><td>' . $phone . '</td><td>' . $edit . '</td><td>' . $delete . '</td></tr>';
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
    <div class="paging pagination">
        <ul>
            <li class="prev"><a href="customer_list.php?p=<?php echo $p - 1; ?>"><i class="icon-previous"></i></a></li>

            <?php for ($i = 1; $i <= $max_page; $i++) {
                if ($i == $p) {
                    ?>
                    <li class="active"><a href="customer_list.php?p=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php } else {
                    ?>
                    <li><a href="customer_list.php?p=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php }
            } ?>

            <li class="next"><a href="customer_list.php?p=<?php echo $p + 1; ?>"><i class="icon-next"></i></a></li>
        </ul>
    </div>


    <form action="customer_list.php" method="post">
        <input type="text" name="search" placeholder="Search.." />
        <select name="search_att">
            <option value="email">Email</option>
            <option value="name">Name</option>
            <option value="phone">Phone</option>
        </select>
        <input class="info" type="submit" value=">>" />
    </form>

    <table class="table hovered">
        <tr>
            <th>Email</th>
            <th>Name</th>
            <th>Phone Number</th>
        </tr>
        <?php
        print_r($output);
        ?>
    </table>

    <a href="customer_addnew.php">Add new Customer</a>
    <?php
    include_once './inc_footer.php';
    ?>