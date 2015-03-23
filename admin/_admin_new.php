<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin</title>
<script type="text/javascript" src="js/jquery-2.1.1.min.js">
</script>

<script  type="text/javascript">
	$(function(){
		$("#menu-link").click(function(){
			$("#menu-list").slideToggle();
		});		
	});
	
</script> 

<style>
body {
	padding: 0;
	margin: 0;
	witdth: 100%;
	font-family: tahoma;
	font-size: 0.8em;
}

#menu {
	background: navy;
	color: white;
	overflow: auto;
}

#menu-list{
	display:none;
}

#menu-link{
background:white;
clear:both;
width:100%;
text-align:right;
}

#menu .block{
	width:100px;
	float:left;
	padding:5px;
	border-right:1px dotted blue;
}

#menu .block h6{
	margin:0;
	padding:0;
	font-size:1.2em;
}

#menu ul {
	list-style: none;
	margin: 0;
	padding: 3px;
}

#menu ul li {
	padding: 3px;
}

#menu ul a {
	color: white;
	text-decoration: none;
}

#menu ul a:hover {
	color: yellow;
	text-decoration: underline;
}

#footer {
	text-align: center;
	font-style: italic;
	padding:10px 0;
	background: navy;
	color:grey;
}

table{
width:100%;

}

</style>
</head>
<body>
	<div id="wrapper">
		<div id="menu">
			<div id="menu-list">
				<div class="block">
					<h6>Lớp học</h6>	
					<ul>
						<li><a href="#">Danh sách</a></li>
						<li><a href="#">Thêm mới</a></li>
					</ul>
				</div>
				
				<div class="block">
					<h6>Giảng Viên</h6>	
					<ul>
						<li><a href="#">Danh sách</a></li>
						<li><a href="#">Thêm mới</a></li>
						<li><a href="#">Điểm danh</a></li>
					</ul>
				</div>
				
				<div class="block">
					<h6> Môn học</h6>	
					<ul>
						<li><a href="#">Danh sách</a></li>
						<li><a href="#">Thêm mới</a></li>
					</ul>
				</div>	
			</div>
			
			<div id="menu-link">
				<a href="#">Menu</a>
			</div>
		</div>
		
		

		<div id="main">
			<h1>main</h1>
			<table>
				<tr>
					<th>Username</th>
					<th>Password</th>
					<th>Fullname</th>
					<th>email</th>
				</tr>

				<tr>
					<td>Username</td>
					<td>Password</td>
					<td>Fullname</td>
					<td>email</td>
				</tr>

				<tr>
					<td>Username</td>
					<td>Password</td>
					<td>Fullname</td>
					<td>email</td>
				</tr>


				<tr>
					<td>Username</td>
					<td>Password</td>
					<td>Fullname</td>
					<td>email</td>
				</tr>

				<tr>
					<td>Username</td>
					<td>Password</td>
					<td>Fullname</td>
					<td>email</td>
				</tr>
			</table>
		</div>

		<div id="footer">footẻr footẻr footẻr footẻr footẻr footẻr
			footẻr footẻr footẻr footẻr footẻr footẻr footẻr footẻr footẻr footẻr
			footẻr footẻr</div>
	</div>
</body>
</html>
