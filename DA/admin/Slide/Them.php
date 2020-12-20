
<form action="Slide/Xuly.php" method="POST" enctype="multipart/form-data">
<center>
<table  width="600" border="1" style="background:#f49c3d; border:#fff;" >
  <tr>
    <td colspan="2" style="color: red; font-size: 20px; font-weight: bold;"><div align="center">Thêm hình slide</div></td>
  </tr>
   <tr align="center" >
    <td height="30"><div align="center" height="30"><strong>Tên hình ảnh</strong></td>
    <td><input type="text" name="tenhinh" style="border:1px solid #F041DE;height:20px; width: 200px;"  ></td>
  </tr>
 <tr align="center" >
    <td height="30"><div align="center" height="30"><strong>Hình ảnh</strong></td>
    <td><input type="file" name="hinh" ></td>
  </tr>
 <!--  <?php
    $sql="select * from chitietsp";
  $run=mysqli_query($mysqli, $sql);
  
  ?>
  
  <tr align="center">
    <td height="30"><div align="center" height="30">Tên sản phẩm khuyến mãi</td>
    <td><select name="tensp">
    <?php
    while($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
    ?>
      <option value="<?php echo $dong['id_sp'] ?>"><?php echo $dong['tensp']?></option>
        <?php
  }
    ?>
    </select></td>
  </tr> -->
 
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" id="them" value="Thêm" style="border:1px solid #F041DE; border-radius: 5px; height:30px;width: 80px; background:#2971f5; color: white; ">
    </div></td>
  </tr>
</table></center>
</form>