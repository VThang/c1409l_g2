<?php 
include_once '../../include/config.php';
include_once '../../include/functions.php';
include_once '../../include/process.php';

function count_session(){
	// kiem tra xem session count chua co thi tao ra va gan =0
	if ( !isset($_SESSION["count"]) ) {
		$_SESSION["count"] = 0;
	}
	
	$_SESSION["count"]++;
	echo "So lan vao trang :" + $_SESSION["count"];
}


function count_demo(){
	$count++;
	echo "So lan vao trang :" + $count;
}