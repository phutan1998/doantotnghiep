
<?php
include('config.php');
	if(isset($_POST['timkiem'])){
	$search=$_POST['tensp'];
	echo '<p style="padding-top: 20px;">Tên tìm kiếm :<strong>'.' '.$search.'</strong><br/></p>';
	$sql_timkiem="select * from chitietsp,thuonghieusp,loaisp where chitietsp.id_loaisp=loaisp.id_loaisp and chitietsp.id_thuonghieu=thuonghieusp.id_thuonghieu and  tensp LIKE '%$search%'";
 

	$row_timkiem=mysqli_query($mysqli, $sql_timkiem);
	$count=mysqli_num_rows($row_timkiem);
	 if($count>0){
	
?>
<h1 style="color: blue; text-align: center;">Kết quả tìm kiếm</h4>

<table width="100%" border="1" style=" background: #F7F7F7;">
  <tr>
  <tr>
    <td><div align="center">ID</div></td>
    <td align="center">Tên sản phẩm</td>
    <td align="center">Hình ảnh</td>
    <td align="center" >Giá cũ</td>
    <td align="center">Giá</td>
    <td><div align="center">Thương hiệu</div></td>
    <td><div align="center">Nơi sản xuất</div></td>
    <td><div align="center">Loại sản phẩm</div></td>
    <td colspan="2" align="center">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_assoc($row_timkiem)){

  ?>
   <tr>
    <td align="center"><?php echo $i; ?></td>
    <td align="center"><?php echo $dong['tensp']; ?></td>
    <td align="center" ><img src="Quanlychitietsp/Hinhbaiviet/<?php echo $dong['hinhanh'] ?>" width="60" height="60"></td>
    <td align="center"><?php echo number_format($dong['mucgiam']).'.VND'; ?></td>
    <td align="center"><?php echo number_format( $dong['gia']).'.VND'; ?></td>
    <td align="center"><?php echo $dong['tenthuonghieu']; ?></td>
     <td align="center"><?php echo $dong['xuatxu']; ?></td>
    <td align="center"><?php echo $dong['tenloaisp'] ;?></td>
    <td align="center"><a href="home.php?quanly=Quanlychitietsp&acount=sua&id=<?php echo $dong['id_sp'] ?>"><img src="Quanlychitietsp/Hinhbaiviet/edit.png" width="30px" height="30px"></a></td>
    <td align="center"><a href="Quanlychitietsp/Xuly.php?id=<?php echo $dong['id_sp'] ?>"><img src="Quanlychitietsp/Hinhbaiviet/deletered.png" width="30px" height="30px"></a></td>
  </tr>
  <?php
  $i++;
  }
	}else{
	  echo 'Không tìm thấy kết quả';
  }
  }
  ?>
</table>
