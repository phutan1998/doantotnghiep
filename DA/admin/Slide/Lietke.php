
<?php
	$sql="SELECT * from slide order by id_slide desc ";
	$run=mysqli_query($mysqli, $sql);
 
?>

<center>

<table width="800" border="1" style="background:#76f529; border: #fff;height:30px;font-weight: bold;">
  <tr style="height:30px;font-weight: bold;background: #7c16bc">
    <td align="center" width="50">ID</td>
    <td align="center" width="300">Tên ảnh</td>
    <td  align="center">Hình ảnh</td>
    <td colspan="2"  align="center">Quản lý</td>
  </tr>
  <?php
  $i=0;
  while($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
 
  ?>
  <tr height="60">
    <td  align="center"><?php echo $i; ?></td>
      <td  align="center"><?php echo $dong['tenhinh'] ?></td>
    <td  align="center" ><img src="../Images/<?php echo $dong['hinh'] ?>" width="120" height="72"></td>
   
    <td  align="center" ><a href="home.php?quanly=Slide&acount=sua&id=<?php echo $dong['id_slide'] ?>" ><img src="Quanlychitietsp/Hinhbaiviet/edit.png" width="30px" height="30px"></a></td>
    <td  align="center"><a href="Slide/Xuly.php?id=<?php echo $dong['id_slide'] ?>" ><img src="Quanlychitietsp/Hinhbaiviet/deletered.png" width="30px" height="30px"></a></td>
  </tr>
  <?php
  $i++;
   }
  ?>
</table></center>



