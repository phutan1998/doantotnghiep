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
  ?>
<?php
	$sql="select * from tintuc order by id_tintuc desc limit $trang1,5";
	$run=mysqli_query($mysqli, $sql);
?><center>
<table width="100%" border="1" style="background:#8695ae; border: #fff;height:30px;font-weight: bold;text-align: center;">
  <tr align="center"  style="height:30px;font-weight: bold;background: #7c16bc">
    <td>ID</td>
    <td>Tiêu đề</td>
    <td>Nội dung</td>
    <td>Hình ảnh</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
 
  ?>
  <tr align="center">
    <td><?php echo $i; ?></td>
    <td  ><?php echo $dong['tieude'] ?></td>
    <td  class="noidung" style="background: #fff"><?php echo $dong['noidung'] ?></td>
     <td><img src="Quanlytintuc/hinh/<?php echo $dong['hinhanh'] ?>" width="90" height="70"></td>
    <td><a href="home.php?quanly=Quanlytintuc&acount=sua&id=<?php echo $dong['id_tintuc'] ?>"><img src="Quanlychitietsp/Hinhbaiviet/edit.png" width="30px" height="30px"></a></td>
    <td><a href="Quanlytintuc/Xuly.php?id=<?php echo $dong['id_tintuc'] ?>"><img src="Quanlychitietsp/Hinhbaiviet/deletered.png" width="30px" height="30px"></a></td>
  </tr>
  <?php
  $i++;
   }
  ?>
</table>
<div class="trang">Trang
    <?php 
    $sql_trang=mysqli_query($mysqli, "select * from tintuc");
  $count_trang=mysqli_num_rows($sql_trang);
  $a=ceil($count_trang/5);
  for($b=1;$b<=$a;$b++){
    
    if($trang==$b){
    
    echo '<a href="home.php?quanly=Quanlytintuc&acount=Lietke&trang='.$b.'" style="text-decoration:none; background:#F041DE; margin-left:3px;border:5px solid #F041DE;  border-radius:3px;">'.$b.' ' .'</a>';
        
  }else{
    echo '<a href="home.php?quanly=Quanlytintuc&acount=Lietke&trang='.$b.'" style="text-decoration:none; background:#F041DE; margin-left:3px;border:5px solid #F041DE;  border-radius:3px;">'.$b.' ' .'</a>';
  }
  }
     ?> 
     </div> 
</center>



