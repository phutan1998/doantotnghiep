<?php
	$sql_loaisp ="select * from loaisp";
    $query = mysqli_query($mysqli, $sql_loaisp);
?>
			<h2 class="tile_box">≡ Danh mục sản phẩm</h2>
        	<p>LOẠI SẢN PHẨM</p>
            <div class="danhsachsanpham">
            	<ul>
               <?php 
               while($dong_sp = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                ?>
                <li>
                    <a style="font-weight: bold;" href="index.php?xem=1&id=<?php echo $dong_sp['id_loaisp']  ?>"><?php echo $dong_sp['tenloaisp'] ?></a>
                </li>
                <?php 
            }
                 ?>
                </ul>
            </div>
<?php
//    $sql_thuonghieusp ="select * from thuonghieusp";
//    $query_thuonghieu = mysqli_query($mysqli, $sql_thuonghieusp);
 
?>
			
<!--           <div class="danhsachsanpham">
			<p class="text-ali">THƯƠNG HIỆU </p>
            	<ul>
                	 <?php
//                while($dong_thuonghieu = mysqli_fetch_array($query_thuonghieu, MYSQLI_ASSOC)){
                ?>
 //                   <li><a style="font-weight: bold;" href="index.php?xem=Content_right_chitietthuonghieu.php&id=<?php echo $dong_thuonghieu['id_thuonghieu'] ?>"><?php echo $dong_thuonghieu['tenthuonghieu'] ?></a></li>
                   <?php
 //               }
                   ?>
                </ul>
            </div> -->
