<!DOCTYPE html>
<html>

<body>
<div class="tieude">
	<h3>HOAN NGHÊNH QUÝ BẠN ĐẶT HÀNG TẠI WEB BÁN HÀNG CÔNG NGHỆ</h3>
</div>
<div class="thongbao">
	
	<p>- Vui lòng không đặt số lượng 1 sản phẩm</p>
    <p>- Không đặt đơn hàng có tổng giá trị dưới 200.000đ</p>
    <p>- Đơn hàng nhiều sản phẩm. Vui lòng liệt kê danh sách + số lượng qua Email, Zalo</p>
</div>
<h1>Comment</h1>

<form action="modules/right/post_comment.php" method="POST">
	<input type="text" name="name" value="" placeholder="Your name"><br/>
	<textarea name="comment" cols="50" rows="2" placeholder="Enter a comment"></textarea><br/>
	<input type="submit" value="Comment"> 
</form>
<?php
	/*
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webbanhangcongnghe';
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');
	
	mysqli_select_db($conn,$csdl);
	*/
	$sql = "SELECT * FROM comments";
	$find_comments = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($find_comments))
	{
		$comment_name = $row['name'];
		$comment = $row['comment'];
		
		echo "$comment_name - $comment<p>";
	}
	
	if(isset($_GET['error'])){
		echo "<p>100 Character Limit</p>";
	}
?>
</body>
</html>