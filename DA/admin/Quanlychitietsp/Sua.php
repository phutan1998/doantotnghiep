<script  type="text/javascript">CKEDITOR.replace("motasp");</script>
<?php include('editor/editor.php'); ?>
<?php
  $sql="select * from chitietsp where id_sp='$_GET[id]'";
  $run=mysqli_query($mysqli, $sql);
  $dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
  $tam=$dong['mucgiam'];
?>

<form action="Quanlychitietsp/Xuly.php?id=<?php echo $dong['id_sp'] ?>" method="POST" enctype="multipart/form-data">
<center>
<table  width="90%" border="1" style="background:#008aca; border:#fff;font-weight: bold;font-size: 20px" >
  <tr>
    <td colspan="2" height="30" style="font-weight: bold;color: #bc1622;font-weight: bold;font-size: 20px"><div align="center">Sửa chi tiết sản phẩm</div></td>
  </tr>
  <tr >
 <td height="30" width="200"><div align="center" height="30" >Tên sản phẩm</div></td>
    <td style="background: #f49c3d" align="center"><input type="text" name="tensp" style="border:1px solid #F041DE;height:20px; width: 300px;text-align: center;"  value="<?php echo $dong['tensp'] ?>" ></td>
  </tr>
  <tr>
 <td height="30"><div align="center" height="30">Số lượng hàng</div></td>
    <td style="background: #f49c3d" align="center"><input type="text" name="soluonghang" style="border:1px solid #F041DE;height:20px; width: 300px;text-align: center;"  value="<?php echo $dong['soluonghang'] ?>" ></td>
  </tr>
  <tr align="center" >
    <td height="30"><div align="center" height="30">Giá cũ</div></td>
    <td style="background: #f49c3d" align="center"><input type="text" name="mucgiam" value=" <?php echo $dong['mucgiam'] ?> " style="border:1px solid #F041DE;height:20px; width: 200px;text-align: center;" ></td>
  
  </tr>

  <tr>
   <td height="30"><div align="center" height="30">Giá sản phẩm</td>
    <td style="background: #f49c3d" align="center"><input type="text" name="gia"  style="border:1px solid #F041DE;height:20px; width: 200px;text-align: center;"  value="<?php echo $dong['gia'] ?>" ></td>
  </tr>
  <tr>
   <td height="30"><div align="center" height="30">Hình ảnh</td>
    <td style="background: #f49c3d" align="center"><input type="file" name="hinhanh"><img src="Quanlychitietsp/Hinhbaiviet/<?php echo $dong['hinhanh'] ?>" width="120" height="120" /></td>
  </tr>
  <tr>
  <td height="30"><div align="center" height="30">Mô tả sản phẩm</td>
    <td style="background: #f49c3d" align="center"><textarea name="motasp" id="motasp" cols="40" rows="15"><?php echo $dong['mota'] ?></textarea></td>
  </tr>
 <?php
    $sql="select * from thuonghieusp";
  $run=mysqli_query($mysqli, $sql);
  
  ?>
  
  <tr>
    <td height="30"><div align="center" height="30">Thương hiệu sản phẩm</td>
    <td style="background: #f49c3d" align="center"><select name="thuonghieusp">
    <?php
    while($dong_thuonghieu=mysqli_fetch_array($run, MYSQLI_ASSOC)){
    if($dong['id_thuonghieu']==$dong_thuonghieu['id_thuonghieu']){
    ?>
      <option selected="selected" value="<?php echo $dong_thuonghieu['id_thuonghieu'] ?>"><?php echo $dong_thuonghieu['tenthuonghieu']?></option>
        <?php
  }else{
    ?>
        <option value="<?php echo $dong_thuonghieu['id_thuonghieu'] ?>"><?php echo $dong_thuonghieu['tenthuonghieu']?></option>
        <?php
  }
  }
    ?>
    </select></td>
  </tr>

   <tr>
   <td height="30" ><div align="center" height="30">Nơi sản xuất</td>
     <td style="background: #f49c3d" align="center"><input type="text" name="xuatxu" style="border:1px solid #F041DE;height:20px; width: 200px;text-align: center;" value="<?php echo $dong['xuatxu'] ?>" ></td>
  </tr>
  <?php
    $sql_loaisp="select * from loaisp";
  $run_loaisp=mysqli_query($mysqli, $sql_loaisp);
  
  ?>
   
  <tr>
     <td height="30"><div align="center" height="30" width="300px">Loại sản phẩm</td>
    <td style="background: #f49c3d" align="center"><select name="loaisp" align="center">
    <?php
    while($dong_loaisp=mysqli_fetch_array($run_loaisp, MYSQLI_ASSOC)){
    if($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
    ?>
      <option selected="selected" value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp']?></option>
        <?php
  }else{
    ?>
        <option value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp']?></option>
        <?php
  }
  }
    ?>
    </select></td>
  </tr>
  <tr>
    <td height="30"><div align="center" height="30">Thứ tự</td>
    <td style="background: #f49c3d" align="center"><input type="text" name="thutu" style="border:1px solid #F041DE;height:20px; width: 100px; text-align: center;text-align: center;" value="<?php  echo $dong['thutu'] ?>">
   </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <button name="sua" value="sua" style="border:1px solid #F041DE; border-radius: 5px; height:30px;width: 120px; background:#7c16bc; color: white; ">Sửa</button>
    </div></td>
  </tr>
</table></center>
</form>