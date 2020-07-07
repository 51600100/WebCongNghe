<?php 
//$conn=mysqli_connect("127.0.0.1","root","");
//mysqli_select_db($conn,"comments");
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webbanhangcongnghe';
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');
	
	mysqli_select_db($conn,$csdl);

$name = $_POST["name"];
$comment = $_POST["comment"];

$comment_length = strlen($comment);

if($comment_length > 100)
{
	header("location: index.php?error=1");
}else{
	$sql = "INSERT INTO comments(id,name,comment) VALUES('','$name','$comment')";
	mysqli_query($conn,$sql);
	header("location:../../index.php?xem=huongdan");
}
?>