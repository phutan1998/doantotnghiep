
 <?php
 
  $sql_loaisp ="select * from loaisp where id_loaisp='$_GET[id]'";
  $query_loaisp = mysqli_query($mysqli, $sql_loaisp);
    while($dong_loaisp = mysqli_fetch_array($query_loaisp, MYSQLI_ASSOC)){
    echo '<div class="tieude"><script>alert('.$dong_loaisp['tenloaisp'].');</script> <span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">'.$dong_loaisp['tenloaisp'].'</span></div>';
    
    // <div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">Tất cả sản phẩm</span></div>
  }
?>
          

 <?php
  $sql_chitiet ="select * from chitietsp where id_loaisp='$_GET[id]'";
  $query = mysqli_query($mysqli, $sql_chitiet);
?>
            
             <div class="sanphamall">
              <ul>
                <?php
        while($dong_chitiet = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        ?>
                  <li><a href="index.php?xem=Content_right_chitietsanpham.php&idthuonghieu=<?php echo $dong_chitiet['id_thuonghieu'] ?>&idloaisp= <?php echo $dong_chitiet['id_loaisp'] ?>&id=<?php echo $dong_chitiet['id_sp'] ?>" style="text-decoration: none;">
                      <img src="admin/Quanlychitietsp/Hinhbaiviet/<?php echo $dong_chitiet['hinhanh'] ?> " width="200" height="200" />
                        <p style="text-decoration: none;"><?php echo $dong_chitiet['tensp'] ?></p>
                        <p style="color:gray ;padding-left:30px;height:30px;font-size: 20px; " ><strong style="color:black ; " >Giá cũ:</strong> <span style="text-decoration: line-through;"><?php echo number_format($dong_chitiet['mucgiam']).'.VNĐ' ?></span></p>
                        <p style="color:#F00;text-decoration: none;">Giá sản phẩm:<?php echo number_format($dong_chitiet['gia']).'.VNĐ' ?> </p>
                     <div class="quickly"><p>Chi tiết</p></div>
                    </a></li>
                    <?php
        }
          ?>
                </ul>
             </div>
             