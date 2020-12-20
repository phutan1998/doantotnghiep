 <!-- <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script> -->
<script  type="text/javascript">CKEDITOR.replace("motasp");</script>
<?php include('editor/editor.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
<form action="Quanlychitietsp/Xuly.php" method="POST" enctype="multipart/form-data">

<center>
<table  width="90%" border="1" style="background:#008aca; border:#fff;font-weight: bold;font-size: 20px" >
  <tr>
    <td colspan="2" height="30" style="font-weight: bold;color: #bc1622;font-weight: bold;font-size: 20px"><div align="center">Thêm chi tiết sản phẩm</div></td>
  </tr>
  <tr align="center"  >
    <td height="30" width="200"><div align="center" height="30">Tên sản phẩm</div></td>
    <td style="background: #f49c3d"><input type="text" name="tensp" style="border:1px solid #F041DE;height:20px; width: 300px;"  ></td>
  </tr>
  <tr align="center"  >
    <td height="30"><div align="center" height="30" style="background: #008aca">Số lượng hàng</div></td>
    <td style="background: #f49c3d"><input type="text" name="soluonghang" style="border:1px solid #F041DE;height:20px; width: 300px;"  ></td>
  </tr>

  
  <tr align="center" >
    <td height="30"><div align="center" height="30">Giá cũ</div></td>
    <td style="background: #f49c3d"> <input type="text" name="mucgiam"  style="border:1px solid #F041DE;height:20px; width: 300px;" ></td>
  
  </tr>

  <tr align="center" >
    <td height="30"><div align="center" height="30">Giá sản phẩm</td>
    <td align="center" style="background: #f49c3d"><input type="text" name="gia" style="border:1px solid #F041DE;height:20px; width: 300px;"  ></td>
  </tr>
 <tr align="center" >
    <td height="30"><div align="center" height="30">Hình ảnh</td>
    <td style="background: #f49c3d"><input type="file" name="hinhanh" ></td>
  </tr>
  <tr>
    <td height="30"><div align="center" height="30">Mô tả sản phẩm</td>
    <td align="center" style="background: #f49c3d"><textarea name="motasp" id="motasp" cols="40" rows="15"></textarea></td>
  </tr>
 <?php
    $sql="select * from thuonghieusp";
  $run=mysqli_query($mysqli, $sql);
  
  ?>
  
  <tr align="center">
    <td height="30"><div align="center" height="30">Thương hiệu sản phẩm</td>
    <td style="background: #f49c3d"><select name="thuonghieusp">
    <?php
    while($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
    ?>
      <option value="<?php echo $dong['id_thuonghieu'] ?>"><?php echo $dong['tenthuonghieu']?></option>
        <?php
  }
    ?>
    </select></td>
  </tr>


  <?php
    $sql_loaisp="select * from loaisp";
  $run_loaisp=mysqli_query($mysqli, $sql_loaisp);
  
  ?>
  
  <tr align="center"  >
    <td height="30"><div align="center" height="30" width="300px";>Loại sản phẩm</td>
    <td align="center" style="background: #f49c3d" width="300" height="40"><select name="loaisp">
    <?php
    while($dong_loaisp=mysqli_fetch_array($run_loaisp, MYSQLI_ASSOC)){
    ?>
      <option value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp']?></option>
        <?php
  }
    ?>
    </select></td>
  </tr>
  <tr align="center">
    <td height="30" ><div align="center" height="30">Xuất xứ</td>
    <td style="background: #f49c3d"><input type="text" name="xuatxu" style="border:1px solid #F041DE;height:20px; width: 300px;"></td>
  </tr>
  <tr align="center">
    <td height="30"><div align="center" height="30">Thứ tự</td>
    <td style="background: #f49c3d"> <input type="text" name="thutu" style="border:1px solid #F041DE;height:20px; width: 300px;" ></td>
  </tr>
  <tr>
    <td colspan="2" ><div align="center" height="30">
      <button name="them" value="Thêm" style="border:1px solid #F041DE; border-radius: 5px; height:30px;width: 120px; background:#7c16bc; color: white; ">Thêm sản phẩm</button>
    </div></td>
  </tr>
</table>
</center>
</form>
</body>
</html>



