<?php
	include('../config.php');
	$id=$_GET['id'];
	if(isset($_POST['them'])){

	}else if(isset($_POST['duyet'])){
		// // //check
		 $sql="UPDATE chitietdonhang SET duyetdon = 1 WHERE chitietdonhang.donhang_id= '$id'";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlydonhang&acount=them');
		
		//send mail
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
		$mail->addAddress($_GET['email'], $_GET['tenkhachhang']);     // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		///$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(tue); 								   // Set email format to HTML

		$mail->Subject = 'Xác nhận đơn hàng';
		$mail->Body    = '<table cellpadding="0" cellspacing="0" border="0" align="center" style="font-size:14px;text-align:left;border-collapse:collapse;padding:0;margin:0 auto;width:90%"><tbody>
		<tr>
		<td valign="top" style="font-family:Arial Regular,Arial,Verdana;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:20px;margin:0;border:1px solid #ebebeb;background:#fff">
		<div style="line-height:30px;font-size:14px;padding-bottom:30px">
		Chào bạn, '.$_GET['tenkhachhang'].'.<br>Cảm ơn bạn đã mua hàng tại Bách Khoa Mobile - Top thương hiệu thời trang tại Việt Nam.<br>
		Đơn hàng số #'.$_GET['donhang_id'].' của bạn đã được đặt thành công. Bạn vui lòng giữ máy, nhân viên Bách Khoa Mobile sẽ liên hệ trong 4h làm việc.<br>

		</div>
			<h2 style="color:#0f0f0f;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">1. CHI TIẾT ĐƠN HÀNG SỐ <strong>#'.$_GET['donhang_id'].'</strong> LÚC 8:57, 21/11/2020</h2>
		<div style="margin-bottom:40px">
			<table cellspacing="0" cellpadding="0" border="0" style="font-size:14px;text-align:left;width:100%;font-family:&#39;Helvetica Neue&#39;,Helvetica,Roboto,Arial,sans-serif">
		<tbody><tr>
		<th>Sản phẩm</th>
						<th>Giá</th>
					</tr>
		</tbody><tbody><tr>
		<td style="text-align:left;vertical-align:middle;font-family:&#39;Helvetica Neue&#39;,Helvetica,Roboto,Arial,sans-serif;word-wrap:break-word">
				'.$_GET['tensp'].'	</td>

				<td style="text-align:left;vertical-align:middle;font-family:&#39;Helvetica Neue&#39;,Helvetica,Roboto,Arial,sans-serif">
					<span>'.$_GET['gia'].'<span>VNĐ</span></span>		</td>
			</tr></tbody>
		<tfoot style="line-height:30px;margin-top:30px;display:block;padding:10px">

		<tr>
		<th>Giao nhận hàng:</th>
								<td>Free Shipping</td>
							</tr>
		<tr>
		<th>Phương thức thanh toán:</th>
								<td>Thanh toán sau khi nhận hàng (COD)</td>
							</tr>
		<tr>
		<th>Tổng cộng:</th>
								<td><span>'.$_GET['gia'].'<span>VNĐ</span> </span></td>
							</tr>
		</tfoot>
		</table>
		</div>
		<h2 style="color:#0f0f0f;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">2. PHƯƠNG THỨC THANH TOÁN</h2>
		<p style="font-size:14px;text-align:left">Thanh toán sau khi nhận hàng (COD)</p>

		<div style="display:none;font-size:0;max-height:0;line-height:0;padding:0"></div>
		<br><h2 style="color:#0f0f0f;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">3. ĐỊA CHỈ GIAO HÀNG</h2>
						<p style="font-size:14px;text-align:left;line-height:30px"><span style="text-transform:capitalize">'.$_GET['hoten'].' ('.$_GET['diachi'].')</span>
										<br>Điện thoại: <a href="tel:0935161193" style="color:#0f0f0f;font-weight:normal;text-decoration:underline" target="_blank">'.$_GET['sodt'].'</a>													- Email: <a href="mailto:nguyenduybkdn@gmail.com" target="_blank">nguyenduybkdn@gmail.com</a>								</p>
		<div style="border-top:dashed 1px #b8b8b8;margin-top:20px">
		<div style="font-size:13px;font-style:italic;padding-top:10px;text-align:center">Xin lưu ý: Đây là email tự động, vui lòng không trả lời lại email này.</div>

		</div>
		</td>
		</tr>
		</tbody></table>';

		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Message has been sent';
		}
	}else{
		//xoa
		$sql="delete from chitietdonhang,donhang using chitietdonhang,donhang  where  chitietdonhang.donhang_id=donhang.id and donhang_id='$id'";
		mysqli_query($mysqli, $sql);
		header('location:../home.php?quanly=Quanlydonhang&acount=them');
	}

?>
