<?php

require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require_once './session.php';

function add_new() {
    $remove[] = "'";
    $title = post("title");
    $title = str_replace($remove, "", $title);
    $price = post("price");
    $cate_id = post("cate_id");
    $release_date = post("release_date");
    $product_details = post("product_details");
    $product_details = str_replace($remove, "", $product_details);
    $image1 = post("image1");
    $image2 = post("image2");
    $image3 = post("image3");
    $image4 = post("image4");
    $image5 = post("image5");
    $query = "INSERT INTO `product` VALUES (NULL, '$title', '$price', '$cate_id', '$release_date', '$product_details', '$image1', '$image2', '$image3', '$image4', '$image5');";

    execute_query($query);
    redirect("../product_list.php");
}

function update() {
    $remove[] = "'";
    $productid = get("productid");
    $title = post("title");
    $title = str_replace($remove, "", $title);
    $price = post("price");
    $cate_id = post("cate_id");
    $release_date = post("release_date");
    $product_details = post("product_details");
    $product_details = str_replace($remove, "", $product_details);
    $image1 = post("image1");
    $image2 = post("image2");
    $image3 = post("image3");
    $image4 = post("image4");
    $image5 = post("image5");
    $query = "UPDATE `product` SET `title`='$title', `price`='$price', `cate_id`='$cate_id', `release_date`='$release_date', `product_details`='$product_details', `image1`='$image1', `image2`='$image2', `image3`='$image3', `image4`='$image4', `image5`='$image5' WHERE `product_id`='$productid'";
    
    execute_query($query);
    redirect("../product_list.php");
}

function delete() {
    $productid = get("productid");
    $query = "DELETE FROM `product` WHERE `product_id`='$productid'";

    execute_query($query);
    redirect("../product_list.php");
}
