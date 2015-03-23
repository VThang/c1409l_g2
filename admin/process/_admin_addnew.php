<?php
include_once '../../include/config.php';
include_once '../../include/functions.php';
include_once '../../include/process.php';

$username = post("username");
$password = post("password");
$fullname = post("fullname");
execute_query("INSERT INTO `admin` VALUES (NULL, '$username','$password','$fullname', NULL);");
redirect("../admin_list.php");
?>