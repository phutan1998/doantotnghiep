<div class="content">
  <div class="contentop">
    <div class="tintuc">
      <?php 
           include('Code/Thongtincongnghe.php');
       ?>
    </div>
    <div class="slide">
      <?php 
           include('Content_slide_demo.php');
       ?>
    </div>
    
  </div>

<!--	 <div class="left">
   <?php 
 //  include('Code/Content_left_danhsach.php');
    ?>
      <div class="quancao">      
       <td> <div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:300px;text-align:center; color:white;">QUẢNG CÁO</span></div><br>
        <td><img src="Images/01.jpg" alt=""></td><br>
        <td><img src="Images/02.jpg" alt=""></td><br>
        <td><img src="Images/03.jpg" alt=""></td>
    </div> 
</div>-->
    
    <div class="right">
      <?php 
        if(isset($_GET['xem'])){
          $tam=$_GET['xem'];
        }
        else{
          $tam='';
        }
        if($tam=='1'){
          include('Code/Content_right_chitietloaisanpham.php');

        }else if($tam=='Content_right_chitietsanpham.php'){
          include('Code/Content_right_chitietsanpham.php');
          
        }else if($tam=='Content_right_chitietthuonghieu.php'){
          include('Code/Content_right_chitietthuonghieu.php');
        }
         else if($tam=='dangky'){
            include('Code/Content_right_dangky.php');
        }
        else if(isset($_POST['search'])){
            include('Code/Timkiem.php');
        }
        else if($tam=='thanhtoan'){
            include('Code/thanhtoan.php');
        }
        else if($tam=='giohang'){
            include('Code/giohang.php');
        }
        
        else if($tam=='dangnhap'){
            include('Code/dangnhap.php');
        }else if($tam=='gioithieu'){
            include('Code/gioithieu.html');
        }

        else{
           include('Code/spmoi.php');
             include('Code/Content_right_tatcasanpham.php');
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
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1288026784586112";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div style='padding:10px 10px; position: fixed; top: 50%; left: 50%; margin-top: -150px; margin-left: -680px;border-radius: 0;border: 0px solid #F041DE;'>
<div class="fb-like" data-href="https://www.facebook.com/VKGK-Mobile-1470454106335217/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
</div>


  </body>
  </html>