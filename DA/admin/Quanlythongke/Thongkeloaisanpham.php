  
<?php
  if(isset($_GET['trang'])){
    $trang=$_GET['trang'];
  }else{
    $trang='';
  }
  if($trang =='' || $trang =='1'){
    $trang1=0;
  }else{
    $trang1=($trang*8)-8;
  }



$sql="SELECT sanpham_id,tenloaisp,tensp,hinhanh,soluonghang, sum(soluong),sum(dongia) FROM chitietdonhang,chitietsp,loaisp WHERE chitietdonhang.duyetdon=1 and chitietsp.id_sp=chitietdonhang.sanpham_id and loaisp.id_loaisp='$_GET[id]' and chitietsp.id_loaisp='$_GET[id]' group BY sanpham_id    limit $trang1,8 ";
$run=mysqli_query($mysqli, $sql);
$count=mysqli_num_rows($run);
          if($count>0){

?> <h1 style="font-size: 25px;color: red;margin-top: 10px;">BẢNG THỐNG KÊ CÁC MẶT HÀNG</h1><br>
<table width="1000" border="2" style="background:#76f529; border: #fff;height:30px;font-weight: bold;text-align: center;">
  <tr align="center">
    <th style="height:30px;font-weight: bold;background: #7c16bc">STT</th>
    <th style="height:30px;font-weight: bold;background: #7c16bc">ID sản phẩm</th>
    <th style="height:30px;font-weight: bold;background: #7c16bc">Loại sản phẩm</th>
    <th style="height:30px;font-weight: bold;background: #7c16bc">Tên sản phẩm</th>
    <th style="height:30px;font-weight: bold;background: #7c16bc">Hình ảnh</th>
    <th style="height:30px;font-weight: bold;background: #7c16bc">Số lượng nhập</th>
    <th style="height:30px;font-weight: bold;background: #7c16bc">Số lượng bán</th>
    <th style="height:30px;font-weight: bold;background: #7c16bc">Số lượng còn</th>
    <th style="height:30px;font-weight: bold;background: #7c16bc">Tổng tiền</th>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
 
  
  ?>

  <tr align="center" height="40">
    <td><?php echo $i ?></td>
    <td><?php echo $dong['sanpham_id']  ?></td> 
    <td><?php echo $dong['tenloaisp']  ?></td> 
    <td><?php echo $dong['tensp'] ?></td>
   <td><img src="Quanlychitietsp/Hinhbaiviet/<?php echo $dong['hinhanh'] ?>" width="80" height="70"></td>
   <td><?php echo $dong['soluonghang'] ?></td>
    <td><?php echo $dong['sum(soluong)'] ?></td>
    <td align="center" style="color: red;"><?php if($dong['soluonghang'] - $dong['sum(soluong)']<=0){
      echo "Hết hàng";
      }else{
        echo $dong['soluonghang'] - $dong['sum(soluong)'] ;
        } ?></td>
    <td><?php echo number_format($dong['sum(dongia)']).'.VNĐ' ?></td>
   
  </tr>
  <?php
  $i++;
   }
  ?>
</table>

<div class="trang">Trang
    <?php 
    $sql_trang=mysqli_query($mysqli, "select * from chitietsp");
    $count=mysqli_num_rows($sql_trang);
    $a=ceil($count/8);
    for($b=1;$b<=$a;$b++){

      echo '<a href="home.php?quanly=Quanlythongke&acount=Lietke&trang='.$b.'" style="text-decoration:none; background:#F041DE; margin-left:3px;border:5px solid #F041DE;  border-radius:3px;">'.' '.$b.' '.'</a>' ;
    }
     ?> 
     </div> 


<?php
 }else{
         echo '<p style="padding:30px;font-size:30px;font-style: italic; color:red;">Hiện chưa có thêm tin liên quan nào...</p>';
          }
      ?>
