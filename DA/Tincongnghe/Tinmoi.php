
 <?php
    $sql_tintuc="select * from tintuc  order by id_tintuc desc limit 0,8";
    $query_tintuc = mysqli_query($mysqli,$sql_tintuc);
?>
			
        	<aside class="Tinmoi">
    <figure >
        <h2><a href="tintuc.php" class="tieudett">Tin mới</a></h2>
        <b></b>
           <!--  <a href="tintuc.php" class="docthemtin">Đọc thêm</a> -->
    </figure>
    <ul class = "thongtinTinmoi">
         <?php
        while($dong_tintuc = mysqli_fetch_array($query_tintuc, MYSQLI_ASSOC)){
        ?>
            <li class="thongtinbaidangmoi">
                <a href="tintuc.php?xem=Tincongnghe/conten_tintuc_left.php&idthuonghieu=<?php echo $dong_tintuc['id_thuonghieu'] ?>&id=<?php echo $dong_tintuc['id_tintuc'] ?>">
                     <img class="thongtinhinhmoi" src="admin/Quanlytintuc/hinh/<?php echo $dong_tintuc['hinhanh'] ?> " width="100" height="70" />
                    <h3 class="thongtinchumoi"><?php echo $dong_tintuc['tieude'] ?></h3>
                   <p><?php echo $dong_tintuc['ngaydang'] ?></p>
                </a>
            </li>
            <?php
        }
          ?>
    </ul>
       
</aside>

