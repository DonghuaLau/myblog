<?php
//$idx = "10";
$idx = "index";
//$idx = "screenslider";

if($idx == "index"){
	///include("index_orig.php");
	get_template_part('templates/page', "morn");
}else if($idx == "screenslider"){
	include("templates/page-screenslider.php");
}else if($idx == "10"){
	include("frontpages/10_index_carousel.php");
}else{
	include("index_orig.php");
}
