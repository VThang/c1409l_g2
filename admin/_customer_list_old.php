<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
include_once './inc_header.php';

$p = get("p");
if ($p < 1) {
    $p = 1;
}

$count_query = "SELECT COUNT(*) AS cnt FROM `customer`";
$count_result = execute_query($count_query);
$count_row = mysqli_fetch_assoc($count_result);
//echo $count_row["cnt"];

$max_page = ceil($count_row["cnt"] / PAGE_ROW);

// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `customer`" . createLimitForPaging($p);

// mysql
$result = execute_query($query1);
?>
<div class="paging">
    <a href="customer_list.php?p=<?php echo $p - 1; ?>">Trước</a>

    <?php for ($i = 1; $i <= $max_page; $i++) { ?>
        <a href="customer_list.php?p=<?php echo $i ?>"><?php echo $i ?></a>
    <?php } ?>

    <a href="customer_list.php?p=<?php echo $p + 1; ?>">Sau</a>
</div>

<table border="1">
	<tr>
		<th>Customer ID</th>
		<th>Email</th>
                <th>Name</th>
                <th>Phone Number</th>
	</tr>
		
	<?php
	while ( ($row = mysqli_fetch_assoc ( $result )) ) {
		?>
	<tr>
		<td><?php echo  $row["customer_id"] ?></td>
		<td><?php echo  $row["email"] ?></td>
                <td><?php echo  $row["name"] ?></td>
                <td><?php echo  $row["phone"] ?></td>
                <td><a href="customer_edit.php?customerid=<?php echo $row["customer_id"] ?>">Edit</a></td>
                <td><a href="process/customer.php?do=delete&customerid=<?php echo $row["customer_id"] ?>" onclick="return confirm('Are you sure to delete this Customer?')">X</a></td>
	</tr>
	<?php }  ?>	
</table>

<a href="customer_addnew.php">Add new Customer</a>
<?php
include_once './inc_footer.php';
?>