<?php 

function hua_page_home10(){
	get_template_part("templates/page", "home10");
}

function hua_page_home11(){
	get_template_part("templates/page", "morn");
}
function hua_page_calendar()
{
	//get_header();
	include('components/calendar/index.php');
	//get_footer();
}

?>
