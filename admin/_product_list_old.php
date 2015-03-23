<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
include_once './inc_header.php';

$p = get("p");
if ($p < 1) {
    $p = 1;
}

$count_query = "SELECT COUNT(*) AS cnt FROM `product`";
$count_result = execute_query($count_query);
$count_row = mysqli_fetch_assoc($count_result);
//echo $count_row["cnt"];

$max_page = ceil($count_row["cnt"] / PAGE_ROW);

// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `product`" . createLimitForPaging($p);

// mysql
$result = execute_query($query1);
?>

<div class="paging">
    <a href="_product_list_old.php?p=<?php echo $p - 1; ?>">Trước</a>

    <?php for ($i = 1; $i <= $max_page; $i++) { ?>
    <a href="_product_list_old.php?p=<?php echo $i ?>"><?php echo $i ?></a>
    <?php } ?>

    <a href="_product_list_old.php?p=<?php echo $p + 1; ?>">Sau</a>
</div>

<table border="1">
	<tr>
		<th>Product ID</th>
		<th>Title</th>
                <th>Price</th>
                <th>Category ID</th>
                <th>Release Date</th>
                <th>Product Details</th>
                <th>Image1</th>
                <th>Image2</th>
                <th>Image3</th>
                <th>Image4</th>
                <th>Image5</th>
	</tr>
		
	<?php
	while ( ($row = mysqli_fetch_assoc ( $result )) ) {
		?>
	<tr>
		<td><?php echo  $row["product_id"] ?></td>
		<td><?php echo  $row["title"] ?></td>
                <td><?php echo  $row["price"] ?></td>
                <td><?php echo  $row["cate_id"] ?></td>
                <td><?php echo  $row["release_date"] ?></td>
                <td><?php echo  $row["product_details"] ?></td>
                <td><?php echo  $row["image1"] ?></td>
                <td><?php echo  $row["image2"] ?></td>
                <td><?php echo  $row["image3"] ?></td>
                <td><?php echo  $row["image4"] ?></td>
                <td><?php echo  $row["image5"] ?></td>
                <td><a href="product_edit.php?productid=<?php echo $row["product_id"] ?>">Edit</a></td>
                <td><a href="process/product.php?do=delete&productid=<?php echo $row["product_id"] ?>" onclick="return confirm('Are you sure to delete this Product?')">X</a></td>
	</tr>
	<?php }  ?>
</table>




<a href="product_addnew.php">Add new</a>
<?php
include_once './inc_footer.php';
?>