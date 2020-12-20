<?php 
 // include('../config.php');
  if(isset($_POST['dangky'])){
  	$tenkhachhang=$_POST['tenkhachhang'];
  	$matkhau=$_POST['matkhau'];
  	$email=$_POST['email'];
  	$hoten=$_POST['hoten'];
    $hinhdaidien=$_FILES['hinhdaidien']['name'];
    $hinhanh_tam=$_FILES['hinhdaidien']['tmp_name'];
    move_uploaded_file($hinhanh_tam,'hinhdaidien/'.$hinhdaidien);
  	$ngaysinh=$_POST['ngaysinh'];
  	$gioitinh=$_POST['gioitinh'];
  	$sodt=$_POST['sodt'];
  	$diachi=$_POST['diachi'];
    $role=1;
    if ($tenkhachhang == "" || $matkhau == ""   ||  $hoten == "" || $ngaysinh == "" || $gioitinh == "" || $sodt == ""|| $diachi == "") {
      echo "Bạn vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    
    }
          // Mã khóa mật khẩu
      $matkhau = md5($matkhau);
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT tenkhachhang FROM dangky WHERE tenkhachhang='$tenkhachhang'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($mysqli, "SELECT email FROM dangky WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra dạng nhập vào của ngày sinh
    // if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $ngaysinh))
    // {
    //         echo "Ngày tháng năm sinh không hợp lệ . Vui long nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //         exit;
    //     }
          if (!preg_match("/^[0-9+ ]{10,20}$/i", $sodt))
    {
            echo "Số điện thoại không hợp lệ. Vui long nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
    else{
  	$sql_dangky="INSERT INTO dangky  VALUES ('0', '$tenkhachhang','$hinhdaidien', '$matkhau', '$email', '$hoten', '$ngaysinh', '$gioitinh', '$sodt', '$diachi','$role' ) ";
   // echo $sql_dangky;
  //exit();

   $run_query=mysqli_query($mysqli, $sql_dangky);
   
  	if($run_query){
    
      echo "<script>alert('Bạn đã dăng ký thành công'); window.location = 'home.php?quanly=ThanhVien&acount=them';</script>";
  		// header('location:Code/giohang.php');
       
  	}
    else{
     echo "<script>alert('Không thành công bạn hãy đăng kí lại'); window.location = 'home.php?quanly=ThanhVien&acount=them';</script>";
  		//header('location:index.php?xem=dangky');
  	}
      }
  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Đăng ký quản trị</title>
  <link rel="stylesheet" href="../styleadmin.css">
</head>
<body>
<center >

 <form action="" method="POST" enctype="multipart/form-data" >
<div class="formdangky" >
    <p style="text-align: center; font-size: 23px; color: red; margin-top:10px;">Đăng ký quản trị</p>

<table>
       <tr>
         <td> Tên đăng nhập <span style="color: red;">(*) </span>  : </td>
         <td><li><input  type="text" name="tenkhachhang" size="50" /></li></td>
       </tr>
       <tr>
        <td>  Mật khẩu <span style="color: red;">(*) </span> :</td>
        <td><li><input  type="password" name="matkhau" size="50" /></li> </td>
        </tr>
       <tr>
         <td>Email <span style="color: red;">(*) </span> :</td>
         <td> <li><input  type="text" name="email" size="50"  /></li> </td>
       </tr>
       <tr>
            
         <td>Họ và tên <span style="color: red;">(*) </span> :</td>
        <td> <li><input  type="text" name="hoten" size="50" /></li>  </td>
       </tr>
       <tr>
            
         <td>Hình ảnh<span style="color: red;">(*) </span> :</td>
          <td ><li><input type="file" name="hinhdaidien" size="50" ></li></td>
       </tr>

       <tr>
         <td> Ngày sinh <span style="color: red;">(*) </span>  :</td>
        <td>  <li> <input  type="date" name="ngaysinh" placeholder="yyy/mm/dd  vd.1996/01/01" /> </li>  </td>
       </tr>
        <tr>
        <td>  Giới tính <span style="color: red;">(*) </span> :</td>
        <td>   <li style="margin-left: 8px; margin-top: 10px; "><select  name="gioitinh" >
                           
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select></li>   </td>
         </tr>
      <tr>
        <td> Số điện thoại <span style="color: red;">(*) </span>  :</td>
        <td><li><input type="text"  name="sodt" size="50" /></li> </td>
      </tr>
      <tr>
         <td> Địa chỉ <span style="color: red;">(*) </span>  :</td> 
        <td><li><input type="text" name="diachi" size="50" /></li>  </td>
      </tr>
      <tr><td></td>
        <td  ><input type="submit" name="dangky" value="Đăng ký" style="color: white; font-weight: bold;font-size: 15px;background: #4084F2; position: relative;border-radius: 5px;height: 40px; " /> </td>
      </tr>
      </table><br>
      <p align="center" style=" color:red;">Chú ý các trường (*) không được để trống</p>
      <a href="../admin/home.php?quanly=ThanhVien&acount=them" style="margin-top: -25px;margin-right: 25px;font-weight: bold;font-size: 20px; float: right;border: 2px solid red;padding:2px">Trở về </a>
       </div>   
        </form></center>
</body>
</html>

