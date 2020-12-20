<div class="header">
<div class="left">
	
</div>
<div class="right">
	<?php
    if(isset($_SESSION['home.php'])){
       // echo  '<p >Chào ngày mới :</p>'.$_SESSION['home.php'];
         echo '<marquee align="center" direction="left" height="40" scrollamount="10" width="90%">
        <h1 align="center" style="color: blue" >Chào quản trị viên <span style="color: red"> '.' '.$_SESSION['home.php'].'</span> <span align="center" style="color: blue" >chúc bạn một ngày vui vẻ nha @_@</span></marquee>';
    }
    ?>
			<form action="home.php?quanly=timkiem&ac=sp" method="POST">
			<div class="search">
				<input class="search-input" id="keySearch" name="tensp" value="Bạn muốn tìm gì..." onblur="(this.value == '') ? this.value = 'Bạn muốn tìm gì...' : this.value = this.value" onfocus="(this.value == 'Bạn muốn tìm gì...') ? this.value = '' : this.value = this.value" type="text">
				<button type="submit" name="timkiem" class=" button-search" value="Search">Search</button>
				<!-- <input type="submit" name="search" value="search" placeholder="Search"> -->
			</div>
			
			
				</form>
	
	
</div>
	</div>