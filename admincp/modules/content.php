<div class="content">
	<?php 
		if(isset($_GET['quanly'])){
			$tam=$_GET['quanly'];
		}else{
			$tam='';
		}if($tam=='quanlyloaisp'){
			include('modules/quanlyloaisp/main.php');
		}elseif($tam=='quanlychitietsp'){
			include('modules/quanlychitietsp/main.php');
		}elseif($tam=='gallery'){
			include('modules/gallery/main.php');
		}elseif($tam=='doimatkhau'){
			include('doimatkhau.php');
		}
	?>
</div>
<div class="clear"></div>