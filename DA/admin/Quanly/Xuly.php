<?php
	include('../config.php');
	$id = $_GET['id'];
	$tenloaisp = $_POST['tenloaisp'];
	$thutu = $_POST['thutu'];
	if(isset($_POST['them'])){
		//them
		$sql ="insert into loaisp (tenloaisp,thutu) values ('$tenloaisp','$thutu')";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanly&acount=them');
		//echo 'abc' ;exit(0);
		//header('location:../home.php?quanly=Quanly&acount=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update loaisp set tenloaisp='$tenloaisp',thutu='$thutu' where id_loaisp='$id'";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanly&acount=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from loaisp where id_loaisp='$id'";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanly&acount=them');
	}
?>