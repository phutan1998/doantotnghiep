<?php 

$sql = "select * from loaisp where id_loaisp=$_GET[id]";
$run = mysqli_query($mysqli, $sql);
$dong = mysqli_fetch_array($run, MYSQLI_ASSOC);

 ?>
<form action="Quanly/Xuly.php?id=<?php echo $dong['id_loaisp']  ?>" method="POST" enctype="multipart/form-data">
<center>
<table width="600" border="1" style="background:#f49c3d; border:#fff;">
  <tr>
   <td colspan="2" style="color: red; font-size: 20px; font-weight: bold;"><div align="center">Sửa loại sản phẩm</div></td>
  </tr>
  <tr>
      <td align="center"  width="300" height="40"><strong> Tên loại sản phẩm</strong></td>
    <td align="center" ><input type="text" name="tenloaisp" style="border:1px solid #F041DE;height:30px;text-align: center;" value="<?php echo $dong['tenloaisp']  ?>" ></td>
  </tr>
  <tr>
   <td align="center" height="40"><strong> Thứ tự</strong></td>
    <td align="center"><input type="text" name="thutu" style="border:1px solid #F041DE;height:30px;text-align: center;" value="<?php echo $dong['thutu']  ?>"  ></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa" style="border:1px solid #F041DE; border-radius: 5px; height:30px;width: 80px; background:#2971f5; color: white; " >
    </div></td>
  </tr>
</table></center>
</form>