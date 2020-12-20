<?php
include_once('../admin/config.php');
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql ="DELETE FROM chitietdonhang WHERE  id = '$id'";
	mysqli_query($mysqli, $sql);
    header('location:giohang.php');
}
?>