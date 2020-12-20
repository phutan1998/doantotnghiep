


<div class="content">

   
 
			 <?php 
        if(isset($_GET['quanly'])){
          $tam=$_GET['quanly'];
        }
        else{
          $tam='';
        }if($tam=='Quanly'){
            include('Quanly/main.php');
        }
        
        if($tam=='Quanlychitietsp'){
            include('Quanlychitietsp/main.php');
        }
        if($tam=='Quanlythuonghieusp'){
            include('Quanlythuonghieusp/main.php');
        }
        if($tam=='doimatkhau'){
            include('doimatkhauadmin.php');
        }
         if($tam=='ThanhVien'){
            include('ThanhVien/main.php');
        }
        if($tam=='Quanlydonhang'){
            include('Quanlydonhang/main.php');
        }
         if($tam=='Quanlythongke'){
            include('Quanlythongke/main.php');
        }
         if($tam=='Quanlytintuc'){
            include('Quanlytintuc/main.php');
        }
        if($tam=='Slide'){
            include('Slide/main.php');
        }
        if($tam=='Lienhe'){
            include('Lienhe/main.php');
        }
        elseif($tam == 'timkiem'){          
             include('Timkiem/timkiem.php');
        }
        ?>
				<div class="clear"></div>



			</div>
	