<?php 


if(isset($_POST['doimatkhau'])){
 	$taikhoan = $_POST['username'];
	$matkhaucu = $_POST['passwordcu'];
	$matkhaumoi = $_POST['passwordmoi'];
	$sql_doimatkhau = mysqli_query($mysqli, "select * from dangky where tenkhachhang='$taikhoan' and matkhau=md5('$matkhaucu') and role=1 limit 1");
	$lay_dong = mysqli_num_rows($sql_doimatkhau);
	if($lay_dong == 0){
		 echo "<script>alert('Bạn nhập sai tài khoản hay mật khẩu'); window.location = '../admin/doimatkhauadmin.php';</script>";
	}else{
		$sql_capnhat=mysqli_query($mysqli, "update dangky set matkhau=md5('$matkhaumoi') where tenkhachhang='taikhoan'");
		echo "<script>alert('Bạn đã đổi mật khẩu thành công');</script>";
	}
}
 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Đổi mật khẩu admin</title>
 	<link rel="stylesheet" href="../CSS/style.css">
 	<link rel="stylesheet" href="styleadmin.css">
 </head>
 <body>
 	<center>
	<form action="" method="POST">
	<div class="formdangnhap1">
	<h1 >Đăng nhập bằng tài khoản của bạn </h1><br>
	<p class="img"><img src="../Images/logob1.jpg" alt="" ></p><br>
		
		<input type="text" name="username" value="" placeholder="Tên đăng nhập"><br>
		<input type="password" name="passwordcu" value="" placeholder="Mật khẩu cũ"><br>
		<input type="password" name="passwordmoi" value="" placeholder="Mật khẩu mới"><br>
			<input type="submit" name="doimatkhau" value="Xác nhận" style="color: white; font-weight: bold;font-size: 15px;background: #4084F2; position: relative;border-radius: 5px;height: 40px; "><br>
			
	</div>
	
	
	</form></center>

 </body>
 </html>