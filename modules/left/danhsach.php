<?php 
	$sql_loaisp="select * from loaisp";
	$query=mysqli_query($conn,$sql_loaisp);
?>
			<p style="text-align:center; color: red;background:#0CF;padding:10px;"> Loại sản phẩm</p>
			<div class="danhsachsanpham">
				<ul>
				<?php 
					while($dong_sp=mysqli_fetch_array($query)){
				?>
					<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tenloaisp'] ?></a></li>
					
				<?php 
					}
				?>
				</ul>
			</div> <!-- Loai san pham -->
			
			<p style="text-align:center; color: red;background:#0CF;padding:10px;"> Hiệu sản phẩm</p>
			<div class="danhsachsanpham">
				<ul>
					<li><a href="#">Apple</a></li>
					<li><a href="#">DELL</a></li>
					<li><a href="#">SONY</a></li>
					<li><a href="#">SAMSUNG</a></li>
					
				</ul>
			</div> <!-- Hiệu san pham -->
