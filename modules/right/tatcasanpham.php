<?php 
	if(isset($_GET['trang'])){
		$get_trang=$_GET['trang'];
	}else{
		$get_trang='';
	}
	if($get_trang=='' || $get_trang==1){
		$trang1 = 0;
		
	}else{
		$trang1 = ($get_trang*5)-5;
	}
	$sql_all="select * from chitietsp limit $trang1,5"; // chon tu tham so $trang1, lay ra 5 san pham
	$query_all=mysqli_query($conn,$sql_all);
?>
			<p style="text-align:center; color: red;background:#0CF;padding:10px;"> Tất cả sản phẩm</p>
			<div class="sanphamall">
				<ul>
				<?php 
					while($dong_all=mysqli_fetch_array($query_all)){
				?>
					<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_all['id_loaisp']; ?>&id=<?php echo $dong_all['id_sp'] ?>"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh'] ?>" width="100" height="100" />
						<p><?php echo $dong_all['tensp'] ?></p>
						<p style = "color:#F00;">Giá sp: <?php echo $dong_all['gia'] ?> đ</p>
						<p style = "color:#F00;text-align: center;">Chi tiết</p>
					
					</a></li>
					
				<?php 
					}
				?>
				</ul>
			</div>
			<p style="clear:both;"></p>
			Trang:
			<?php 
				$sql_trang="select * from chitietsp";
				$query_trang=mysqli_query($conn,$sql_trang);
				$count=mysqli_num_rows($query_trang);
				//moi trang hien 5 san pham
				$a=ceil($count/5);
				
				for($b=1;$b<=$a;$b++){
					echo '<a href="?trang='.$b.'" style="text-decoration:none;">'.' '.$b.' '.'</a>';
				}
			?>
			
			<?php
			/*
				echo '<br/>';
				if($get_trang >= 1){
					echo 'Trang hiện tại : '.$get_trang;
				}
				*/
			?>