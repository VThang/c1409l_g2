<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require_once './session.php';

function delete() {
    $customer_id = get('customer_id');
    $query = "DELETE FROM `customer` WHERE `customer_id` = '$customer_id'";
    execute_query($query);
    redirect('../customer_list_1.php');
    
}

function add() {
    $email = post('email');
    $name = post('name');
    $phone = post('phone');
    $query = "INSERT INTO `customer` VALUES (NULL, '$email', '$name', '$phone')";
    execute_query($query);
    redirect('../customer_list_1.php');
}