
 <?php
  if(isset($_POST['search'])){
    $search = $_POST['key'];
    $sql_search ="select * from chitietsp where tensp LIKE '%$search%' or gia LIKE '%$search%'or xuatxu LIKE '%$search%'";
    $query_search = mysqli_query($mysqli, $sql_search);
  }
?>
         <div class="tieude"><span style="float:left; background: #008aca; border-top-right-radius: 2em; width:400px;text-align:center; color:white;">Sản phẩm tìm thấy</span></div>
            
             <div class="sanphamall">
             <?php
       if($count = mysqli_num_rows($query_search) == 0){?>
         <p>Không tìm thấy sản phẩm nào</p>
       <?php
       }else{
       ?>
              <ul>
                <?php
        while($dong_search = mysqli_fetch_array($query_search, MYSQLI_ASSOC)){
        ?>
                  <li><a style="text-decoration: none;" href="index.php?xem=Content_right_chitietsanpham&id=<?php echo $dong_search['id_sp'] ?>">
                      <img src="admin/Quanlychitietsp/Hinhbaiviet/<?php echo $dong_search['hinhanh'] ?> " width="200" height="200" />
                            <p ><?php echo $dong_search['tensp'] ?></p>
                        <p style="color:#F00; ">Giá sản phẩm:<?php echo number_format($dong_search['gia']).'.VND' ?> </p>
                       <div class="quickly"><p>Chi tiết</p></div>
                    </a></li>
                    <?php
        }
       }
          ?>
                </ul>
             </div>
             