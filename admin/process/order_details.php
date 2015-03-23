<?php

require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require_once './session.php';

function add_new() {
    $orderid = get('orderid');
    $productquantity = post('product_quantity');
    $query1 = "UPDATE `order` SET `product_quantity` = '$productquantity' WHERE `order_id` = '$orderid'";
    $a_productid = post('product_id');
    $a_importprice = post('import_price');
    $a_exportprice = post('export_price');
    $a_quantity = post('quantity');
    
    for ($i = 0; $i < $productquantity; $i++) {
        $productid = $a_productid[$i];
        $importprice = $a_importprice[$i];
        $exportprice = $a_exportprice[$i];
        $quantity = $a_quantity[$i];
        
        $query2 = "INSERT INTO `order_details` VALUES (NULL, '$orderid', '$productid', '$importprice', '$exportprice', '$quantity');";
        echo $query2;
        $result2 = execute_query($query2);
    }
    execute_query($query1);
    redirect("../order_details_list.php?orderid=" . $orderid);
}

function update() {
    $orderid = get('orderid');
    $product_quantity = post('product_quantity');
    $a_productid = post('product_id');
    $a_import_price = post('import_price');
    $a_export_price = post('export_price');
    $a_quantity = post('quantity');
    $a_detailsid = post('details_id');
    
    for ($i = 0; $i < $product_quantity; $i++) {
        $productid = $a_productid[$i];
        $importprice = $a_import_price[$i];
        $exportprice = $a_export_price[$i];
        $quantity = $a_quantity[$i];
        $detailsid = $a_detailsid[$i];
        
        $query = "UPDATE `order_details` SET `product_id` = '$productid', `import_price` = '$importprice', `export_price` = '$exportprice', `quantity` = '$quantity' WHERE `details_id` = '$detailsid'";
        execute_query($query);
    }
    
    redirect("../order_details_list.php?orderid=" . $orderid);
}

function delete() {
    $detailsid = get("detailsid");
    
    $query1 = "DELETE FROM `order_details` WHERE `details_id`='$detailsid'";
    execute_query($query1);
    redirect("../order_list.php");
}
