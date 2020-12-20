<?php
  $sql1="select chitietdonhang.*, donhang.*,chitietsp.*, dangky.*, chitietdonhang.soluong * chitietdonhang.dongia as thanhtien from chitietdonhang,donhang,chitietsp,dangky where dangky.tenkhachhang=donhang.tenkhachhang and chitietdonhang.donhang_id=donhang.id and chitietdonhang.sanpham_id=chitietsp.id_sp and donhang.trangthai='1' order by chitietdonhang.id desc ";
   $run1=mysqli_query($mysqli, $sql1);
//  $dong_donhang1=mysqli_fetch_array($run1);
?>

<center><h1 style="font-size: 25px;color: red;margin-top: 10px;">QUẢN LÝ KIỂM DUYỆT ĐƠN HÀNG</h1><br></center>

<table  width="100%" border="1" style="background:#76f529; border: #fff;height:30px;font-weight: bold;text-align: center;" >
  <tr style="height:30px;font-weight: bold;background: #7c16bc">
    <td ><div align="center">STT</div></td>
    <td align="center">Tên khách hàng</td>
    <td align="center">Sản phẩm</td>
    <td align="center">Hình ảnh</td>
    <td align="center">Số lượng</td>
    <td align="center">Giá</td>
     <td align="center">Thành tiền</td>
      <td align="center">Ngày đặt</td>
      <td align="center">Số điện thoại</td>
      <td align="center">Tình trạng</td>
   
    <td colspan="2" align="center">Quản lý</td>
  </tr>
  <?php
    $i=1;
    while($dong=mysqli_fetch_array($run1, MYSQLI_ASSOC)){
  ?>
  <tr>
    <td align="center"><?php echo $i; ?></td>
    <td style="background: #8695ae" align="center"><?php echo $dong['tenkhachhang']; ?></td>
    <td align="center"><?php echo $dong['tensp']; ?></td>
    <td align="center"><img src="Quanlychitietsp/Hinhbaiviet/<?php echo $dong['hinhanh'] ?>" width="60" height="60"></td>
    <td align="center"><?php echo $dong['soluong']; ?></td>
    <td align="center"><?php echo number_format( $dong['dongia']).'.VND'; ?></td>
    <td align="center"><?php echo number_format($dong['thanhtien']).'.VND'; ?></td>
     <td align="center"><?php echo $dong['date']; ?></td>
      <td align="center"><?php echo '0'.$dong['sodt']; ?></td>
    <td align="center" style="background: #8695ae"><?php if($dong['duyetdon']==0){
      echo "Chưa duyệt";
      }else{
        echo ' <p style="color:#bc1622">Đã duyệt đơn</p> ';
        } ?></td>
       <td align="center"> <form action="Quanlydonhang/Xuly.php?id=<?php echo $dong['id'] ?>&tenkhachhang=<?php echo $dong['tenkhachhang'] ?>&
donhang_id=<?php echo $dong['donhang_id'] ?>&
tensp=<?php echo $dong['tensp'] ?>&
gia=<?php echo $dong['gia'] ?>&
hoten=<?php echo $dong['hoten'] ?>&
diachi=<?php echo $dong['diachi'] ?>&
sodt=<?php echo $dong['sodt'] ?>&
email=<?php echo $dong['email'] ?>" method="POST"><input type="submit" name="duyet" value="Duyệt" style="border:1px solid #F041DE; border-radius: 5px; height:30px;width: 60px; background:#7c16bc; color: white; "></form></td>
       
         
     
    <td align="center">Xóa <br><a href="Quanlydonhang/Xuly.php?id=<?php echo $dong['id'] ?>&id1="<?php echo $dong['id'] ?>"><img src="Quanlychitietsp/Hinhbaiviet/deletered.png" width="30px" height="30px"></a></td>
  </tr>
  <?php
  $i++;
  }
  		require 'PHPMailerAutoload.php';
		require 'credential.php';

		$mail = new PHPMailer;

		$mail->SMTPDebug = 4;                                 // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = EMAIL;                 			  // SMTP username
		$mail->Password = PASS;                          	  // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom(EMAIL, 'BachKhoaMobile');
		$mail->addAddress(EMAIL,EMAIL);     // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		///$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(tue); 								   // Set email format to HTML

		$mail->Subject = 'Xác nhận đơn hàng';
		$mail->Body    = '1111111111111111';

		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Message has been sent';
		}
  ?>
</table>
