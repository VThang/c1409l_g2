<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Cart - Paygames</title>
        <link href="css/global.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/checkout.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="js/unslider.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800|Roboto&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    </head>
    <?php
    require_once 'header.php';
    if (count($_SESSION["cart"]) != 0) {
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
    $is_register = post('is_register');

    $register_true = 'true';
    $register_false = 'false';

    $true_register = post('true_register');
    $email = post('email');
    $true_query = "SELECT * FROM `customer` WHERE `email`='$email'";
    $true_result = execute_query($true_query);
    $true_row = mysqli_fetch_assoc($result);
    ?>
    <main>
        <div class="container main-content  ">
            <div class="main-content">
                <div class="content">
                    <div class="select">
                        <p>Already registered?<p>
                        <form action="checkout.php" method="post" id="formReg">
                            <label><input type="radio" name="is_register" value="true"  onclick="$('#formReg').submit()" />Registered</label>
                            <label><input type="radio" name="is_register" value="false" onclick="$('#formReg').submit()" />New member</label>
                        </form>
                        <?php
                        if ($is_register != '') {
                            if ($is_register == 'true') {
                                ?>
                                <form action="checkout.php" method="post" name="true_register" id="formEmail">
                                    <table>
                                        <input type="hidden" name="is_register" value="true" />
                                        <tr>
                                            <th>Email</th>
                                            <td><input type="text" name="email" /></td>
                                            <td><button onclick="$('#formEmail').submit()">Submit</button></td>
                                        </tr>
                                        <?php
                                        if ($true_register != '') {
                                            $email = post('email');
                                            $true_query = "SELECT * FROM `customer` WHERE `email`='$email'";
                                            $true_result = execute_query($true_query);
                                            $true_row = mysqli_fetch_assoc($result);
                                            ?>
                                            <tr>
                                                <th>Name</th>
                                                <td><input type="text" value="<?php echo $true_row['name'] ?>" readonly/></td>
                                            </tr>
                                            <tr>
                                                <th>Phone number</th>
                                                <td><input type="text" value="<?php echo $true_row['phone'] ?>" readonly/></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </table>
                                </form>

                                <?php
                            } else {
                                
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    require_once 'footer.php';
    ?>