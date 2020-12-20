<div class="left">
<?php 
        if(isset($_GET['acount'])){
          $tam=$_GET['acount'];
        }
        else{
          $tam='';
        }if($tam=='them'){
            include('Them.php');
        }
        if($tam=='sua'){
            include('Sua.php');
        }
        ?>
	
</div>

<div class="right">
	<?php 
    include('Lietke.php');
	 ?>

</div>