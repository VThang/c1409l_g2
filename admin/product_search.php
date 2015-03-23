<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
include_once './inc_header.php';
$output = '';

if (post('search')) {
    $searchq = post('search');
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
    $search_att = post('search_att');

    $query = "SELECT * FROM `product` WHERE `$search_att` LIKE '%$searchq%' ";

    $result = execute_query($query);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        $output = 'No search result!';
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $producid = $row['product_id'];
            $title = $row['title'];
            $output .= '<tr><td> ' . $producid . '</td> <td>' . $title . '</td>';
        }
    }
}
?>

<form action="product_search.php" method="post">
    <input type="text" name="search" placeholder="Search.." />
    <select name="search_att">
        <option value="product_id">Product ID</option>
        <option value="title">Title</option>
        <option value="cate_id">Category ID</option>
    </select>
    <input class="info" type="submit" value=">>" />
</form>

<table border="1">
<?php
print_r($output);
?>
</table>



<?php
include_once './inc_footer.php';
?>