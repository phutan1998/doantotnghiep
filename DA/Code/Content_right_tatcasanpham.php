	<?php
	if(isset($_GET['trang'])){
		$lay_trang=$_GET['trang'];
	}else{
		$lay_trang='';
	}
	if($lay_trang==''||$lay_trang==1){
		$trang1=0;
	}else {
		$trang1=($lay_trang*15)-15;
	}


	$sql_all ="select * from chitietsp  limit $trang1,15 ";
	$query_all = mysqli_query($mysqli,$sql_all);
?>
			
		

		<div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">Tất cả sản phẩm</span></div>

		<div class="sanpham">
			<ul>
			 <?php
				while($dong_all=mysqli_fetch_array($query_all, MYSQLI_ASSOC)){
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
		<div class="trang">Trang
		<?php 
		$sql_trang = mysqli_query($mysqli, "select * from chitietsp");
		$count = mysqli_num_rows($sql_trang);
		$a= ceil($count/15);
		for($b=1;$b<=$a;$b++){

			echo '<a href="?trang='.$b.'" style="text-decoration:none; background:#008aca; margin-left:3px;border:5px solid #008aca;  border-radius:3px;">'.' '.$b.' '.'</a>' ;
		}
		 ?>	
		 </div>	
