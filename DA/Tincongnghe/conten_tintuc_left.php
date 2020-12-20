 
<?php
  if(isset($_GET['trang'])){
    $lay_trang=$_GET['trang'];
  }else{
    $lay_trang='';
  }
  if($lay_trang==''||$lay_trang==1){
    $trang1=0;
  }else {
    $trang1=($lay_trang*10)-10;
  }

?>

 <?php
    $sql_tintuc = "select * from tintuc where id_tintuc='$_GET[id]'";
    $query_tintuc = mysqli_query($mysqli, $sql_tintuc);
?>

        
<table width="100%" height="auto"  style="border-collapse:collapse; background: white; border-radius: 20px;">
  <div class="tieude"><span style="float:left; background: #008aca; border-top-right-radius: 2em; width:400px;text-align:center; color:white;margin-bottom: 5px;">THÔNG TIN BÀI VIẾT</span></div>
        <?php
        while($dong_tintuc = mysqli_fetch_array($query_tintuc, MYSQLI_ASSOC)){
        ?> 
  <tr>
   <td align="center" style="font-size: 30px;font-weight:bold;"><p ><?php echo $dong_tintuc['tieude'] ?></h3></p> 
  </tr>
  <tr>
    <td colspan="2" align="center" style="padding: 10px;"><?php echo $dong_tintuc['noidung'] ?></td>
  </tr>
   <?php
        }
          ?>
  </table>
    


  <?php
            $sql_lienquan="select * from tintuc where id_thuonghieu='$_GET[idthuonghieu]' and tintuc.id_tintuc<>$_GET[id] ";
          $row_lienquan=mysqli_query($mysqli,$sql_lienquan);
          $count_lienquan=mysqli_num_rows($row_lienquan);
          if($count_lienquan>0){
           ?>
              <div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">TIN LIÊN QUAN</span></div>      
 
    <div >
            <aside class="tintucAll">
         <?php
        while($dong_tintuclq = mysqli_fetch_array($row_lienquan, MYSQLI_ASSOC)){
        ?>
            <li class="thongtinbaidangAll">
                <a href="tintuc.php?xem=Tincongnghe/conten_tintuc_left.php&idthuonghieu=<?php echo $dong_tintuclq['id_thuonghieu'] ?>&id=<?php echo $dong_tintuclq['id_tintuc'] ?>">
                     <img class="thongtinhinhAll" src="admin/Quanlytintuc/hinh/<?php echo $dong_tintuclq['hinhanh'] ?> "  />
                    <h3 class="thongtinchuAll"><?php echo $dong_tintuclq['tomtat'] ?></h3>
                   <p style="margin-top: 50px;"><?php echo $dong_tintuclq['ngaydang'] ?></p>
                </a>
            </li>
            <?php
        }
          ?>
    </ul>
    </aside>

    </div><!-- Ket thuc box sp liên quan -->
            <?php
          }else{
            echo'<div class="tieude"><span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">TIN LIÊN QUAN</span></div>  ';
            echo '<p style="padding:30px;">Hiện chưa có thêm tin liên quan nào</p>';
          }
      ?>
 
<br>
<div class="trang">Trang
    <?php 
    $sql_trang = mysqli_query($mysqli, "select * from tintuc");
    $count = mysqli_num_rows($sql_trang);
    $a = ceil($count/10);
    for($b = 1; $b <= $a; $b++){

      echo '<a href="?trang='.$b.'" style="text-decoration:none; background:#ccc; margin-left:3px;border:5px solid #ccc;  border-radius:3px;">'.' '.$b.' '.'</a>' ;
    }
     ?> 
     </div> 
    <div align="center" class="fb-comments" data-href="https://www.facebook.com/search/top/?q=VKGK%20Mobile" data-width="800" data-numposts="5" ></div>



