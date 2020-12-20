<?php

if($_SESSION['login']!="allowed"){
	header('location: index.php');
}
 ?><body><center>

<div class="menu">
			<ul>				<li><a href="../index.php">HOME</a></li>
				<li><a href="home.php?quanly=Quanly&acount=them">QL LOẠI SP</a></li>
				<li><a href="home.php?quanly=Quanlythuonghieusp&acount=them">QL THƯƠNG HIỆU</a></li>	
				<li><a href="home.php?quanly=Quanlychitietsp&acount=them">QL C/TIẾT SP</a></li>
				<li><a href="home.php?quanly=Quanlydonhang&acount=them">QL ĐƠN HÀNG</a></li>
				<li><a href="home.php?quanly=Slide&acount=them">SLIDER</a></li>
				<li><a href="home.php?quanly=Quanlytintuc&acount=them">QL TIN TỨC</a></li>
				<li><a href="home.php?quanly=ThanhVien&acount=them">QL THÀNH VIÊN</a></li>
				<li><a href="home.php?quanly=Quanlythongke&acount=them&id=21">THỐNG KÊ</a></li>
				<li><a href="home.php?quanly=doimatkhau">ĐỔI M/KHẨU</a></li>
				<li><a href="logout.php">LOG OUT</a></li>

			</ul>
		</div>
	</center></body>