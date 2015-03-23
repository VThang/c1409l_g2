<?php

include_once '../../include/config.php';
include_once '../../include/functions.php';
include_once '../../include/process.php';


$username = $_POST['username'];
$password = $_POST['password'];



$query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
$result = execute_query($query);
$count = mysql_num_rows($result);

if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION["username"] = $username;
    redirect("../admin_list.php");
} else {
    redirect("../admin_login.php?error=1");
}
?>