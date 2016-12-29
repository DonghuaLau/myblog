<?php 

function hua_page_home10(){
	get_template_part("templates/page", "home10");
}

function hua_page_home11(){
	get_template_part("templates/page", "morn");
}
function hua_page_bookshelf()
{
	global $g_hua;
	$g_hua['title'] = '书柜里的书要从昨天开始读';
	get_template_part( 'components/bookshelf/page', 'bookshelf' );
}
function hua_page_calendar()
{
	include('components/calendar/index.php');
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

function hua_page_koubei_demo()
{
	get_template_part("components/koubei", "demo");
}

function hua_page_weixin_js()
{
	get_template_part("components/weixin", "js");
}

function hua_page_demo_iframe()
{
	get_template_part("components/demo", "iframe");
}

function hua_page_demo_spider()
{
	get_template_part("components/spider", "demo");
}
function hua_page_becktu()
{
	//get_template_part("components/becktu", "index");
	$_SERVER['page'] = 'home';
	include('components/becktu/index.php');
}

function hua_page_becktu_detail()
{
	//get_template_part("components/becktu", "index");
	$_SERVER['page'] = 'detail';
	include('components/becktu/index.php');
}

function hua_page_becktu_take_note()
{
	//get_template_part("components/becktu", "index");
	$_SERVER['page'] = 'take_note';
	include('components/becktu/index.php');
}

function hua_page_dashang_image()
{
	get_template_part("components/ds", "demo1");
}

function hua_page_dashang_button()
{
	get_template_part("components/ds", "demo2");
}

function dashangcloud_notify()
{
	dslog('DEBUG', 'dashangcloud notify: ' . var_dump_string($_POST));
	if($_POST['key'] == '123456789'){
		echo 'true';
	}else{
		echo 'false';
	}
}

?>
