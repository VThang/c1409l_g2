<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';

$view_query = "SELECT * FROM `customer`";
$view_result = execute_query($view_query);

?>

<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>Name</th>
            <th>Phone</th>
        </tr>
    </thead>
        
    <tbody>
        <?php
        while ($view_row = mysqli_fetch_assoc($view_result)){
        ?>
        <tr>
            <td><?php echo $view_row['email']?></td>
            <td><?php echo $view_row['name']?></td>
            <td><?php echo $view_row['phone']?></td>
            <td><a href="process/customer_1.php?do=delete&customer_id=<?php echo $view_row['customer_id'];?>">X</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a href="customer_addnew_1.php">Add New</a>






<?php
include_once './inc_footer.php';
?>