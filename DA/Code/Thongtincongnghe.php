<?php
  include('config.php');
?>
 <?php
    $sql_tintuc ="select * from tintuc order by id_tintuc desc  limit 0,4";
    $query_tintuc = mysqli_query($mysqli, $sql_tintuc) or $error = $mysqli->error;;
?>
			
        	<aside class="tintuc" >
    <figure >
        <h2><a href="tintuc.php" class="tieudett">Tin công nghệ</a></h2>
        <b></b>
            <a href="tintuc.php" class="docthemtin">Đọc thêm</a>
    </figure>
    <ul class="thongtin">
         <?php
        while($dong_tintuc = mysqli_fetch_array($query_tintuc,MYSQLI_ASSOC)){
        ?>
            <li class="thongtinbaidang">
                <a href="tintuc.php?xem=Tincongnghe/conten_tintuc_left.php&idthuonghieu=<?php echo $dong_tintuc['id_thuonghieu'] ?>&id=<?php echo $dong_tintuc['id_tintuc'] ?>">
                     <img class="thongtinhinh" src="admin/Quanlytintuc/hinh/<?php echo $dong_tintuc['hinhanh'] ?> " width="100" height="70" />
                    <h3 class="thongtinchu"><?php echo $dong_tintuc['tieude'] ?></h3>
                   <p style="padding-left: 3px"><?php echo $dong_tintuc['ngaydang'] ?></p>
                </a>
            </li>
            <?php
        }
          ?>
    </ul>
       
</aside>

