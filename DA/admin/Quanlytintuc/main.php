<div class="left">
<?php 
        if(isset($_GET['acount'])){
          $tam=$_GET['acount'];
        }
        else{
          $tam='';
        }if($tam=='them'){
            include('Quanlytintuc/Them.php');
        }
        if($tam=='sua'){
            include('Quanlytintuc/Sua.php');
        }
        ?>
	
</div>

<div class="right">
	<?php 
    include('Quanlytintuc/Lietke.php');
	 ?>

</div>