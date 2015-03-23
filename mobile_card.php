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
    require_once 'header.php';
    $order_query = "SELECT * FROM `order` WHERE `order_id` = (SELECT MAX(order_id) FROM `order`)";
    $order_result = execute_query($order_query);
    $order_row = mysqli_fetch_assoc($order_result);
           
    ?>
    <main>
        <div class="container main-content">
            <div class="main-content">
                <div style="width: 100%;">
                    <h1 style="text-align: center;">By Mobile card</h1>
                    <h3 style="text-align: center;">Your Invoice ID: <?php echo $order_row['order_id']; ?></h3>
                    <iframe seamless="seamless" src="http://napngay.com/tc/@trungnamcj241192@gmail.com" width="100%" height="463px"></iframe>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once 'footer.php';
    ?>