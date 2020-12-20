<div class="content">

   <div class="left_tintuc">
   <?php 
   include('Tincongnghe/Tinmoi.php');
    ?>
     
  </div>
    
    <div class="rightnew">
      <?php 
        if(isset($_GET['xem'])){
          $tam=$_GET['xem'];
        }
        else{
          $tam='';
        }
         if ($tam=='Tincongnghe/conten_tintuc_left.php') {
         include('Tincongnghe/conten_tintuc_left.php');
        }

        else{
           include('Tincongnghe/conten_tintuc_index.php');
        }
     ?>
    </div>

  </div>
  <div class="clear"></div>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
   


  </body>
  </html>