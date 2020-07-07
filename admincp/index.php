<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Quản trị nội dung website</title>
	<link rel="stylesheet" type="text/css" href="style/css.css" />
</head>
<body>
<?php 
	// neu chua dang nhap
	session_start();
	if(!isset($_SESSION['dangnhap'])){
		header('location:login.php');
	}
?>
<div class="wrapper">
	<?php 
		include('modules/config.php');
		include('modules/header.php');
		include('modules/menu.php');
		include('modules/content.php');
		include('modules/footer.php');
	?>
	
	
	
	
</div>
</body>

</html>