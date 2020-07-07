<!--
<p style="text-align:center; color: red;background:#0CF;padding:10px;">Chi tiết sản phẩm</p>
			<div class="sanphamall">
				<ul>
					<li><a href="index.php?xem=chitietsanpham&id=1"><img src="image/iphone1.jpg" width="100" height="100" />
						<p>Tên sp: iPhone 8 Plus 64GB</p>
						<p style = "color:#F00;">Giá sp: 15.990.000 đ</p>
						<p style = "color:#F00;text-align: center;">Chi tiết</p>
					</a></li>
				</ul>
</div>
-->
<?php 
	$sql_chitietsp="select * from chitietsp where id_sp=$_GET[id]";
	$query_chitietsp=mysqli_query($conn, $sql_chitietsp);
	$dong_chitietsp=mysqli_fetch_array($query_chitietsp);
?>
<table width="400" border="1" style="border-collapse: collapse">
	<tr>
		<td colspan="2"><div align="center">Chi tiết sản phẩm</div></td>

	</tr>

	<tr>
		<td rowspan="2"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh'] ?>" width="200" height="200"></td>
		<td>Tên SP:<?php echo $dong_chitietsp['tensp'] ?></td>
	</tr>
	<tr>

		<td style="color:#F00">Giá sp: <?php echo $dong_chitietsp['gia'].' VNĐ' ?></td>
	</tr>
	<tr>
		<td colspan="2"><div align="center">Thông số kỹ thuật</div></td>

	</tr>
	<tr>
		<td colspan="2"><?php echo $dong_chitietsp['mota'] ?></td>

	</tr>
	<a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp'] ?>">
	<img src="image/order.jpg" height="150" width="150" style="float:right;"/>
	</a>
</table>
<?php 
	$sql_gallery="select * from gallery where id_sp='$_GET[id]'";
	$query_gallery=mysqli_query($conn, $sql_gallery);
?>
<p style="text-align:center; color: red;background:#0CF;padding:10px;">Hình ảnh sản phẩm</p>
			<div class="sanphamall">
				<ul>
				<?php 
					while($dong_gallery=mysqli_fetch_array($query_gallery)){
				?>
					<li><img src="admincp/modules/gallery/uploads/<?php echo $dong_gallery['hinhanhsp'] ?>" width="100" height="100"/></li>
					
				<?php 
					}
				?>
				</ul>
			</div>
<p style="clear:both;"></p>
<?php 
	$sql_spcungloai="select * from chitietsp where id_loaisp='$_GET[idloaisp]' and chitietsp.id_sp<>$_GET[id]";
	$query_spcungloai=mysqli_query($conn, $sql_spcungloai);
?>
<p style="text-align:center; color: red;background:#0CF;padding:10px;">Sản phẩm cùng loại</p>
			<div class="sanphamall">
				<ul>
				<?php 
					while($dong_spcungloai=mysqli_fetch_array($query_spcungloai)){
				?>
					<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_spcungloai['id_sp'] ?>"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_spcungloai['hinhanh'] ?>" width="100" height="100" />
						<p><?php echo $dong_spcungloai['tensp'] ?></p>
						<p style = "color:#F00;">Giá sp: <?php echo $dong_spcungloai['gia'] ?> đ</p>
						<p style = "color:#F00;text-align: center;">Chi tiết</p>
					
					</a></li>
					
				<?php 
					}
				?>
				</ul>
			</div>

<p style="clear:both;"></p>
<!--
<h1>Comment</h1>

<form action="post_comment.php" method="POST">
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
<p style="clear:both;"></p>
-->