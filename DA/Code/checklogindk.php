<?php
    session_start(); 
    include('Content_right_dangky.php');
    include('../admin/config.php');
  	$tenkhachhang=$_POST['username'];
  //	$hinhdaidien=$_POST['hinhdaidien'];
	$matkhau=$_POST['matkhau'];
	$sql="select * from dangky where tenkhachhang='$tenkhachhang' and matkhau=md5('$matkhau') and role = 0 limit 1" ;
	$query=mysqli_query($mysqli, $sql);
	$kt=0;
	while($dong=mysqli_fetch_array($query, MYSQLI_ASSOC)){
		$kt=1;
		$_SESSION['hinh']=$dong['hinhdaidien'];
        $_SESSION['dangnhap']=$dong['tenkhachhang'];
	}
	if ($kt){
		
        $_SESSION['logindangky']="allowed";
		 header('location:../index.php');
	}
	else{
echo "<script>alert('Bạn nhập sai tài khoản hay mật khẩu'); window.location = '../Code/logindangky.php';</script>";}
    $nums=mysqli_num_rows($query);
    
 ?>


