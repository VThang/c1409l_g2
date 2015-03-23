<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require_once './session.php';


function add_new() {
    $email = post("email");
    $name = post("name");
    $phone = post("phone");
    $query = "INSERT INTO `customer` VALUES (NULL, '$email', '$name', '$phone');";

    execute_query($query);
    redirect("../customer_list.php");
}

function update() {
    $customerid = get("customerid");
    $email = post("email");
    $name = post("name");
    $phone = post("phone");
    $query = "UPDATE `customer` SET `email`='$email', `name`='$name', `phone`='$phone' WHERE `customer_id`='$customerid'";

    execute_query($query);
    redirect("../customer_list.php");
}

function delete() {
    $customerid = get("customerid");
    $query = "DELETE FROM `customer` WHERE `customer_id`='$customerid'";
    
    execute_query($query);
    redirect("../customer_list.php");
}