<?php
require_once '../include/config.php';
require_once '../include/functions.php';
require_once '../include/process.php';



function add_new(){  
    $productid = post('productid');
    $email = post('email');
    $title = post('title');
    $content = post('cm_content');
    
    $query = "INSERT INTO `comment` VALUES (NULL, '$productid', '$email', '$title', '$content')";
    
    $result = execute_query($query);
    redirect("../product_info.php?productid=" . $productid);
}

