<?php
 session_start();
if($_SESSION["logindangky"]!="allowed"){
    header('location:logindangky.php');
}
?>
<head >
    <style>
.header{ width: 100%;height: 20%;border: 1px solid #008aca;background: #fff;background: linear-gradient(90deg, rgba(2,0,36,1) 23%, rgba(44,9,121,0.6057773451177346) 51%, rgba(0,212,255,1) 100%);
}
.header .left a span {
	float: left;
    font-size: 38px;
    color: #fff;
}
.header .left a img{width:30%; height: 100%; float: left;
}
.header .right{ width:70%; height: 100%; float: right;
}

.search{ max-width: 100%; height: 10%;margin-top: 10px;margin-right: 50px;float: left;
}

.search .search_text{ float: left; width: 80px;color: #0479C8; padding: 8px 0 0 10px;
}
.search .search-input { padding: 4px 20px;   width: 380px;   height: 34px; border: solid 2px #4471c2;  border-right: none;  box-shadow: none; display: inline-block;font-style:italic; font-size:14px;  margin-left: 120px;
}
.search .button-search{
  height: 34px;
  width: 60px;
  display: inline-block;
  vertical-align: top;
  background: #4471c2;
  margin-left: -4px;
   border: solid 2px #4471c2; 
   color: white;
   font-weight: bold;
}


    .footer1{
  width: 100%;
  height: 48%;
  border: 1px solid #008aca;
  float: left;
  border-radius: 10px;
  background:#008aca;
  margin-top:5px;
}
h1{
  font-size: 20px;
  margin-top: 20px;
}
.left_footer1 {
   height: 100%;
    float: left;
    width: 25%;
}
.center_footer1 {
  height: 100%;
    float: left;
    width: 25%;
    text-align: left;
    color: black;
    overflow: hidden;
}
.footer1 li{

  height: 30px;
  width: 300px;     
    list-style: none; 
    margin-top: 12px;                               
}
.footer1 a {
  padding-left: 50px;
    text-decoration: none;
    color: white;
    width: 300px;
  text-align: center;
  font-size: 17px;
}
.footer1 a:hover{
  margin-left: 10px;
}
h1{
  margin-top: 5px;
  text-align: center;
  margin-right:60px;
}
.right_footer1{
  width: 50%;
  float: left;
  height: auto;
  margin-top: 15px;
}
</style>
</head>

<body style="background:#f0f0f0">
    <div class="wrap" style=" width: 100%;height: auto;float: left;">
        <div class="header"  >
<div class="left">
            <a href="/DA/index.php"><span>PHU TAN</span></a>
</div>
<div class="right">
            <form action="../index.php" method="POST">
            <div class="search">
                <input class="search-input" id="keySearch" name="key" value="Bạn muốn mua gì..." onblur="(this.value == '') ? this.value = 'Bạn muốn mua gì...' : this.value = this.value" onfocus="(this.value == 'Bạn muốn mua gì...') ? this.value = '' : this.value = this.value" type="text">
                <button type="submit" name="search" class=" button-search" value="Search">Search</button>
                <!-- <input type="submit" name="search" value="search" placeholder="Search"> -->
            </div>
          <?php 
if($_SESSION["logindangky"] =="allowed"){
        echo '<marquee align="center" direction="left" height="60" scrollamount="10" width="90%">
        <h1 align="center" style="color: blue;font-size:25px;margin-top:25px;" >Chào ngày mới <span style="color: red"> '.' '.$_SESSION['dangnhap'].'</span> <span align="center" style="color: blue" >chúc bạn mua hàng vui vẻ nha @_@</span></marquee>';
    }
 ?>
            
                </form>
</div>
    </div>
        
   <div class="top" style="width: 100%;height: auto;float: left;">
       
   
   

  <p align="center" style="font-size: 30px; color: #008aca; margin-top: 1px" >GIỎ HÀNG CỦA BẠN</p>
