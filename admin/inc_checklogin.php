<?php
if (!isset($_SESSION["username"])) {
	redirect("admin_login.php?error=2");
}
