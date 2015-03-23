<?php
include_once '../../include/config.php';
include_once '../../include/functions.php';
include_once '../../include/process.php';

$adminid = post("adminid");
$username = post("username");
$password = post("password");
$fullname = post("fullname");
$query = "UPDATE `admin` SET `Username`='$username', `Password`='$password', `Fullname`='$fullname' WHERE `adminID`='$adminid'";

execute_query($query);

redirect("../admin_list.php");
?>