<?php
include_once('config.php');
    include_once('importlibs.php');
     //$id=$_GET["add"];
      $id = (isset($_GET['add']) ? $_GET['add'] : '');
	
     if(isset($_GET["type"])){
            $idht = $_SESSION["cartdd"];
            $sql ="SELECT chitietdonhang.*, chitietsp.tensp as pname FROM chitietdonhang INNER JOIN chitietsp ON chitietdonhang.sanpham_id = chitietsp.id_sp WHERE donhang_id = '$idht'";
            $query = mysqli_query($mysqli, $sql);
            $price="";

             echo '<table  >
                 <style >
                <tr>
                <th>id sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
                </tr>
                <tbody>       
                ';
            
            while($dong = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            echo '<tr>
                    <td>'.$dong["id"].'</td>
                    <td>'.$dong["pname"].'</td>
                    <td><input type="number" id="sp-'.$dong["id"].'" onchange="change('.$dong["id"].')" value="'.$dong["soluong"].'"</td>
                    <td>'.$dong["dongia"].'</td>
                    <td>'.$dong["soluong"] * $dong["dongia"] .'</td>
                    <td><button onclick="xoa('.$dong["id"].')">Xoa</button></td>        
            </tr>';
            }
            echo '</tbody></table><button onclick="xacnhan('.$idht.')">Mua hàng</button>
            <button onclick="trove()">Mua thêm</button';
        }
    else{
            if(isset($_GET["add"])){
                $id = $_GET["add"];
            }
            $sql ="select * from chitietsp where id_sp='$id'";
            $query = mysqli_query($mysqli, $sql);
            $price="";
            while($dong = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                $price = $dong["gia"];
            }
            if(!isset($_SESSION["cartdd"])){
            $tkh = $_SESSION["dangnhap"];
            $sql ="INSERT INTO donhang(date, tenkhachhang) VALUES(NOW(),'$tkh')";
            mysqli_query($mysqli, $sql);
            $sql1 ="SELECT MAX(id) as idht FROM donhang limit 0,1";
            $query1 = mysqli_query($mysqli, $sql1);
            while($dong1 = mysqli_fetch_array($query1, MYSQLI_ASSOC)){
                    $_SESSION["cartdd"]= $dong1["idht"];
            }
            $idht = $_SESSION["cartdd"];       
            if(!isset($_SESSION["cart"][$id])){
                $sql2 ="INSERT INTO chitietdonhang(donhang_id, sanpham_id, soluong, dongia) VALUES('$idht','$id','1','$price')";
                mysqli_query($mysqli, $sql2);
                $_SESSION["cart"][$id]=$id;
            }else{
                $sql3 ="UPDATE chitietdonhang SET  soluong =soluong + 1 WHERE  donhang_id='$idht' AND sanpham_id = '$id'";
                mysqli_query($mysqli, $sql3);
            }
            }else{
                $idht = $_SESSION["cartdd"];
                if(!isset($_SESSION["cart"][$id])){
                $sql4="INSERT INTO chitietdonhang(donhang_id, sanpham_id, soluong, dongia) VALUES('$idht','$id','1','$price')";
                mysqli_query($mysqli, $sql4);
                $_SESSION["cart"][$id]=$id;
            }else{
                $sql5 ="UPDATE chitietdonhang SET  soluong =soluong + 1 WHERE  donhang_id='$idht' AND sanpham_id = '$id' ";
                mysqli_query($mysqli, $sql5);
            }
            }
            $idht = $_SESSION["cartdd"];
            $sql ="SELECT chitietdonhang.*, chitietsp.hinhanh as hinhanh,chitietsp.tensp as tensp  FROM chitietdonhang INNER JOIN chitietsp ON chitietdonhang.sanpham_id = chitietsp.id_sp WHERE donhang_id = '$idht'";
            $query =mysqli_query($mysqli, $sql);
            $price ="";
            echo '<table border="1" width="80%" height="30%" align="center" style="background:white;margin-top:1px" >
               <tr style="background: #008aca; ;font-size:20px;">
                <th style="color: white">ID sản phẩm</th>
                <th style="color: white">Tên sản phẩm</th>
                <th style="color: white">Hình ảnh</th>
                <th style="color: white">Số lượng</th>
                <th style="color: white">Đơn giá</th>
                <th style="color: white">Thành tiền</th>
                <th style="color: white">Xóa</th>
                </tr>
                <tbody>       
                ';
            $tong=0;

            while($dong = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                $tong+=($dong["soluong"] * $dong["dongia"] );
            echo '<tr>
                    <td style="text-align:center; margin-left:10px ;">'.$dong["id"].'</td>
                    <td style="text-align:center;margin-left:10px ;">'.$dong["tensp"].'</td>
                    <td style="text-align:center;margin-left:10px ;"><img src="../admin/Quanlychitietsp/Hinhbaiviet/'.$dong["hinhanh"].'" width="100" height="100" /></td>
                    <td style="text-align:center;width:50px;text-align:center;"><input type="number" id="sp-'.$dong["id"].'" onchange="change('.$dong["id"].')" value="'.$dong["soluong"].'"</td>
                    <td style="text-align:center;margin-left:10px ;">'.number_format($dong["dongia"]).'.VND'.'</td>
                    <td style="text-align:center;margin-left:10px ;">'.number_format( $dong["soluong"] * $dong["dongia"]).'.VND'.'</td>
                    <td style="text-align:center;margin-left:10px ;"><button onclick="xoa('.$dong["id"].')"  "><img src="../Images/deletered.png" width="30" height="30" ></button></td>        
                     
            </tr>';
            }
            echo '<tr>
                <td></td>
                <td></td>
                <td></td>
                <td><th>Tổng cộng:</th></td>
                <td style="color:red;font-size:20px;font-weight:bold;text-align:center">'.number_format($tong).'.VND'.'</td>
                </tr>';
             echo '</tbody><tr></table>
             <p align="center" ><button onclick="xacnhan('.$idht.')" style="color:white;border-radius:10px; background:#008aca ;padding:2px;text-align:center; " >
             <p align="center"  style="height:8px;width:100px;font-size:15px"> Xác nhận mua</p></button>
             <button onclick="trove()" style="color:white; background:#008aca ;border-radius:10px;padding:2px;text-align:center;font-size:15px " >
             <p align="center"  style="height:8px;width:100px ">Mua tiếp</button></p></p>';
    }   
    
        
         
   
