<?php 
	$sql="select * from chitietsp,loaisp where loaisp.id_loaisp=chitietsp.id_loaisp order by chitietsp.id_sp desc";
	$run=mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
	<tr>
		<td>ID</td>
		<td>Tên sp</td>
		<td>Hình ảnh</td>
		<td>Giá</td>
		<td>Loại sp</td>
		<td>Thứ tự</td>
		<td colspan="2">Quản lý</td>
		
	<tr>
	<?php 
		$i=0;
		while($dong=mysqli_fetch_array($run)){
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $dong['tensp']; ?></td>
		<td><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh']; ?>" width="60" height="60">
		<p><a href="index.php?quanly=gallery&ac=them&id=<?php echo $dong['id_sp'] ?>">Gallery</a></p>
		</td>
		
		<td><?php echo $dong['gia']; ?></td>
		<td><?php echo $dong['tenloaisp']; ?></td>
		<td><?php echo $dong['thutu']; ?></td>
		<td><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp'] ?>">Sửa</a></td>
		<td><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']; ?>">Xóa</td>
	<tr>
	<?php 
			$i++;
		}
	?>
</table>