<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paygames</title>
        <link href="css/global.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/search.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="js/unslider.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800|Roboto&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    </head>
    <?php
    require_once 'header.php';
    $p = get("p");
    if ($p < 1) {
        $p = 1;
    }

    $s_query = get("s_query");
    $filter = get("filter");
    $count_query = "SELECT COUNT(*) AS cnt FROM `product` JOIN `category` ON `product`.cate_id = `category`.cate_id WHERE `$filter` LIKE '%$s_query%' ORDER BY `product_id` DESC";
    $count_result = execute_query($count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    $max_page = ceil($count_row["cnt"] / CATEGORY_LIST);
    if ($p > $max_page) {
        $p = $max_page;
    }

    $search_query = "SELECT * FROM `product` JOIN `category` ON `product`.cate_id = `category`.cate_id WHERE `$filter` LIKE '%$s_query%' ORDER BY `product_id` DESC" . createLimitForPagingProduct($p);
    $search_result = execute_query($search_query);
    ?>
    <div id="game-list" class="container main-content">


        <div class="paging pagination">
            <ul>
                <li class="prev"><a href="search.php?s_query=<?php echo $s_query ?>&filter=<?php echo $filter ?>&p=<?php echo $p - 1; ?>"><i class="icon-previous"></i>Prev</a></li>
                <?php
                for ($i = 1; $i <= $max_page; $i++) {
                    if ($i == $p) {
                        ?>
                        <li class="active"><a><?php echo $i ?></a></li>
                    <?php } else {
                        ?>
                        <li><a href="search.php?s_query=<?php echo $s_query ?>&filter=<?php echo $filter ?>&p=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php
                    }
                }
                ?>
                <li class="next"><a href="search.php?s_query=<?php echo $s_query ?>&filter=<?php echo $filter ?>&p=<?php echo $p + 1; ?>"><i class="icon-next"></i>Next</a></li>
            </ul>
        </div>
        <table>
            <tr>
                <?php
                $o = 1;
                while ($search_row = mysqli_fetch_assoc($search_result)) {
                    ?>
                    <td>
                        <a class="link" href="product_info.php?productid=<?php echo $search_row['product_id'] ?>" title="<?php echo $search_row['title'] ?>" >
                            <img class="img-back" src="<?php echo $search_row['image5'] ?>">
                            <h1><?php echo $search_row['title'] ?></h1>
                            </br>
                            <h2><?php echo $search_row['price'] * EXCHANGE_RATE ?>đ</h2>
                        </a>
                    </td>
                    <?php
                    if ($o == 4) {
                        echo '</tr><tr>';
                        $o = 0;
                    }
                    $o++;
                }
                ?>
            </tr>
        </table>

        
        <div class="paging pagination">
            <ul>
                <li class="prev"><a href="search.php?s_query=<?php echo $s_query ?>&filter=<?php echo $filter ?>&p=<?php echo $p - 1; ?>"><i class="icon-previous"></i>Prev</a></li>
                <?php
                for ($i = 1; $i <= $max_page; $i++) {
                    if ($i == $p) {
                        ?>
                        <li class="active"><a><?php echo $i ?></a></li>
                    <?php } else {
                        ?>
                        <li><a href="search.php?s_query=<?php echo $s_query ?>&filter=<?php echo $filter ?>&p=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php
                    }
                }
                ?>
                <li class="next"><a href="search.php?s_query=<?php echo $s_query ?>&filter=<?php echo $filter ?>&p=<?php echo $p + 1; ?>"><i class="icon-next"></i>Next</a></li>
            </ul>
        </div>












    </div>
    <?php
    require_once 'footer.php';
    ?>