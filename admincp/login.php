<?php 
	include('modules/config.php');
	session_start();
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql="select * from admin where username='$username' and password='$password' limit 1";
		$query=mysqli_query($conn,$sql);
		//lay dong dang nhap
		$num=mysqli_num_rows($query);
		if($num>0){
			// neu dang nhap dung
			$_SESSION['dangnhap']=$username;
			header('location:index.php');
			
		}else{
			// neu dang nhap Khong dung
			header('location:login.php');
		}
	}
?>
<form action="" method="post">
<center>
<table width="200" border="1">
	<tr>
		<td colspan="2"><div align="center">Login</div></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username" size="20" placeholder="admin"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" size="20" placeholder="admin"></td>
	</tr>
	<tr>
		<td colspan="2">
			
			<div align="center">
				<input type="submit" name="login" id="button" value="Login">
			</div>

		</td>

	</tr>

</table>
</center>
</form> 