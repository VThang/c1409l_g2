<?php

require_once '../include/config.php';
require_once '../include/functions.php';
require_once '../include/process.php';

function register() {
    $email = post('email');
    $name = post('name');
    $phone = post('phone');

    $query = "INSERT INTO `customer` VALUES (NULL, '$email', '$name', '$phone')";
    execute_query($query);
    $_SESSION['register_email'] = $email;

    
    redirect("../email/email_welcome.php?email=$email");
}

function method1() {
    redirect('../online_banking.php');
}

function method2() {
    redirect('../mobile_card.php');
}

function method3() {
    redirect('../store.php');
}

function method() {
    date_default_timezone_get();
    $date = date('Y/m/d');

    $queryview = "SELECT * FROM `product` WHERE `product_id` IN (";
    $comma = "";
    $i = 0;
    foreach ($_SESSION["cart"] as $key => $value) {
        $queryview .= $comma . $key;
        $comma = ",";

        $productid[$i] = $key;
        $quantity[$i] = $value;
        $i++;
    }

    $queryview .= ")";
    $resultview = execute_query($queryview);
    $a = 0;
    while ($row = mysqli_fetch_assoc($resultview)) {
        $import_price[$a] = $row['price'];
        $export_price[$a] = ($import_price[$a] * 15000);

        $a++;
    }

    $method = post('method');
    $email = post('email');
    $name = post('name');
    $phone = post('phone');
    $productquantity = count($_SESSION["cart"]);

    $customer_query = "SELECT * FROM `customer` WHERE `email` = '$email'";
    $customer_result = execute_query($customer_query);
    $customer_row = mysqli_fetch_assoc($customer_result);
    $customerid = $customer_row['customer_id'];


    $order_query = "INSERT INTO `order` VALUES (NULL, '$productquantity', '$date', '$customerid', '5', '5', '$method')";
    execute_query($order_query);

    $order_query = "SELECT * FROM `order` WHERE order_id = (SELECT MAX(order_id) FROM `order`)";
    $order_result = execute_query($order_query);
    $order_row = mysqli_fetch_assoc($order_result);
    $orderid = $order_row['order_id'];

    for($b = 0; $b < $i; $b++) {
      $order_details_query = "INSERT INTO `order_details` VALUES (NULL, '$orderid', '$productid[$b]', '$import_price[$b]', '$export_price[$b]', '$quantity[$b]')";
      execute_query($order_details_query);
    }
    $cart_session = $_SESSION['cart'] ;
    redirect("../email/email_invoice.php?email=$email&method=$method&orderid=$orderid");
}

function select() {
    $method = get('method');
    unset($_SESSION['cart']);
    
    if ($method == '1') {
        method1();
    } elseif ($method == '2') {
        method2();
    } elseif ($method == '3') {
        method3();
    } else {
        echo 'error';
    }
    
}