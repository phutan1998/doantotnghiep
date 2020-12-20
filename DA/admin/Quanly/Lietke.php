<?php include("config.php"); ?>
<?php
	$sql ="select * from loaisp order by id_loaisp desc";
	$run = mysqli_query($mysqli, $sql);
?>
<center>
<table width="50%" border="2" style="background:#76f529; border: #fff;height:30px;font-weight: bold;">
  <tr>
    <td align="center" width="50" style="height:30px;font-weight: bold;background: #7c16bc">ID</td>
    <td align="center" width="300" style="height:30px;font-weight: bold;background: #7c16bc" >Tên sản phẩm</td>
   <!--  <td  align="center">Thứ tự</td> -->
    <td colspan="2"  align="center" style="height:30px;font-weight: bold;background: #7c16bc">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong = mysqli_fetch_array($run, MYSQLI_ASSOC)){
 
  ?>
  <tr height="60">
    <td  align="center"><?php echo $i; ?></td>
    <td  align="center"><?php echo $dong['tenloaisp'] ?></td>
   <!--  <td  align="center"><?php echo $dong['thutu'] ?></td> -->
    <td  align="center" ><a href="home.php?quanly=Quanly&acount=sua&id=<?php echo $dong['id_loaisp'] ?>" ><img src="Quanlychitietsp/Hinhbaiviet/edit.png" width="30px" height="30px"></a></td>
    <td  align="center"><a href="Quanly/xuly.php?id=<?php echo $dong['id_loaisp'] ?>" ><img src="Quanlychitietsp/Hinhbaiviet/deletered.png" width="30px" height="30px"></a></td>
  </tr>
  <?php
  $i++;
   }
  ?>
</table></center>



