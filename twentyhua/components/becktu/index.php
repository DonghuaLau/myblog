<?php
include("header.php");
include("navbar.php");
include("topper.php");
?>


<div class="container" style="margin-top:20px;">
  <div class="row">

	<div class="col-md-2">
	<?php include("slider-left.php"); ?>
	</div>
	
	<div class="col-md-8">
	<?php 
	
	if($_SERVER['page'] == 'home'){
		include("home.php"); 
	}else if($_SERVER['page'] == 'detail'){
		include("detail.php"); 
	}else if($_SERVER['page'] == 'take_note'){
		include("take_note.php"); 
	}else{
	}

	?>
	</div>
	
	<div class="col-md-2">
	<?php include("slider-right.php"); ?>
	</div>

  </div>
</div>

<?php include("footer.php"); ?>

