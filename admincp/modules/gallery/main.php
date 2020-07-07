<div class="left">
	<?php 
		if(isset($_GET['ac'])){
			$tam = $_GET['ac'];
		}else{
			$tam='';
		}if($tam=='them'){
			include("modules/gallery/them.php");
		}if($tam=='sua'){
			include("modules/gallery/sua.php");
		}if($tam=='gallery'){
			include("modules/gallery/gallery.php");
		}
	?>
</div>
<div class="right">
	<?php 
		include("modules/gallery/lietke.php");
	?>
</div>