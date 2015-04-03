<?php

$STATUS = array();
$STATUS["1"] = "Online Banking";
$STATUS["2"] = "By Mobile Card";
$STATUS["3"] = "In our Store";
$STATUS["5"] = "Pending";
$STATUS["6"] = "Processing";
$STATUS["7"] = "Canceled";
$STATUS["8"] = "Complete";

 
//$STATUS[$stt];



/* Hàm rút gọn để chạy câu lệnh sql */

function execute_query($query) {
    global $connection;
    // $query = mysqli_real_escape_string($connection, $query);
    return mysqli_query($connection, $query);
}

function affected_row() {
    global $connection;
    // $query = mysqli_real_escape_string($connection, $query);
    return mysqli_affected_rows($connection);
}

/*
 * hàm dùng để chuyển hướng trang
 * */

function redirect($str) {
    header("location: $str");
}

/*
 * bắt lỗi  khi không có hàm xử lí
 */

function handleNoFunction() {
    
}

/*
 * bỏ ký tự đặc biệt để tránh hack
 * */

function escape_str($value) {
    if (get_magic_quotes_gpc()) {
        return addslashes($value);
    }
    return $value;
}

/*
 * lấy dữ liêu từ $_GET một cách an toàn
 * */

function get($param) {
    if (isset($_GET[$param])) {
        return escape_str($_GET[$param]);
    } else {
        return "";
    }
}

/*
 * lấy dữ liêu từ $_POST một cách an toàn
 * */

function post($param) {
    if (isset($_POST[$param])) {
        return escape_str($_POST[$param]);
    } else {
        return "";
    }
}

function createLimitForPaging($pageNumber) {
    if ($pageNumber < 1) {
        $pageNumber = 1;
    }
    $start = ($pageNumber - 1) * PAGE_ROW;
    return " LIMIT $start, " . PAGE_ROW;
}

function createLimitForPagingProduct($pageNumber) {
    if ($pageNumber < 1) {
        $pageNumber = 1;
    }
    $start = ($pageNumber - 1) * CATEGORY_LIST;
    return " LIMIT $start, " . CATEGORY_LIST;
}


function getMaxPage($table) {
    $count_query = "SELECT COUNT(*) AS cnt FROM $table";
    $count_result = execute_query($count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    //echo $count_row["cnt"];
    return ceil($count_row["cnt"] / PAGE_ROW);
}

function get_value_config($config) {
    $q_config = "SELECT config_value FROM config WHERE config_key='$config'";
    $q_result = execute_query($q_config);
    if ($q_result) {
        $row = mysqli_fetch_assoc($q_result);
        $value = $row["config_value"];
    } else {
        $value = "";
    }
    return $value;
}

function get_sub_value_config($config) {
    $q_config = "SELECT config_sub_value FROM config WHERE config_key='$config'";
    $q_result = execute_query($q_config);
    if ($q_result) {
        $row = mysqli_fetch_assoc($q_result);
        $value = $row["config_sub_value"];
    } else {
        $value = "";
    }
    return $value;
}

function save_value_config($config, $configvalue) {
    $q_config = "UPDATE `config` SET `config_value` = '$configvalue' WHERE `config_key` = '$config'";
    execute_query($q_config);

    return "";
}

function save_sub_value_config($config) {
    $configsubvalue = post("configsubvalue");
    $q_config = "UPDATE `config` SET `config_sub_value` = '$configsubvalue' WHERE `config_key` = '$config'";
    execute_query($q_config);

    return "";
}
function save_sub_value_config2($config, $configsubvalue) {
    $q_config = "UPDATE `config` SET `config_sub_value` = '$configsubvalue' WHERE `config_key` = '$config'";
    execute_query($q_config);

    return "";
}