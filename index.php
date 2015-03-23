<?php 
require_once 'include/config.php';
require_once 'include/functions.php';

$file="home.php";
if (isset($_SERVER['PATH_INFO'])){
    $file = $_SERVER['PATH_INFO'].".php";
}

include "$file";
