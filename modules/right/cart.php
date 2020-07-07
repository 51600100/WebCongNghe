<?php 
	session_start();
?>
<h1>Giỏ hàng</h1>
<h3 style="float:right">
<?php
	if(isset($_SESSION['dangnhap'])){
		echo 'Xin chào :'.$_SESSION['dangnhap'];
	}
	
	
	
?></h3>
<div>
<?php 
	echo '  <table width="100%" border="1" style="border-collapse:collapse; margin:auto; text-align:center;">';
			
			echo'  <tr>';
			//echo '<td>MÃ SP</td>';
			echo'<td width="20">Tên SP</td>';
			echo'<td width="20">Hình ảnh</td>';
			echo'<td width="20">Giá sp</td>';
			echo'<td width="20">SL</td>';
			//echo'<td>Tổng tiền</td>';
			echo'<td width="20">Quản lý</td>';
			echo'</tr>';
		echo '</table>';
?>
</div>
<?php 
	//session_destroy();
	// them san pham
	if(isset($_GET['add'])&& !empty($_GET['add']) ){
		$id=$_GET['add'];
		@$_SESSION['cart_'.$id]+=1;
		header('location:index.php?xem=giohang');
	}
	// cong san pham
	if(isset($_GET['them']) ){
		
		$_SESSION['cart_'.$_GET['them']]+=1;
		header('location:index.php?xem=giohang');
	}
	// tru san pham
	if(isset($_GET['tru']) ){
		
		$_SESSION['cart_'.$_GET['tru']]--;
		header('location:index.php?xem=giohang');
	}
	// xoa san pham
	if(isset($_GET['xoa']) ){
		
		$_SESSION['cart_'.$_GET['xoa']]=0;
		header('location:index.php?xem=giohang');
	}
	
	//hien thi san pham da them
	$thanhtien=0;
	foreach($_SESSION as $name => $value){
		if($value>0){
			if(substr($name,0,5)=='cart_' ){
				$id=substr($name,5,strlen($name)-5);
				$sql="select * from chitietsp where id_sp='".$id."'";
				$query=mysqli_query($conn,$sql);
				
				while($dong=mysqli_fetch_array($query)){
					
					
					$tongtien=$dong['gia']*$value;
					echo '  <table width="100%" border="1" style="border-collapse:collapse; margin:auto; text-align:center;">';

					echo'<tr>';
					
					echo'<td width="20">'.$dong['tensp'].'</td>';
					echo'<td width="20"><img src="admincp/modules/quanlychitietsp/uploads/'.$dong['hinhanh'].'" width="50" height="50" /></td>';
					echo'<td width="20">'.$dong['gia'].'</td>';
					echo'<td width="20">'.$value.'</td>';
					echo'<td width="20"><a href="index.php?xem=giohang&them='.$id.'">[+]</a><a href="index.php?xem=giohang&tru='.$id.'">[-]</a><a href="index.php?xem=giohang&xoa='.$id.'">[delete]</a></td>';
					echo '</tr><br>';
					echo '</table>';
					//echo $dong['tensp'].'X'.$value.'@'.$dong['gia'].'='.$tongtien.'VND'.'<a href="index.php?xem=giohang&them='.$id.'">[+]</a><a href="index.php?xem=giohang&tru='.$id.'">[-]</a><a href="index.php?xem=giohang&xoa='.$id.'">[delete]</a><br/><br/><br/>';
				}
			}
			$thanhtien+=$tongtien;
		}
		
	}
	if($thanhtien==0){
		echo 'Giỏ hàng trống';
	}else{
		
		echo 'Tổng tiền = '.$thanhtien.'VND';
	}
?>
<?php
	if(isset($_SESSION['dangnhap'])){
		echo '<p style="float:right"><a href="index.php?xem=camon">Thanh toán</a></p>';
		
	}else{
		echo '<p style="float:right"><a href="index.php?xem=thanhtoan">Thanh toán</a></p>';
	}
	
?>
<!--
<p style="float:right"><a href="index.php?xem=thanhtoan">Thanh toán</a></p>
-->