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

    if ((isset($_SESSION["cart"])) && count($_SESSION["cart"]) != 0) {
        $cart = $_SESSION["cart"];
        $i = count($_SESSION["cart"]);

        $queryview = "SELECT * FROM product WHERE product_id IN (";
        $comma = "";
        foreach ($_SESSION["cart"] as $key => $value) {
            $queryview .= $comma . $key;
            $comma = ",";
        }

        $queryview .= ")";
        $resultview = execute_query($queryview);
    } else {
        
    }
    $o = 0;
    ?>
    <main>
        <div class="container main-content">
            <div class="main-content">
                <h2 class="center">My Shopping Cart</h2>
                <form action="process/cart.php?do=select" method="post">
                    <?php
                    if (isset($_SESSION["cart"])) {
                        if (count($_SESSION["cart"]) != 0) {
                            ?>
                            <table class="cart-item">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th style="text-align: left;">Product Name</th>
                                        <th>Product Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($resultview)) {
                                        ?>
                                        <tr>
                                            <td class="img"><img src="<?php echo $row["image1"] ?>" width="80px" /></td>
                                            <td class="product"><h5><?php echo $row["title"] ?></h5></td>
                                            <td class="price"><?php
                                                if (isset($row["price"])) {
                                                    echo $row["price"];
                                                } else {
                                                    echo 0;
                                                }
                                                ?> <i class="fa fa-usd"></i></td>
                                            <td class="quantity"><input type="number" value="<?php echo $_SESSION["cart"][$row["product_id"]] ?>" name="quantity[<?php echo $o; ?>]" /></td>
                                            <td class="total"><?php echo $cart[$row["product_id"]] * $row["price"]; ?> <i class="fa fa-usd"></td>
                                            <td class="action"><a class="link" href="process/cart.php?do=remove&productid=<?php echo $row["product_id"] ?>" onclick="return confirm('Are you sure to delete this Product?')"><i class="fa fa-trash-o fa-2x"></i></a></td>
                                        </tr>
                                        <?php
                                        $o++;
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td style="text-align: center"><button type="submit" id="update" value="update" name="btnsubmit"/>Update</td>
                                        <td style="text-align: center">100$</td>
                                        <td style="text-align: center"><button type="submit" id="update" value="checkout" name="btnsubmit"/>Checkout</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <?php
                        }
                    } else {
                        echo "<br/><h3 style='text-align: center;'>You don't have any product in your cart!</h1>";
                    }
                    ?>
                </form>                
                <br/><br/>
            </div>
        </div>
    </main>
    <?php
    require_once 'footer.php';
    ?>