<?php
define("DB_HOST","202.150.213.34");
define("DB_USER","u211045742_vth1");
define("DB_PASS","A[LKjKEP78");
define("DB_NAME","u211045742_vth1");
define("PAGE_ROW", 10);
define("CATEGORY_LIST", 12);
define("EXCHANGE_RATE", 16000);

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