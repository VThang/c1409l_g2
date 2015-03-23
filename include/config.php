<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","c1409l_g2");
define("PAGE_ROW", 10);

session_start();
global $connection;
// nếu như không kết nối được db => die và thoong báo
if( ! ($connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)) ) {
    die("Khong ket noi duoc DB");
}

mysqli_query($connection, "SET NAMES 'utf8'");


/*
 * false, NULL, 0 => if sẽ sai
 * true, NOT NULL, NOT 0 => if sẽ sai
 *  */