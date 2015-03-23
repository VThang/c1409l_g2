<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require_once './session.php';

function add_new() {
    $product_quantity = '0';
    $orderdate = post('order_date');
    $customerid = post('customer_id');
    $impstat = '0';
    $expstat = '0';
    $remarks = post('remarks');
    
    $query1 ="INSERT INTO `order` VALUES (NULL, '$product_quantity', '$orderdate', '$customerid', '$impstat', '$expstat', '$remarks');";
    execute_query($query1);
    /*
    $query2 = "SELECT order_id FROM `order` ORDER BY order_id DESC LIMIT 1;";
    $result = execute_query($query2);
    
    $row = mysqli_fetch_assoc($result);
    $orderid = $row['order_id'];
    
    
    
    $i = 0;
    while ($i < $product_quantity){
        $query3 = "INSERT INTO `order_details` VALUES ('$orderid', 0, 0, 0, 1);";
        $test = execute_query($query3);
        $i++;
    }*/
    redirect("../order_details_addnew.php?orderid=". $orderid);
}

function update() {
    $orderid = get('orderid');
    $orderdate = post('order_date');
    $customerid = post('customer_id');
    $product_quantity = post('product_quantity');
    $impstat = post('import_status');
    $expstat = post('export_status');
    $remarks = post('remarks');
    
    $query1 = "UPDATE `order` SET `order_date` = '$orderdate', `customer_id` = '$customerid', `product_quantity`='$product_quantity', `import_status` = '$impstat', `export_status` = '$expstat', `remarks` = '$remarks' WHERE `order_id` = '$orderid';";
    
    execute_query($query1);
    redirect("../order_details_edit.php?orderid=". $orderid);
}

function delete() {
    $orderid = get("orderid");
    
    $query2 = "DELETE FROM `order_details` WHERE `order_id`='$orderid'";
    execute_query($query2);
    
    $query1 = "DELETE FROM `order` WHERE `order_id`='$orderid'";
    execute_query($query1);
    redirect("../order_list.php");
}