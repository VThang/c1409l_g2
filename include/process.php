<?php

$function_name = get("do");

// kiểm tra xem đã khai báo hàm chưa
if (function_exists($function_name)){
	// gọi hàm theo tên biến
    $function_name();
} else {
    handleNoFunction();
}
 
