  
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
    $sql_tintuclq = "select * from tintuc order by id_tintuc desc  limit $trang1,10";
    $query_tintuclq = mysqli_query($mysqli, $sql_tintuclq);
?>

<div class="tieude">
      <span style="float:left; background: #008aca ; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">TIN CÔNG NGHỆ</span>
    </div>

    
 
    <div>
            <aside class="tintucAll">
         <?php
        while($dong_tintuclq = mysqli_fetch_array($query_tintuclq, MYSQLI_ASSOC)){
        ?>
            <li class="thongtinbaidangAll">
                <a href="tintuc.php?xem=Tincongnghe/conten_tintuc_left.php&idthuonghieu=<?php echo $dong_tintuclq['id_thuonghieu'] ?>&id=<?php echo $dong_tintuclq['id_tintuc'] ?>">
                     <img class="thongtinhinhAll" src="admin/Quanlytintuc/hinh/<?php echo $dong_tintuclq['hinhanh'] ?> "  />
                    <h3 class="thongtinchuAll"><?php echo $dong_tintuclq['tomtat'] ?></h3>
                   <p class="ngay"><?php echo $dong_tintuclq['ngaydang'] ?></p>
                </a>
            </li>
            <?php
        }
          ?>
    </ul>
    </aside>

  </div>

<div class="trang"> <br>Trang
    <?php 
    $sql_trang = mysqli_query($mysqli, "select * from tintuc");
    $count = mysqli_num_rows($sql_trang);
    $a=ceil($count/10);
    for($b=1;$b<=$a;$b++){

      echo '<a href="?trang='.$b.'" style="text-decoration:none; background:#ccc; margin-left:5px;border:3px solid #ccc;  border-radius:3px;">'.' '.$b.' '.'</a>' ;
    }
     ?> 
     </div> 
   <!--  <div align="center" class="fb-comments" data-href="https://www.facebook.com/search/top/?q=VKGK%20Mobile" data-width="800" data-numposts="5" ></div> -->