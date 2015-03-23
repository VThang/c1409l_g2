<?php
include_once 'include/function_db.php';


$comma = "";
$values = "";
for ($i = 0; $i < 55; $i++) {
	$values .= $comma . "(NULL, 'Category $i')";
	$comma = ",";
}

$query = "INSERT INTO Category VALUES $values";
//die($query);
execute_query($query);