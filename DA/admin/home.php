<?php
session_start(); 
if($_SESSION['login']!="allowed"){
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang quản trị nội dung website</title>
	<link rel="stylesheet" href="styleadmin.css">
</head>
<body>

	<div class="Khungchua">
|		<?php 
			include('config.php');
			include('header.php');
			include('menu.php');
			include('content.php');
			include('footer.php');

		 ?>
		

	</div>


</body>
</html>
