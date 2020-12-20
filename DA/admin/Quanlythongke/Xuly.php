<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenthuonghieu=$_POST['tenthuonghieu'];
	$thutu=$_POST['thutu'];
	if(isset($_POST['them'])){
		//them
		$sql="insert into thuonghieusp (tenthuonghieu,thutu) values ('$tenthuonghieu','$thutu')";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlythuonghieusp&acount=them');
	//	echo 'abc' ;exit(0);
	//	header('location:../index.php?quanly=Quanlythuonghieusp&acount=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update thuonghieusp set tenthuonghieu='$tenthuonghieu',thutu='$thutu' where id_thuonghieu='$id'";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlythuonghieusp&acount=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from thuonghieusp where id_thuonghieu='$id'";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlythuonghieusp&acount=them');
	}
?>