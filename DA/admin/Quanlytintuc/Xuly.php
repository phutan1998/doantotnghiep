<?php
	include('../config.php');
	$id=$_GET['id'];
	$tieude=$_POST['tieude'];
	$tieudekhongdau=$_POST['tieudekhongdau'];
	$tomtat=$_POST['tomtat'];
	$noidung=$_POST['noidung'];
	$ngaydang=$_POST['ngaydang'];
	$id_thuonghieusp=$_POST['thuonghieusp'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tam=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tam,'hinh/'.$hinhanh);
	if(isset($_POST['them'])){
		//them
		$sql="insert into tintuc (tieude,tieudekhongdau,tomtat,noidung,hinhanh,ngaydang,id_thuonghieu) values ('$tieude','$tieudekhongdau','$tomtat','$noidung','$hinhanh','$ngaydang', '$id_thuonghieusp')";
	
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlytintuc&acount=them');
	}else if(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
		$sql="update tintuc set tieude='$tieude',tieudekhongdau='$tieudekhongdau',tomtat='$tomtat',noidung='$noidung',hinhanh='$hinhanh',ngaydang='$ngaydang',id_thuonghieu='$id_thuonghieusp' where id_tintuc='$id'";
		}else{
			$sql="update tintuc set tieude='$tieude',tieudekhongdau='$tieudekhongdau',tomtat='$tomtat',noidung='$noidung',ngaydang='$ngaydang',id_thuonghieu='$id_thuonghieusp' where id_tintuc='$id'";
		}
		 // echo $sql,exit();
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlytintuc&acount=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from tintuc where id_tintuc='$id'";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlytintuc&acount=them');
	}
?>