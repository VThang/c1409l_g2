<?php

require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require_once './session.php';

function add_new() {
    $username = post("username");
    $password = md5(post("password"));
    $fullname = post("fullname");
    execute_query("INSERT INTO `admin` VALUES (NULL, '$username','$password','$fullname', NULL);");
    redirect("../admin_list.php");
}

function update() {
    $adminid = get("adminid");
    $username = post("username");
    $password = md5(post("password"));
    $fullname = post("fullname");
    $query = "UPDATE `admin` SET `Username`='$username', `Password`='$password', `Fullname`='$fullname' WHERE `adminID`='$adminid'";
    
    execute_query($query);
    redirect("../admin_list.php");
}

function delete() {
    $adminid = get("adminid");
    $query = "DELETE FROM `admin` WHERE `adminID`='$adminid'";
    
    execute_query($query);
    redirect("../admin_list.php");
}

function login() {
    $username = post('username');
    $password = md5(post('password'));
    $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $result = execute_query($query);
    // $count = mysqli_num_rows($result);

    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["username"] = $username;
        redirect("../dashboard.php");
    } else {
        redirect("../admin_login.php?error=1");
    }
}

/*
  function do_login2() {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM `admin` WHER E`username`='$username' AND `password`='$password'";
  $result = execute_query($query);
  $count = mysql_num_rows($result);

  if ($row = mysqli_fetch_assoc($result)) {
  $_SESSION["username"] = $username;
  redirect("../admin_list.php");
  } else {
  redirect("../admin_login.php?error=1");
  }
  }
 */

function logout() {
    unset($_SESSION["username"]);
    session_destroy();
    redirect("../admin_login.php?error=3");
}

function do_test() {
    die("TEST OK");
}


?>