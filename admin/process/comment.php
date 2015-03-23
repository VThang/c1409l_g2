<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require_once './session.php';

function add_new() {
    $productid = post("product_id");
    $email = post("email");
    $title = post("title");
    $content = post("content");
    $query = "INSERT INTO `comment` VALUES (NULL, '$productid', '$email', '$title', '$content');";

    $test2 = execute_query($query);
    redirect("../comment_list.php");
}

function update() {
    $commentid = get("commentid");
    $productid = post("product_id");
    $email = post("email");
    $title = post("title");
    $content = post("content");
    $query = "UPDATE `comment` SET `product_id`='$productid', `email`='$email', `title`='$title', `content`='$content' WHERE `comment_id`='$commentid'";

    execute_query($query);
    redirect("../comment_list.php");
}

function delete() {
    $commentid = get("commentid");
    $query = "DELETE FROM `comment` WHERE `comment_id`='$commentid'";
    
    execute_query($query);
    redirect("../comment_list.php");
}