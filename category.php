<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Games-Paygames</title>
        <link href="css/global.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/category.css" type="text/css" rel="stylesheet" media="all" />        
        <link rel="stylesheet" type="text/css" href="css/iconFont.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="js/unslider.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans:700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>

    </head>
    <?php
    require_once 'header.php';
    $p = get("p");
    if ($p < 1) {
        $p = 1;
    }
    $cateid = get('cateid');
    
    $count_query = "SELECT COUNT(*) AS cnt FROM `product` WHERE `cate_id` = '$cateid'";
    $count_result = execute_query($count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    $max_page = ceil($count_row["cnt"] / CATEGORY_LIST);

    $view_query = "SELECT * FROM `product` WHERE `cate_id` = '$cateid'" . createLimitForPagingProduct($p);
    $view_result = execute_query($view_query);






    if ($p > $max_page) {
        $p = $max_page;
    }
    ?>
    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li><a href="battlefield-hardline"><img src="data1/images/battlefieldhardline309691920x1080.jpg" alt=" Battlefield Hardline" title=" Battlefield Hardline" id="wows1_0"/></a></li>
                <li><a href="dragon-age-inquisition"><img src="data1/images/dragon_age_3_inquisition_game1920x1080.jpg" alt="Dragon Age Inquisition" title="Dragon Age Inquisition" id="wows1_1"/></a></li>
                <li><a href="the-sims-4"><img src="data1/images/wallpaper_sims4_1920x1080.png" alt="The Sims 4" title="The Sims 4" id="wows1_2"/></a></li>
                <li><a href="titanfall"><img src="data1/images/titanfallgamehdwallpaper1920x10808582.jpg" alt="Titanfall" title="Titanfall" id="wows1_3"/></a></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title=" Battlefield Hardline"><span>1</span></a>
                <a href="#" title="Dragon Age Inquisition"><span>2</span></a>
                <a href="#" title="The Sims 4"><span>3</span></a>
                <a href="#" title="Titanfall"><span>4</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">html slider</a> by WOWSlider.com v7.6</div>
        <div class="ws_shadow"></div>
    </div>	
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->


    <div id="game-list" class="container main-content">
        <div class="paging pagination">
            <ul>
                <li class="prev"><a href="category.php?cateid=<?php echo $cateid ?>&p=<?php echo $p - 1; ?>"><i class="icon-previous"></i>Prev</a></li>
                <?php
                for ($i = 1; $i <= $max_page; $i++) {
                    if ($i == $p) {
                        ?>
                        <li class="active"><a href="category.php?cateid=<?php echo $cateid ?>&p=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php } else {
                        ?>
                        <li><a href="category.php?cateid=<?php echo $cateid ?>&p=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php
                    }
                }
                ?>
                <li class="next"><a href="category.php?cateid=<?php echo $cateid ?>&p=<?php echo $p + 1; ?>"><i class="icon-next"></i>Next</a></li>
            </ul>
        </div>






        <table>
            <tr>
                <?php
                $o = 1;
                while ($view_row = mysqli_fetch_assoc($view_result)) {
                    ?>
                    <td>
                        <a class="link" href="product_info.php?productid=<?php echo $view_row['product_id'] ?>" title="<?php echo $view_row['title'] ?>" >
                            <img class="img-back" src="<?php echo $view_row['image5'] ?>">
                            <h1><?php echo $view_row['title'] ?></h1>
                            </br>
                            <h2><?php echo $view_row['price'] * EXCHANGE_RATE ?>đ</h2>
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
                <li class="prev"><a href="category.php?cateid=<?php echo $cateid ?>&p=<?php echo $p - 1; ?>"><i class="icon-previous"></i>Prev</a></li>
                <?php
                for ($i = 1; $i <= $max_page; $i++) {
                    if ($i == $p) {
                        ?>
                        <li class="active"><a href="category.php?cateid=<?php echo $cateid ?>&p=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php } else {
                        ?>
                        <li><a href="category.php?cateid=<?php echo $cateid ?>&p=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php
                    }
                }
                ?>
                <li class="next"><a href="category.php?cateid=<?php echo $cateid ?>&p=<?php echo $p + 1; ?>"><i class="icon-next"></i>Next</a></li>
            </ul>
        </div>
        
        
        
        
        
        
        
    </div>

</body>
<?php
require_once 'footer.php';
?>