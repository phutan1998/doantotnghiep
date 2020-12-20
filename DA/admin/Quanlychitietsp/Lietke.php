 
<?php
  if(isset($_GET['trang'])){
    $trang=$_GET['trang'];
  }else{
    $trang='';
  }
  if($trang =='' || $trang =='1'){
    $trang1=0;
  }else{
    $trang1=($trang*5)-5;
  }
  $sql="select * from chitietsp,loaisp,thuonghieusp where loaisp.id_loaisp=chitietsp.id_loaisp and thuonghieusp.id_thuonghieu=chitietsp.id_thuonghieu  order by chitietsp.id_sp desc limit $trang1,6";
  $run=mysqli_query($mysqli, $sql);
?>
<center>
<table  width="1200" border="1" style="background:#76f529; border: #fff;height:30px;font-weight: bold;text-align: center;" >
  <tr style="height:30px;font-weight: bold;background: #7c16bc">
    <td><div align="center" >ID</div></td>
    <td >Tên sản phẩm</td>
     <td >Số lượng hàng</td>
    <td >Hình ảnh</td>
    <td >Giá cũ</td>
    <td >Giá mới</td>
    <td ><div align="center">Thương hiệu</div></td>
    <td ><div align="center">Nơi sản xuất</div></td>
    <td ><div align="center">Loại sản phẩm</div></td>
    <td >Thứ tự</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
    $i=1;
    while($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tensp']; ?></td>
    <td><?php echo $dong['soluonghang']; ?></td>
    <td><img src="Quanlychitietsp/Hinhbaiviet/<?php echo $dong['hinhanh'] ?>" width="60" height="60"></td>
    <td><?php echo number_format($dong['mucgiam']).'.VND'; ?></td>
    <td><?php echo number_format( $dong['gia']).'.VND'; ?></td>
    <td><?php echo $dong['tenthuonghieu']; ?></td>
     <td><?php echo $dong['xuatxu']; ?></td>
    <td><?php echo $dong['tenloaisp'] ;?></td>
     <td><?php echo $dong['thutu']; ?></td>
    <td><a href="home.php?quanly=Quanlychitietsp&acount=sua&id=<?php echo $dong['id_sp'] ?>"><img src="Quanlychitietsp/Hinhbaiviet/edit.png" width="30px" height="30px"></a></td>
    <td><a href="Quanlychitietsp/Xuly.php?id=<?php echo $dong['id_sp'] ?>"><img src="Quanlychitietsp/Hinhbaiviet/deletered.png" width="30px" height="30px"></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table></center>
<div class="trang">Trang
    <?php 
    $sql_trang=mysqli_query($mysqli, "select * from chitietsp");
  $count_trang=mysqli_num_rows($sql_trang);
  $a=ceil($count_trang/5);
  for($b=1;$b<=$a;$b++){
    
    if($trang==$b){
    
    echo '<a href="home.php?quanly=Quanlychitietsp&acount=Lietke&trang='.$b.'" style="text-decoration:none; background:#F041DE; margin-left:3px;border:5px solid #F041DE;  border-radius:3px;">'.$b.' ' .'</a>';
        
  }else{
    echo '<a href="home.php?quanly=Quanlychitietsp&acount=Lietke&trang='.$b.'" style="text-decoration:none; background:#F041DE; margin-left:3px;border:5px solid #F041DE;  border-radius:3px;">'.$b.' ' .'</a>';
  }
  }
     ?> 
     </div> 