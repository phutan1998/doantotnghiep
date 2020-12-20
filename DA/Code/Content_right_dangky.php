<?php 
  include('config.php');
  if(isset($_POST['dangky'])){
  	$tenkhachhang=$_POST['tenkhachhang'];
  	$matkhau=$_POST['matkhau'];
  	$email=$_POST['email'];
  	$hoten=$_POST['hoten'];
    $hinhdaidien=$_FILES['hinhdaidien']['name'];
    $hinhanh_tam=$_FILES['hinhdaidien']['tmp_name'];
    move_uploaded_file($hinhanh_tam,'./admin/ThanhVien/hinhdaidien/'.$hinhdaidien);
    $name = $_FILES["hinhdaidien"]["name"];
    $type = $_FILES["hinhdaidien"]["type"];
    $size = $_FILES["hinhdaidien"]["size"];
    move_uploaded_file($_FILES["hinhdaidien"]["tmp_name"], "../admin/ThanhVien/hinhdaidien/$name");
  	$ngaysinh=$_POST['ngaysinh'];
  	$gioitinh=$_POST['gioitinh'];
  	$sodt=$_POST['sodt'];
  	$diachi=$_POST['diachi'];
    $role=0;
    if ($tenkhachhang == "" || $matkhau == ""   ||  $hoten == "" ||$email == "" || $ngaysinh == "" || $gioitinh == "" || $sodt == ""|| $diachi == "") {
      echo "Bạn vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    
    }
    // Mã khóa mật khẩu
      $matkhau = md5($matkhau);
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($mysqli,"SELECT tenkhachhang FROM dangky WHERE tenkhachhang='$tenkhachhang'")) > 0){
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
    if (mysqli_num_rows(mysqli_query($mysqli,"SELECT email FROM dangky WHERE email='$email'")) > 0)
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
  	$sql_dangky="INSERT INTO dangky  VALUES ('0', '$tenkhachhang','$hinhdaidien', '$matkhau', '$email', '$hoten', '$ngaysinh', '$gioitinh', '$sodt', '$diachi','$role' )";
   // echo $sql_dangky;
  //exit();

   $run_query = mysqli_query($mysqli, $sql_dangky);
   
  	if($run_query){
    
      echo "<script>alert('Bạn đã dăng ký thành công! Mời bạn đăng nhập lại để mua nhé! '); window.location = 'logindangky.php';</script>";
  		
       
  	}
    else{
     echo "<script>alert('Không thành công bạn hãy đăng kí lại'); window.location = '../Code/Content_right_dangky.php';</script>";
  		//header('location:index.php?xem=dangky');
  	}
      }
  }
 ?>

 <!-- upload hinh -->
 <?php
// hàm này để upload 1 file lên server
// $name:
/* Sử dụng:
  $type = array("png", "gif", "jpg", "jpeg", "mp3");
  Upload_Single_File("fileToUpload", "images/", 5, $type);
*/
function Upload_Single_File($name, $folder, $max, $type){
  $target_file = $folder . basename($_FILES[$name]["name"]);
  $uploadOk = 0;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  
  // check fake
  $check = getimagesize($_FILES[$name]["tmp_name"]);
  if($check != false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES[$name]["size"] > $max*1024*1024) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  } 
  
  // Allow certain file formats
  if( !in_array($imageFileType, $type) ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES[$name]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  } 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Đăng ký thành viên</title>
  <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<center>
 <form action="" method="POST" enctype="multipart/form-data">
<div class="formdangky">
                    <p style="text-align: center; font-size: 23px; color: red; margin-top:10px;">Đăng ký thành viên</p>

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
         <td>Email  :</td>
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
      <p style=" color:red;">Chú ý các trường (*) không được để trống</p>
      <a href="../index.php" style="margin-top: -25px;margin-right: 25px;font-weight: bold;font-size: 20px; float: right;border: 2px solid red;padding:2px">Trở về </a>


       </div>   
        </form></center>
</body>
</html>

