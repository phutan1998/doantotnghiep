<?php


  $sql_loaisp="select * from loaisp";
    $query=mysqli_query($mysqli, $sql_loaisp);
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Document</title>
</head>
<body><center>
  
               <?php 
               while($dong_sp=mysqli_fetch_array($query, MYSQLI_ASSOC)){
                ?>
                
                    <button class="btn warning"><a href="home.php?quanly=Quanlythongke&acount=them&id=<?php echo $dong_sp['id_loaisp']  ?>"><?php echo $dong_sp['tenloaisp'] ?></a></button>
               
                <?php 
            }
                 ?>
            <?php 
            include('Thongkeloaisanpham.php');
                 ?>
       
<!-- <button class="btn success"><a href="home.php?quanly=Quanlythongke&acount=them"> Điện thoại</a></button>
<button class="btn info">Tablet</button>
<button class="btn warning">Usb</button>
<button class="btn danger">Cáp sạc</button>
<button class="btn default">Thẻ nhớ</button>
<button class="btn success">Sạc dự phòng</button>
<button class="btn info">Ốp lưng điện thoại</button>
<button class="btn warning">Tai nghe</button> -->

<br></center>
</body>
</html>
