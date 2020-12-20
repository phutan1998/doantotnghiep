<?php
	$sql="select * from thuonghieusp order by id_thuonghieu desc";
	$run=mysqli_query($mysqli, $sql);
?><center>
<table width="1000" border="2" style="background:#76f529; border: #fff;height:30px;font-weight: bold;text-align: center;">
  <tr align="center">
    <td style="height:30px;font-weight: bold;background: #7c16bc">ID</td>
    <td style="height:30px;font-weight: bold;background: #7c16bc">Tên thương hiệu</td>
    <td style="height:30px;font-weight: bold;background: #7c16bc">Thứ tự</td>
    <td style="height:30px;font-weight: bold;background: #7c16bc" colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
 
  ?>
  <tr align="center" height="40">
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenthuonghieu'] ?></td>
    <td><?php echo $dong['thutu'] ?></td>
    <td><a href="home.php?quanly=Quanlythuonghieusp&acount=sua&id=<?php echo $dong['id_thuonghieu'] ?>"><img src="Quanlychitietsp/Hinhbaiviet/edit.png" width="30px" height="30px"></a></td>
    <td><a href="Quanlythuonghieusp/Xuly.php?id=<?php echo $dong['id_thuonghieu'] ?>"><img src="Quanlychitietsp/Hinhbaiviet/deletered.png" width="30px" height="30px"></a></td>
  </tr>
  <?php
  $i++;
   }
  ?>
</table>
</center>



