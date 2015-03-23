<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Cart - Paygames</title>
        <link href="css/global.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/cart.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="js/unslider.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800|Roboto&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    </head>
    <?php
    require 'header.php';
    $p = get("p");
    if ($p < 1) {
        $p = 1;
    }

    $count_query = "SELECT COUNT(*) AS cnt FROM `product`";
    $count_result = execute_query($count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    $max_page = ceil($count_row["cnt"] / PAGE_ROW);

    $query0 = "SELECT * FROM `product`" . createLimitForPaging($p);
    $result0 = execute_query($query0);

    if ($p > $max_page) {
        $p = $max_page;
    }
    ?>
    <main>
        <div class="container main-content">
            <h1>Product List</h1>
            <div>
                <a href="temp_product_list.php?p=<?php echo $p - 1; ?>">Trước</a>
                <?php for ($i = 1; $i <= $max_page; $i++) { ?>
                    <a href="temp_product_list.php?p=<?php echo $i ?>"><?php echo $i ?></a>
                <?php } ?>
                <a href="temp_product_list.php?p=<?php echo $p + 1; ?>">Sau</a>
            </div>
            <table>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>        
                    <th>Price</th>    
                    <th>Release Date</th>
                    <th>Add</th>            
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result0)) {
                    ?>    
                    <tr>
                        <td><img src="<?= $row["image1"] ?>" style="height: 100px;"/></td>
                        <td><?= $row["title"] ?></td>       
                        <td><?= $row["price"] ?></td>
                        <td><?= $row["release_date"] ?></td>
                        <td><a href="process/cart.php?do=add_new&productid=<?= $row["product_id"] ?>">Add To Cart</a></td>  
                    </tr>    
                    <?php
                }
                ?>
            </table>
            <br/>
            <br/>
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>