<?php 
	//Duy trì đăng nhập
	session_start();
	if(isset($_POST['dangnhap'])){
		$tentaikhoan=$_POST['tentaikhoan'];
		$matkhau=$_POST['matkhau'];
		$sql_dangnhap="select * from dangky where tenkhachhang='$tentaikhoan' and matkhau='$matkhau' limit 1";
		$run_dangnhap=mysqli_query($conn,$sql_dangnhap);
		// Neu nguoi dung dien dung thi count_dangnhap se tang
		$count_dangnhap=mysqli_num_rows($run_dangnhap);
		if($count_dangnhap == 0){
			echo '<script>alert("Sai tai khoan hay mat khau");</script>';
		}else{
			$_SESSION['dangnhap'] = $tentaikhoan;
			header('location:index.php?xem=giohang');
		}
	}
?>
<form action="" method="post" enctype="multipart/form-data">
<table width="343" border="1">
	<tr>
		<td colspan="2"><div align="center">Đăng nhập thành viên</div></td>
	</tr>
	<tr>
		<td>Tên tài khoản</td>
		<td><input type="text" name="tentaikhoan" size="30"></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="password" name="matkhau" size="30"></td>
	</tr>
	<tr>
		<td colspan="2">
		<div align="center">
			<input type="submit" name="dangnhap" value="Đăng nhập">
		</div>
		</td>
	</tr>

</table>
</form>