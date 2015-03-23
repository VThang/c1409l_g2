<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paygames</title>
        <link href="../css/global.css" type="text/css" rel="stylesheet" media="all" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="js/unslider.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800|Roboto&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    </head>

<?php
require '../header.php';
?>
<h1>form</h1>
<form action="#">
	<table>
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" id="username" /></td>
		</tr>

		<tr>
			<th>Password</th>
			<td><input type="password" name="Password" id="Password" /></td>
		</tr>

		<tr>
			<th>Fullname</th>
			<td><input type="text" name="Fullname" id="Fullname" /></td>
		</tr>

		<tr>
			<th>email</th>
			<td><input type="text" name="email" id="email" /></td>
		</tr>
	</table>
</form>
<?php
require '../footer.php';
?>