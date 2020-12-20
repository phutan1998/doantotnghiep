<?php
	include('../config.php');
	$id=$_GET['id'];
	$tensp=$_POST['tensp'];
	$soluonghang=$_POST['soluonghang'];
	$mota=$_POST['motasp'];
	$gia=$_POST['gia'];
	$thuonghieusp=$_POST['thuonghieusp'];
	$xuatxu=$_POST['xuatxu'];
	$loaisp=$_POST['loaisp'];
	$thutu=$_POST['thutu'];
	$mucgiam=$_POST['mucgiam'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tam=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tam,'Hinhbaiviet/'.$hinhanh);
	if(isset($_POST['them'])){
		//them
		$sql="insert into chitietsp (tensp,soluonghang,hinhanh,mucgiam,gia,xuatxu,mota, id_thuonghieu,id_loaisp,thutu) values ('$tensp','$soluonghang','$hinhanh','$mucgiam','$gia','$xuatxu','$mota','$thuonghieusp','$loaisp','$thutu')";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlychitietsp&acount=them');
	}else if(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
		$sql="update chitietsp set tensp='$tensp',soluonghang='$soluonghang',hinhanh='$hinhanh',mucgiam='$mucgiam',gia='$gia',xuatxu='$xuatxu',mota='$mota',id_thuonghieu='$thuonghieusp',id_loaisp='$loaisp',thutu='$thutu' where id_sp='$id'";
		}else{
			$sql="update chitietsp set tensp='$tensp',soluonghang='$soluonghang',mucgiam='$mucgiam',gia='$gia',xuatxu='$xuatxu',mota='$mota',id_thuonghieu='$thuonghieusp',id_loaisp='$loaisp',thutu='$thutu' where id_sp='$id'";
		}
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlychitietsp&acount=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from chitietsp where id_sp='$id'";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlychitietsp&acount=them');
	}
?>