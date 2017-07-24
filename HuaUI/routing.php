<?php

global $g_huaui_routing;
$g_huaui_routing = array(
             //array(need login?, '/router/uri', 'router_handler')
              array(0, '/home001', 'huaui_page_home001')
             ,array(0, '/home002', 'huaui_page_home002')
            //,array(0, '/open/comment/callback', 'open_comment_callback')
	);

function huaui_routing_load($route)
{
	dslog('DEBUG', "route: $route");
	global $g_huaui_routing;
    foreach($g_huaui_routing as $routing){
        if($routing[1] == $route){
        	$routing[2]();
        }
    }
}

function huaui_page_home001()
{
	get_template_part( 'fancyhome/page', 'home001' );
}

function huaui_page_home002()
{
	get_template_part( 'fancyhome/page', 'home002' );
}

