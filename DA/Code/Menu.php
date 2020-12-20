
<div class="Menu">
		<ul>
				<li><a class="menubtn" href="/DA/index.php?xem=1&id=21">Điện thoại</a></li>
				<li><a class="menubtn" href="/DA/index.php?xem=1&id=21">Laptop</a></li>
				<li><a class="menubtn" href="/DA/index.php?xem=1&id=22">Tablet</a></li>
				<li><a class="menubtn" href="/DA/index.php?xem=1&id=26">Phụ kiện</a></li>
				<li><a class="menubtn" href="/DA/index.php?xem=1&id=21">Đồng hồ</a></li>
			
			
			<?php
					if(!isset($_SESSION["logindangky"])){
			?>
				
				<li><a href="Code/logindangky.php">Đăng nhập </a></li>
				
			<?php					
					}
			?>
			</ul>
			<ul>
				<li style="width: auto;"><a href="#" class="canhan"  ></a>
				 <span width="100%" height="100%"  style="align-items: center;display: flex;
    flex-direction: row; font-weight:bold;font-family: inherit;margin-left: 5px;text-align: center;" >	
						<?php 
						if(isset($_SESSION["logindangky"])){
							if($_SESSION["logindangky"] =="allowed"){
								echo '<img  src="./admin/ThanhVien/hinhdaidien/'.$_SESSION['hinh'].'" width="28" height="28" style="border-radius: 50px;"/>';
						        echo '<span style="color: #fff;margin-left: 5px;text-transform: capitalize;">'.$_SESSION['dangnhap'].'</span>';
						        
						    }
						}
						
						 ?></span></li>

			</ul>
			<?php
					if(isset($_SESSION["logindangky"])){
						if($_SESSION["logindangky"] =="allowed"){
			?>
			<ul>
				<li><i class="caidat" ></i>
					<ul>
						<li><a href="#">Trang cá nhân</a></li>
						<li><a href="Code/dangxuat.php">Đăng xuất</a></li>
					</ul>
				</li>
			</ul>
			<?php
					}
						}
						
			?>
</div>
			
