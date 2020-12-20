<?php
session_start();
include_once('../admin/config.php');
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql ="UPDATE donhang SET trangthai = 1 WHERE  id = '$id'";
	mysqli_query($mysqli, $sql);
    unset($_SESSION["cart"]);
    unset($_SESSION["cartdd"]);
     echo "<script>alert('Bạn đã đặc hàng thành công chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất'); window.location = '../index.php';</script>";
   // header('location:../index.php');
}     
?>