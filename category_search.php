<?php
require 'inc_header.php';
?>
<hr />
<h1>Category Search</h1>

<form action="" method="get">
    <input name="search_category_name" value="<?php echo get("search_category_name") ?>"type="text" /> <input type="submit" value="Search" />
</form>


<?php
$name = get("search_category_name");
$rs = execute_query("SELECT * FROM Category WHERE CategoryName  LIKE '%$name%'");

if (!$rs || mysqli_num_rows($rs) == 0) {
    echo "Not Found!!!!";
} else {
    ?>
    <table>
        <tr>
            <th>Category Id</th>
            <th>Category Name</th>        
        </tr>    

        <?php
        while ($row = mysqli_fetch_assoc($rs)) {
            ?>    
            <tr>
                <td><?= $row["CategoryId"] ?></td>
                <td><?= $row["CategoryName"] ?></td>        
            </tr>    
            <?php }
        ?>

    </table>
    <?php
}
?>

<hr />
<?php
require 'inc_footer.php';
?>