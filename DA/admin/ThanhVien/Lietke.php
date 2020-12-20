<?php
	$sql="select * from dangky order by id_khachhang desc ";
	$run=mysqli_query($mysqli, $sql);

?>
<center><h1 style="font-size: 25px;color: red;margin-top: 10px;">QUẢN LÝ THÀNH VIÊN</h1></center>
<table  width="100%" border="1"  style="background:#76f529; border: #fff;height:30px;font-weight: bold;" >
<div class="button_themadmin">
<a href="home.php?quanly=ThanhVien&acount=themadmin">Thêm admin</a> 
</div>

  <tr style="height:30px;font-weight: bold;background: #7c16bc">
    <td>STT</td>
    <td>Tên thành viên</td>
    <td>Mật khẩu</td>
    <td>Enail</td>
    <td>Họ tên</td>
    <td>Ngày sinh</td>
    <td>Giới tính</td>
    <td>Số điện thoại</td>
    <td>Địa chỉ</td>
    <td>Đối tượng</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
 
  ?>
  <tr>
  <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenkhachhang']; ?></td>
    <td><?php echo $dong['matkhau']; ?></td>
    <td><?php echo $dong['email']; ?></td>
     <td><?php echo $dong['hoten']; ?></td>
     <td><?php echo $dong['ngaysinh']; ?></td>
     <td><?php echo $dong['gioitinh']; ?></td>
     <td><?php echo '0'.$dong['sodt']; ?></td>
     <td><?php echo $dong['diachi']; ?></td>
      <td align="center"><?php if($dong['role']==0){
      echo "Thành viên";
      }else{
        echo ' <p style="color:red">Quản trị viên</p> ';
        } ?></td>
     <td><a href="ThanhVien/Xuly.php?id=<?php echo $dong['id_khachhang'] ?>"><img src="Quanlychitietsp/Hinhbaiviet/deletered.png" width="30px" height="30px"></a></td> 
  </tr>
  <?php
  $i++;
   }
  ?>
</table>



