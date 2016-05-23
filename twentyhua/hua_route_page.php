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
function hua_page_html5_fireworks()
{
	include('components/html5-fireworks/index.php');
}

function hua_page_html5_mplayer()
{
	include('components/html5-mplayer/index.php');
}

function hua_page_flowchart()
{
	include('components/flowchart/index.php');
}

?>
