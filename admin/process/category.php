<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require_once './session.php';

function update() {
    $cateid = get("categoryid");
    $catename = post("cate_name");
    $query = "UPDATE `category` SET `cate_name`='$catename' WHERE `cate_id`='$cateid'";

    execute_query($query);
    redirect("../category_list.php");
}

function delete() {
    $cateid = get("categoryid");
    $query = "DELETE FROM `category` WHERE `cate_id`='$cateid'";
    
    execute_query($query);
    redirect("../category_list.php");
}

function add_new() {
    $catename = post("cate_name");
    $query = "INSERT INTO `category` VALUES (NULL, '$catename');";
    
    execute_query($query);
    redirect("../category_list.php");
}