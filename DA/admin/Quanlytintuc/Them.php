 <!-- <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script> -->
<script  type="text/javascript">CKEDITOR.replace("noidung");</script>
<?php include('editor/editor.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Document</title>
</head>
<body><center>
  <h1 style="font-size: 25px;color: red;margin-top: 10px;">QUẢN LÝ TIN TỨC CÔNG NGHỆ</h1><br>
  
<form action="Quanlytintuc/Xuly.php" method="POST" enctype="multipart/form-data">


<table  width="1000" border="1" style="background:#008aca; border:#fff;font-weight: bold;font-size: 20px" >
  <tr>
    <td colspan="2" height="30" style="font-weight: bold;color: #bc1622;font-weight: bold;font-size: 20px"><div align="center">Thêm bài viết</div></td>
  </tr>
  <tr align="center"  >
    <td height="30" width="200" height="30" width="200"><div align="center" height="30">Tên bài viết</div></td>
    <td style="background: #f49c3d"><input type="text" name="tieude" style="border:1px solid #F041DE;height:20px; width: 300px;"  ></td>
  </tr>

  
  <tr align="center" >
    <td height="30" width="200"><div align="center" height="30">Tiêu đề không dấu</div></td>
    <td style="background: #f49c3d"><input type="text" name="tieudekhongdau"  style="border:1px solid #F041DE;height:20px; width: 300px;" ></td>
  
  </tr>

  <tr align="center" >
    <td height="30"><div align="center" height="30">Tóm tắt</td>
    <td align="center" style="background: #f49c3d"><textarea name="tomtat" style="border:1px solid #F041DE;height:20px; width: 300px;"  ></textarea> </td>
  </tr>
 <tr align="center" >
    <td height="30"><div align="center" height="30">Hình ảnh</td>
    <td style="background: #f49c3d"><input type="file" name="hinhanh" ></td>
  </tr>
  <tr>
    <td height="30"><div align="center" height="30">Nội dung bài viết</td>
    <td align="center" style="background: #f49c3d"><textarea name="noidung" id="noidung" cols="40" rows="15"></textarea></td>
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
   <tr align="center" >
    <td height="30"><div align="center" height="30">Ngày viết bài</td>
    <td align="center" style="background: #f49c3d"><input type="date" name="ngaydang" placeholder="yyy/mm/dd" style="border:1px solid #F041DE;height:20px; width: 120px;"  ></td>
  </tr>
    <td colspan="2" ><div align="center" height="30">
      <button name="them" value="Thêm" style="border:1px solid #F041DE; border-radius: 5px; height:30px;width: 120px; background:#7c16bc; color: white; ">Thêm bài viết</button>
    </div></td>
  </tr>
</table>

</form></center>
</body>
</html>



