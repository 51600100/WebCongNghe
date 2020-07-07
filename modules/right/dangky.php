<?php
	if(isset($_POST['dangky'])){
		$tenkh=$_POST['tenkhachhang'];
		$pass=$_POST['matkhau'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$dienthoai=$_POST['dienthoai'];
		$sql_dangky="insert into dangky (tenkhachhang,matkhau,email,dienthoai,diachinhan) value('$tenkh','$pass','$email','$dienthoai','$diachi')";
		if(!$tenkh || !$pass || !$email || !$diachi || !$dienthoai){
			echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}
		$run_query=mysqli_query($conn,$sql_dangky);
		    
	if($run_query){
		//echo '<h3 style="margin-left:5px;">Bạn đã đăng ký thành công</h3>';
		//echo '<a href="?quanly=dangnhap" style="margin:20px;text-decoration:none;">Quay lại để đăng nhập mua hàng</a>';
		header('location:index.php?xem=thongbao');
	}else{
		header('location:index.php?xem=dangky');
	}
	}
?>
<!--
<h1>Đăng ký</h1>
-->
<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
<table width="500" border="1">
	<tr>
		<td colspan="2"><div align="center">Đăng ký thành viên</div></td>
	</tr>
	<tr>
		<td>Tên khách hàng</td>
		<td><input type="text" name="tenkhachhang" size="30"></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="password" name="matkhau" size="30"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" size="30"></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" name="diachi" size="30"></td>
	</tr>
	<tr>
		<td>Điện thoại</td>
		<td><input type="text" name="dienthoai" size="30"></td>
	</tr>
	<tr>
		<td colspan="2">
		<div align="center">
			<input type="submit" name="dangky" value="Đăng ký" />
		</div>
		</td>
	</tr>
</table>
</form>
<!--
<div class="tieude">
	HOAN NGHÊNH QUÝ BẠN ĐẶT HÀNG TẠI Web công nghệ
</div>
<div class="thongbao">
	<!--<p><img src="imgs/chu-y-mua-hang.gif" width="100" height="50"></p>
	<p>- Vui lòng không đặt số lượng 1 sản phẩm</p>
    <p>- Không đặt đơn hàng có tổng giá trị dưới 200.000đ</p>
    <p>- Đơn hàng nhiều sản phẩm. Vui lòng liệt kê danh sách + số lượng qua Email, Zalo</p>
</div>
<div class="dangky">
  <p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác (Số nhà, Ngõ, thôn xóm/ấp, Phường/xã, huyện/quận, tỉnh, TP)</p>
  <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Họ tên người mua <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="hoten" size="50"></td>
  </tr>
  <tr>
    <td>Địa chỉ Email <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="email" size="50"></td>
  </tr>
  <tr>
    <td>Mật khẩu  <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="password" name="pass" size="50"></td>
  </tr>
  <tr>
    <td>Điện thoại <strong style="color:red;"> (*)</strong></td>
     <td width="60%"><input type="text" name="dienthoai" size="50"></td>
  </tr>
  <tr>
    <td>Địa chỉ nhận hàng <strong style="color:red;"> (*)</strong></td>
   <td width="60%"><input type="text" name="diachi" size="50"></td>
  </tr>
  <tr>
    <td colspan="2">
    	 	
           <p><input type="submit" name="gui" value="Gửi thông tin" /></p>
         
    </td>
    </tr>
</table>
</form>
<div class="ghichu">
	<p>Ghi chú nếu có :</p>
	<textarea name="ghichu">
    
    </textarea>
-->