?>
 </div>
 <div class="footer1" " >
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1288026784586112';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    

<div class="footer1">
     <div class="left_footer1">
        <li>    <h1 >Hổ trợ khách hàng</h3></li>
                  <li>    <a href="#">Chính sách bảo hành</a><br></li>
                    <li>  <a href="#">Tư vấn khách hàng</a><br></li>
                   <li>   <a href="#">Hình thức thanh toán</a><br></li>
                    <li>  <a href="#">Chính sách đổi/trả hàng</a></li>

       </div>
       <div class="center_footer1">
          <li>   <h1>Bài viết mới</h3></li>

                   <li>   <a href="#">Tìm hiểu mua trả góp</a><br></li>
                    <li>  <a href="#">Tuyển dụng</a><br></li>
                     <li> <a href="#">Góp ý/ Khiếu nại</a><br></li>
                   <li>   <a href="#">Xem bản tin</a></li>
          </div>
         <div align="center" class="right_footer1">
           <div class="fb-page" data-href="https://www.facebook.com/UngDungHaySinhVien/" 
          data-width="450" data-hide-cover="false" data-show-facepile="true"></div>
         
           <li><a href="https://www.facebook.com/NopitaUXuk">Created By PHU TAN</a></li></div>

       
 
     
 </div>

 </div>