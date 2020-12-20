<?php
	$sql_chitiet ="select * from chitietsp where id_thuonghieu='$_GET[id]'";
	$query = mysqli_query($mysqli, ($sql_chitiet);
?>
 <?php
	$sql_thuonghieusp ="select tenthuonghieu from thuonghieusp where id_thuonghieu='$_GET[id]'";
	$query_thuonghieu = mysqli_query($mysqli, ($sql_thuonghieusp);
	$dong_thuonghieu = mysql_fetch_array($query_thuonghieu, MYSQLI_ASSOC);
?>
    <div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;"><?php echo $dong_thuonghieu['tenthuonghieu'] ?></span></div>
        	
            
             <div class="sanphamall">
              <ul>
                <?php
        while($dong_chitiet = mysql_fetch_array($query, MYSQLI_ASSOC)){
        ?>
                  <li><a href="index.php?xem=Content_right_chitietsanpham.php&idthuonghieu=<?php echo $dong_chitiet['id_thuonghieu'] ?>&idloaisp= <?php echo $dong_chitiet['id_loaisp'] ?>&id=<?php echo $dong_chitiet['id_sp'] ?>" style="text-decoration: none;">
                      <img src="admin/Quanlychitietsp/Hinhbaiviet/<?php echo $dong_chitiet['hinhanh'] ?> " width="200" height="200" />
                        <p style="text-decoration: none;"><?php echo $dong_chitiet['tensp'] ?></p>
                        <p style="color:gray ;padding-left:30px;height:30px;font-size: 20px; " ><strong style="color:black ; " >Giá cũ:</strong> <span style="text-decoration: line-through;"><?php echo number_format($dong_chitiet['mucgiam']).'.VNĐ' ?></span></p>
                        <p style="color:#F00; text-decoration: none;">Giá sản phẩm:<?php echo number_format ($dong_chitiet['gia']).'.VNĐ' ?> </p>
                       <div class="quickly"><p>Chi tiết</p></div>
                    </a></li>
                    <?php
        }
          ?>
                </ul>
             </div>
             