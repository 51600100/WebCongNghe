<?php 
	if(isset($_GET['ac'])&&$_GET['ac']=='logout' ){
		// sesion_destroy bỏ tất cả session
		// bỏ duy nhất 1 session được chỉ định
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="menu">
	<ul>
		<li><a href="index.php">Trang chủ</a></li>
		<li><a href="index.php?quanly=quanlyloaisp&ac=them">Quản lý loại sp</a></li>
		<li><a href="index.php?quanly=quanlychitietsp&ac=them">Quản lý chi tiết sp</a></li>
		<li><a href="index.php?quanly=doimatkhau">Đổi mật khẩu</a></li>
		<li><a href="index.php?ac=logout">Đăng xuất</a></li>
	</ul>
</div>