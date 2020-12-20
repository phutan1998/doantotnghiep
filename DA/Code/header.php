<div class="header">
<div class="left">
			<a href="/DA/index.php"><span>PHU TAN</span></a>
</div>
<div class="right">
			<form action="index.php" method="POST">
			<div class="search">
				<input class="search-input" id="keySearch" name="key" value="Bạn tìm gì..." onblur="(this.value == '') ? this.value = 'Bạn tìm gì...' : this.value = this.value" onfocus="(this.value == 'Bạn muốn mua gì...') ? this.value = '' : this.value = this.value" type="text">
				<button type="submit" name="search" class=" button-search" value="Search">Search</button>
				<!-- <input type="submit" name="search" value="search" placeholder="Search"> -->
			</div>
			<a href="Code/giohang.php?add=
			<?php session_start(); (isset($_SESSION['cartdd']) ? $_SESSION['cartdd'] : ''); ?>
			" title="Giỏ hàng của bạn">
								<p class="icon"> Giỏ hàng <i class="shopping-cart"> </i>  </p>
								
							</a>
			
				</form>
</div>
	</div>