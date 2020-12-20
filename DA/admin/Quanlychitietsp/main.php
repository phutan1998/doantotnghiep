 <div class="left">
<?php 
        if(isset($_GET['acount'])){
          $tam=$_GET['acount'];
        }
        else{
          $tam='';
        }if($tam=='them'){
            include('Quanlychitietsp/Them.php');
        }
        if($tam=='sua'){
            include('Quanlychitietsp/Sua.php');
        }
        ?>
	
</div>

<div class="right">
	<?php 
    include('Quanlychitietsp/Lietke.php');
	 ?>

</div>