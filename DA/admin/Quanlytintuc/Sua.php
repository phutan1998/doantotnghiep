 <!-- <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script> -->
<script  type="text/javascript">CKEDITOR.replace("noidung");</script>
<?php include('editor/editor.php'); ?>
<?php
  $sql="select * from tintuc where id_tintuc='$_GET[id]'";
  $run=mysqli_query($mysqli, $sql);
  $dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Document</title>
</head>
<body>
  
<form action="Quanlytintuc/Xuly.php?id=<?php echo $dong['id_tintuc'] ?>" method="POST" enctype="multipart/form-data">

<center>
<table  width="1000" border="1" style="background:#008aca; border:#fff;font-weight: bold;font-size: 20px" >
  <tr>
    <td colspan="2" height="30" style="font-weight: bold;color: #bc1622;font-weight: bold;font-size: 20px"><div align="center">Thêm bài viết</div></td>
  </tr>
  <tr align="center" >
    <td height="30" ><div align="center" height="30">Tên bài viết</div></td>
    <td style="background: #f49c3d"><input type="text" name="tieude" style="border:1px solid #F041DE;height:20px; width: 800px;" value="<?php echo $dong['tieude'] ?>" ></td>
  </tr>

  
  <tr align="center" >
    <td height="30"><div align="center" height="30">Tiêu đề không dấu</div></td>
    <td style="background: #f49c3d"><input type="text" name="tieudekhongdau"  style="border:1px solid #F041DE;height:20px; width: 800px;" value="<?php echo $dong['tieudekhongdau'] ?>"></td>
  
  </tr>

  <tr align="center" >
    <td height="30"><div align="center" height="30">Tóm tắt</td>
       <td align="center" style="background: #f49c3d"><textarea name="tomtat"  cols="20" rows="15" ><?php echo $dong['tomtat'] ?></textarea>
   
  </tr>
 <tr align="center">
   <td height="30"><div align="center" height="30">Hình ảnh</td>
    <td align="center" style="background: #f49c3d"><input type="file" name="hinhanh"><img src="Quanlytintuc/hinh/<?php echo $dong['hinhanh'] ?>" width="120" height="120" /></td>
  </tr>
  <tr>
    <td height="30"><div align="center" height="30">Nội dung bài viết</td>
    <td align="center" style="background: #f49c3d"><textarea name="noidung" id="noidung" cols="40" rows="15"><?php echo $dong['noidung'] ?></textarea></td>
  </tr>
 <?php
    $sql="select * from thuonghieusp";
  $run=mysqli_query($mysqli, $sql);
  
  ?>
  
  <tr>
    <td height="30"><div align="center" height="30">Thương hiệu sản phẩm</td>
    <td align="center" style="background: #f49c3d"><select name="thuonghieusp">
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
   <tr align="center" >
    <td height="30"><div align="center" height="30">Ngày viết bài</td>
    <td align="center" style="background: #f49c3d"><input type="date" name="ngaydang" placeholder="yyy/mm/dd" style="border:1px solid #F041DE;height:20px; width: 120px;" value="<?php echo $dong['ngaydang'] ?>" ></td>
  </tr>
    <td colspan="2" ><div align="center" height="30">
      <button name="sua" value="sua" style="border:1px solid #F041DE; border-radius: 5px; height:30px;width: 120px; background:#7c16bc; color: white; ">Sửa bài viết</button>
    </div></td>
  </tr>
</table>
</center>
</form>
</body>
</html>



