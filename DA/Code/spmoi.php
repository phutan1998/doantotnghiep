<?php
	$sql_moinhat ="select * from chitietsp order by id_sp desc limit 0,10";
	$row_moinhat = mysqli_query($mysqli, $sql_moinhat);
	
?>
		<div class="tieude"><span style="float:left; background: #008aca ; width:400px;text-align:center; color:white; border-top-right-radius: 2em;">Sản phẩm mới nhất</span></div>
	
		<div class="sanpham">
			<ul>
			 <?php
				while($dong_all = mysqli_fetch_array($row_moinhat, MYSQLI_ASSOC)){
				?>
                	  <li><a href="index.php?xem=Content_right_chitietsanpham.php&idthuonghieu=<?php echo $dong_all['id_thuonghieu'] ?>&idloaisp= <?php echo $dong_all['id_loaisp'] ?>&id=<?php echo $dong_all['id_sp'] ?>" style="text-decoration: none;">
                    	<img src="admin/Quanlychitietsp/Hinhbaiviet/<?php echo $dong_all['hinhanh'] ?> " width="200" height="200" />
                        <p style="text-decoration: none;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 75ch;"><?php echo $dong_all['tensp'] ?></p>
                        <p style="color:gray ;padding-left:30px;height:30px;font-size: 20px; " ><strong style="color:black ; " >Giá cũ:</strong> <span style="text-decoration: line-through;"><?php echo number_format($dong_all['mucgiam']).'.VNĐ' ?></span></p>
                        <p style="color:#F00;text-decoration: none;">Giá sản phẩm:<?php echo number_format($dong_all['gia']).'.VNĐ' ?> </p>
                      <div class="quickly"><p>Chi tiết</p></div>
                    </a></li>
                    <?php
				}
					?>
			</ul>
		</div>
		<p style="clear:both;">
                 
 <?php
 	$sql_loai = mysqli_query($mysqli, "select * from loaisp ");
	
	while($dong_loai = mysqli_fetch_array($sql_loai, MYSQLI_ASSOC)){
		
	echo '<div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">'.$dong_loai['tenloaisp'].'</span></div>';
 	$sql_loaisp ="select * from loaisp inner join chitietsp on chitietsp.id_loaisp=loaisp.id_loaisp where chitietsp.id_loaisp='".$dong_loai['id_loaisp']."'";
	$row = mysqli_query($mysqli, $sql_loaisp);
	$count = mysqli_num_rows($row);
	if($count > 0){
	?>
   
                 
         
                	<ul >
                  
		<div class="sanpham">
			<ul>
			 <?php
					while($dong = mysqli_fetch_array($row, MYSQLI_ASSOC)){
				?>
                	  <li><a href="index.php?xem=Content_right_chitietsanpham.php&idthuonghieu=<?php echo $dong['id_thuonghieu'] ?>&idloaisp= <?php echo $dong['id_loaisp'] ?>&id=<?php echo $dong['id_sp'] ?>" style="text-decoration: none;">
                    	<img src="admin/Quanlychitietsp/Hinhbaiviet/<?php echo $dong['hinhanh'] ?> " width="200" height="200" />
                        <p style="text-decoration: none;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 75ch;"><?php echo $dong['tensp'] ?></p>
                        <p style="color:gray ;padding-left:30px;height:30px;font-size: 20px; " ><strong style="color:black ; " >Giá cũ:</strong> <span style="text-decoration: line-through;"><?php echo number_format($dong['mucgiam']).'.VNĐ' ?></span></p>
                        <p style="color:#F00;text-decoration: none;">Giá sản phẩm:<?php echo number_format($dong['gia']).'.VNĐ' ?> </p>
                      <div class="quickly"><p>Chi tiết</p></div>
                    </a></li>
                    <?php
				}
					?>
			</ul>
		</div>
		<p style="clear:both;">
                        <?php
			
	}else{
		echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
	}
			
			
						?>
                    </ul>
                     <div class="clear"></div>
                <?php
	
	
	}
	
	
				?>
          
            