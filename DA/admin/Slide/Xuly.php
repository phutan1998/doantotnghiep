<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenhinh=$_POST['tenhinh'];
	$hinhanh=$_FILES['hinh']['name'];
	$hinhanh_tam=$_FILES['hinh']['tmp_name'];
	move_uploaded_file($hinhanh_tam,'Images/'.$hinhanh);
	if(isset($_POST['them'])){
		//them
		$sql="insert into slide  values (0,'$tenhinh','$hinhanh')";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Slide&acount=them');
		//echo 'abc' ;exit(0);
		//header('location:../home.php?quanly=Quanly&acount=them');
	}elseif(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
		$sql="update slide set tenhinh='$tenhinh',hinh='$hinhanh' where id_slide='$id'";
		}else{
			$sql="update slide set tenhinh='$tenhinh',hinh='$hinhanh' where id_slide='$id'";
		}
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Slide&acount=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from slide where id_slide='$id'";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Slide&acount=them');
	}
?>