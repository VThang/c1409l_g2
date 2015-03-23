<?php

include_once '../../include/config.php';
include_once '../../include/functions.php';
include_once '../../include/process.php';

unset($_SESSION["username"]);
redirect("../admin_login.php?error=3");

?>