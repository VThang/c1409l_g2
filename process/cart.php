<?php

require_once '../include/config.php';
require_once '../include/functions.php';
require_once '../include/process.php';

function add_new() {
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    $cart = $_SESSION["cart"];
    /// 

    $productid = get("productid");

    if (array_key_exists($productid, $cart)) {
        $cart[$productid] = $cart[$productid] + 1;
    } else {
        $cart[$productid] = 1;
    }

    $_SESSION["cart"] = $cart;
    redirect("../product_info.php?productid=$productid");
}

function remove() {
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    $cart = $_SESSION["cart"];
    ///

    $productid = get("productid");
    unset($cart[$productid]);

    $_SESSION["cart"] = $cart;
    redirect("../cart.php");
}

function update() {
    $a_quantity = post('quantity');
    $i = 0;
    $queryview = "SELECT * FROM `product` WHERE `product_id` IN (";
    $comma = "";
    foreach ($_SESSION["cart"] as $key => $value) {
        $queryview .= $comma . $key;
        $comma = ",";
    }
    $queryview .= ")";
    $resultview = execute_query($queryview);
    
    while ($row = mysqli_fetch_assoc($resultview)) {
        $_SESSION["cart"][$row["product_id"]] = $a_quantity[$i];
        echo $_SESSION["cart"][$row["product_id"]];
        $i++;
    }
    redirect("../cart.php");
}

function checkout() {
    redirect("../checkout.php");
}

function select() {
    $do = post("btnsubmit");
    if ($do == 'update') {
        update();
    } else {
        checkout();
    }
}
