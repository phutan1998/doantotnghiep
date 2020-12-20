

<div class="left">
    <?php 
        if(isset($_GET['acount'])){
          $tam=$_GET['acount'];
        }
        else{
          $tam='';
        }
        // if($tam=='them'){
        //     include('Lietke.php');
        // }
        if($tam=='themadmin'){
           include('Them-admin.php');
        }

        ?>

</div>


 <div class="right">
  <?php 
     if(isset($_GET['acount'])){
          $tam=$_GET['acount'];
        }
        else{
          $tam='';
        }
        if($tam=='them'){
            include('Lietke.php');
        }
   ?>

</div> 