<?php 

$sql="select * from slide where id_slide=$_GET[id]";
$run=mysqli_query($mysqli, $sql);
$dong=mysqli_fetch_array($run, MYSQLI_ASSOC);

 ?>
<form action="Slide/Xuly.php?id=<?php echo $dong['id_slide']  ?>" method="POST" enctype="multipart/form-data">
<center>
<table  width="600" border="1"  style="background:#f49c3d; border:#fff;" >
  <tr align="center" >
   <td colspan="2" style="color: red; font-size: 20px; font-weight: bold;"><div align="center"><strong>Sửa hình slide</strong></div></td>
  </tr>
  <tr align="center" >
    <td><strong>Tên hình</strong></td>
    <td><input type="text" name="tenhinh" style="border:1px solid #F041DE;height:20px; width: 200px;" value="<?php echo $dong['tenhinh']  ?>" ></td>
  </tr>
  <tr align="center" >
    <td><strong>Hình ảnh</strong></td>
    <td><input type="file" name="hinh"><img src="../Images/<?php echo $dong['hinh'] ?>" width="120" height="120" /></td>
  </tr>
  <tr align="center" >
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa" style="border:1px solid #F041DE; border-radius: 5px; height:30px;width: 80px; background:#2971f5; color: white; ">
    </div></td>
  </tr>
</table></center>
</form>