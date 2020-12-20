<?php
session_start(); 
include('config.php');
$username=$_POST['username'];
$password=$_POST['password'];
$sql ="select * from dangky where tenkhachhang='$username' and matkhau=md5('$password') and role=1 limit 1";
$query =mysqli_query($mysqli, $sql);
$nums = mysqli_num_rows($query);
if($nums>0){
	$_SESSION['home.php']=$username;
    $_SESSION['login']="allowed";
	if(isset($_GET["quanly"]))
	{
		header('location:index.php?quanly=Quanlychitietsp&acount=them');
	}
	else{
			header('location:home.php?quanly=Quanlychitietsp&acount=them');

	}
	}else{
		header('location:index.php');
	}
 ?>
