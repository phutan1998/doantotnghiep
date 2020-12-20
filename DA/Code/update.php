<?php
include_once('../admin/config.php');
if(isset($_GET["id"]) && isset($_GET["sl"])){
    $id = $_GET["id"];
    $sl = $_GET["sl"];
    $sql ="UPDATE chitietdonhang SET soluong = '$sl' WHERE  id = '$id'";
	mysqli_query($mysqli, $sql);
    header('location:giohang.php');
}
       
?>