
<?php
  $sql_chitietsp ="select * from chitietsp,thuonghieusp where id_sp='$_GET[id]' and thuonghieusp.id_thuonghieu=chitietsp.id_thuonghieu";
  $query_chitietsp = mysqli_query($mysqli, $sql_chitietsp);
  $dong_chitietsp = mysqli_fetch_array($query_chitietsp, MYSQLI_ASSOC);
?>
  

<?ph
$sql ="SELECT sanpham_id,tenloaisp,tensp,hinhanh,soluonghang, sum(soluong),sum(dongia) FROM chitietdonhang,chitietsp,loaisp WHERE chitietdonhang.duyetdon=1 and chitietsp.id_sp=chitietdonhang.sanpham_id and loaisp.id_loaisp='$_GET[id]' and chitietsp.id_loaisp='$_GET[id]' group BY sanpham_id ";
$query = mysqli_query($mysqli, $sql);
  $dong = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>

<table width="100%" height="100%"  style="border-collapse:collapse ; background:#fff;border-radius: 15px;margin-top: 5px; " >
  <tr>
  <div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">Chi tiết sản phẩm</span></div>
    <!-- <td colspan="2" style="text-align: center;color: white;
    font-size: 20px;font-family: Arial;background: #F041DE; padding: 10px;"><div align="center" >Chi tiết sản phẩm</div></td> -->
  </tr>
  
  <tr>
    <td rowspan="8" align="center" style="border-right: 1px solid #008aca ;width: 50%;height: 60%;padding-top: 8px;"><img src="admin/Quanlychitietsp/Hinhbaiviet/<?php echo $dong_chitietsp['hinhanh'] ?>" style="width:300px; height:300px;" /></td>

    <td style="color:blue; padding-left:30px;height:30px;font-size: 20px; border-bottom: 1px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 75ch; "><strong style="color:black ; " >Tên sản phẩm:</strong style="color:black ; " > <?php echo $dong_chitietsp['tensp'] ?></td>
  <tr> <td style="color:gray ;padding-left:30px;height:30px;font-size: 20px; " ><strong style="color:black ; " >Giá cũ:</strong> <span style="text-decoration: line-through;"><?php echo number_format($dong_chitietsp['mucgiam']).'.VNĐ' ?></span></td></tr>
  <tr>
 
    <td style="color:#F00 ;padding-left:30px;height:30px;font-size: 20px;" ><strong style="color:black ; " >Giá sản phẩm:</strong> <?php echo number_format($dong_chitietsp['gia']).'.VNĐ' ?></td>
  </tr>
<tr></tr>
   <tr>
    <td style="color:blue; padding-left:30px;height:30px;font-size: 20px;" ><strong style="color:black ; " >Nhãn hiệu:</strong> <?php echo $dong_chitietsp['tenthuonghieu'] ?></td>
  </tr>
  <tr>
    <td style="color:#F00;padding-left:30px;height:30px;font-size: 20px;" ><strong style="color:black ; " >Nơi sản xuất:</strong> <?php echo $dong_chitietsp['xuatxu'] ?></td>
    <tr>

    <td style="color:#ff0033;padding-left:30px; font-size: 30px;height:30px;font-size: 20px;" ><strong style="color:black ; " >Đặc biệt bạn tiết kiệm:</strong> <?php echo number_format($dong_chitietsp['mucgiam']-$dong_chitietsp['gia']).'.VND' ?></td>
  </tr>
  </tr>
  <tr>
<!--  <td style="text-align: center;"><a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp'] ?>"><img src="admin/Quanlychitietsp/Hinhbaiviet/dathang.png" height="45%" width="60%" style=""  /></a></td> --> 
 <td style="text-align: center;"><a href="Code/giohang.php?add=<?php echo $dong_chitietsp['id_sp'] ?>"><img src="admin/Quanlychitietsp/Hinhbaiviet/dathang.png" height="45%" width="60%" style=""  /></a></td> 
 
  </tr>
  </tr>
  <tr>
  
    <td colspan="2"><div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">Thông tin sản phẩm</span></div></td>
  </tr>
  <tr>
    <td style="padding: 10px" colspan="2" ><?php echo $dong_chitietsp['mota'] ?></td>
  </tr>
  
 
  
  </table>
<?php 
  $sql_spcungloai ="select * from chitietsp where id_loaisp='$_GET[idloaisp]'and id_thuonghieu='$_GET[idthuonghieu]' and chitietsp.id_sp<>$_GET[id]";
    $row_lienquan = mysqli_query($mysqli, $sql_spcungloai);
   $count_lienquan = mysqli_num_rows($row_lienquan);
          if($count_lienquan>0){
 ?>
    <div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">Sản phẩm cùng loại</span></div>
 
    <div class="sanpham">
      <ul>
       <?php
        while($dong_spcungloai = mysqli_fetch_array($row_lienquan, MYSQLI_ASSOC)){
        ?>
                    <li><a href="index.php?xem=Content_right_chitietsanpham.php&idthuonghieu=<?php echo $dong_spcungloai['id_thuonghieu'] ?>&idloaisp= <?php echo $dong_spcungloai['id_loaisp'] ?>&id=<?php echo $dong_spcungloai['id_sp'] ?>">
                      <img src="admin/Quanlychitietsp/Hinhbaiviet/<?php echo $dong_spcungloai['hinhanh'] ?> " width="200" height="200" />
                        <p style=" text-decoration: none;"><?php echo $dong_spcungloai['tensp'] ?></p>
                        <p style="color:gray ;padding-left:30px;height:30px;font-size: 20px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 75ch;  " ><strong style="color:black ; " >Giá cũ:</strong> <span style="text-decoration: line-through;"><?php echo number_format($dong_spcungloai['mucgiam']).'.VNĐ' ?></span></p>
                        <p style="color:#F00; text-decoration: none;">Giá sản phẩm:<?php echo number_format($dong_spcungloai['gia']).'.VND' ?> </p>
                        <div class="quickly"><p>Chi tiết</p></div>
                    </a></li>
                    <?php
        }
          ?>
      </ul>
    </div>
      <?php
          }else{
            echo'<div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">SẢN PHẨM LIÊN QUAN</span></div>  ';
            echo '<p style="padding:30px;">Hiện chưa có thêm sản phẩm liên quan nào</p>';
          }
      ?>

    <div align="center" class="fb-comments" data-href="https://www.facebook.com/search/top/?q=VKGK%20Mobile" data-width="800" data-numposts="5" ></div>