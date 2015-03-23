<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product_info</title>
        <link href="css/global.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/product.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <link href="bxslider/jquery.bxslider.css" rel="stylesheet" />
        <script src="bxslider/jquery.bxslider.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.bxslider').bxSlider({
                    mode: 'fade',
                    adaptiveHeight: true
                });
            });
        </script>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>

    <?php
    require_once 'header.php';

    $productid = get('productid');

    $comment_query = "SELECT * FROM `comment` WHERE `product_id` = '$productid'";
    $comment_result = execute_query($comment_query);

    $comment_count_query = "SELECT COUNT(*) as cnt FROM `comment` WHERE `product_id` = '$productid'";
    $comment_count = execute_query($comment_count_query);

    $title_query = "SELECT `title` FROM `product` WHERE `product_id` = '$productid'";
    $title_result = execute_query($title_query);

    $prdetails_query = "SELECT `product_details` FROM `product` WHERE `product_id`= '$productid'";
    $prdetails_result = execute_query($prdetails_query);

    $rd_query = "SELECT `release_date` FROM `product` WHERE `product_id`= '$productid'";
    $rd_result = execute_query($rd_query);

    $price_query = "SELECT `price` FROM `product` WHERE `product_id`= '$productid'";
    $price_result = execute_query($price_query);
    ?>

    <div class="container">
        <div id="left_column">
            <div id="product_img">
                <ul class="bxslider">
                    <li width="795px"><img src="images/Demo/Dying-Light-logo.jpg" width="795px"/></li>
                    <li width="795px"><img src="images/Demo/Dying-Light-Nighttime-Gameplay.jpg" width="795px"/></li>
                    <li width="795px"><img src="images/Demo/5eMBbKea5tIahMDdzFR9kHEybOEbXOM8_gsm_169_dyinglight_walkthru_multi_ot_081613_640.jpg" width="795px"/></li>
                </ul>
            </div>

            <div id="product_name">
                <h2>
                    <strong>
                        <?php
                        $title_row = mysqli_fetch_assoc($title_result);
                        echo $title_row['title'];
                        ?>
                    </strong>
                </h2>              
            </div>

            <div id="divider_1">
                GAME'S DETAIL
            </div>

            <div id="product_detail">
                <?php
                $prdetails_row = mysqli_fetch_assoc($prdetails_result);
                echo $prdetails_row['product_details'];
                ?>
            </div>           



            <div id="divider_1">
                COMMENTS
            </div>
            <div id="customer_comment">
                <form action="process/comment.php?do=add_new" method="post">
                    <input type="hidden" name="productid" value="<?php echo $productid ?>">
                    <table style="padding-left: 10px";>
                        <tr>
                            <th>
                                Email
                            </th>
                            <td>
                                <input type="email" name="email" width="800px" height="50px"/>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Title
                            </th>
                            <td>
                                <input type="text" name="title" width="800px" height="50px"/>
                            </td>
                        </tr>   
                        <tr>
                            <th>
                                Comment
                            </th>
                            <td>
                                <textarea id="cm_content" name="cm_content">
                                </textarea> 
                                <script>
            CKEDITOR.replace('cm_content');
                                </script>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <button type="submit" id="cm_submit">Send</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="comments_display">

                <?php
                while ($comment_row = mysqli_fetch_assoc($comment_result)) {
                    ?>
                    <hr/>
                    <div class="comment">
                        <table class="comment-table">
                            <thead>
                                <tr>
                                    <th>
                                        Email
                                    </th>
                                    <td>
                                        <?php
                                        echo $comment_row['email'];
                                        ?>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        Title
                                    </th>
                                    <td>
                                        <?php
                                        echo $comment_row['title'];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Comments
                                    </th>
                                    <td>
                                        <?php
                                        echo $comment_row['content'];
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                <?php } ?>
            </div>
        </div>
        <div id="middle_column">
            <!-- cái này để chia màn hình, kệ nó -->
        </div>
        <div id="right_column">
            <div id="divider_n2">
            </div>    
            <div id="release_date">   
                <div style="display: block; width: 80px; float: left; padding-left: 10px;">
                    <img src="images/Demo/calendar-128.png" width="60px"/>
                </div>
                <div id="rd_ds">
                    Release date <br/>
                    <?php
                    $rd_row = mysqli_fetch_assoc($rd_result);
                    echo $rd_row['release_date'];
                    ?>
                </div>
                <div id="divider_n2">
                </div>
                <div style="display: block; float: left; width: 320px;">
                    <div style="display: block; width: 80px; float: left; padding-left: 10px;">
                        <img src="images/Demo/price_tag.png" width="60px"/>
                    </div>
                    <div id="price_ds">
                        <?php
                        $price_row = mysqli_fetch_assoc($price_result);
                        echo $price_row['price'];
                        ?>
                    </div>
                </div>

            </div>
            <div id="divider_n2">
            </div>
            <div id="download">
                <a href="process/cart.php?do=add_new&productid=<?php echo $productid ?>"><img src="images/Demo/add-to-cart.png" width="280px"/></a>
            </div>
            <div id="divider_n2">
            </div>
            <div id="divider">
                ALSO RELATED
            </div>
            <div id="divider_n2">
            </div>
            <div id="related_links">
                <a href="#">other games</a> <br/>
                <a href="#">other games</a> <br/>
                <a href="#">other games</a> <br/>
                <a href="#">other games</a> <br/>
                <a href="#">other games</a> <br/> 
            </div>
            <div id="divider_n2">
            </div>
            <div id="divider">
                ADVERTISEMENTS
            </div>
            <div id="divider_n2">
            </div>
            <div id="advertisement">
                <img src="images/Demo/Logo with lolly.jpg" width="320px"/>
            </div>
        </div>
        <div id="page_divider"></div>

    </div>


    <?php
    require_once 'footer.php';
    ?>
    