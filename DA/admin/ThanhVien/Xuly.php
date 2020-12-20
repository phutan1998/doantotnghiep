<?php
	include('../config.php');
	$id=$_GET['id'];
	
	if(isset($_POST['them'])){
	
	
	}else{
		//xoa
		$sql="delete from dangky where id_khachhang='$id'";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=ThanhVien');
	}
?>