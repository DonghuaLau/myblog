<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>HTML5烟花 | 刘东华的博客</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/avatar_64.jpg" /> 
	<script src="<?php echo get_template_directory_uri(); ?>/components/html5-fireworks/js/prefixfree.min.js"></script>


<style>
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}

html, body {
	margin: 0;	
	padding: 0;
}

body {
	background: #171717;
	color: #999;
	font: 100%/18px helvetica, arial, sans-serif;
}

a {
	color: #2fa1d6;
	font-weight: bold;
	text-decoration: none;
}

a:hover {
	color: #fff;	
}

#canvas-container {
	background: #000 url(<?php echo get_template_directory_uri(); ?>/components/html5-fireworks/images/bg.jpg);
	height: 100%;
	width: 100%;
	position: absolute;
	z-index: 2;
	//height: 400px;
	//width: 600px;
	//left: 50%;
	//margin: -200px 0 0 -300px;
	//top: 50%;
}

canvas {
	cursor: crosshair;
	display: block;
	position: relative;
	z-index: 3;
}

canvas:active {
	cursor: crosshair;
}

#skyline {
	background: url(<?php echo get_template_directory_uri(); ?>/components/html5-fireworks/images/skyline.png) repeat-x 50% 0;
	bottom: 0;
	height: 135px;
	left: 0;
	position: absolute;
	width: 100%;
	z-index: 1;	
}

#mountains1 {
	background: url(<?php echo get_template_directory_uri(); ?>/components/html5-fireworks/images/mountains1.png) repeat-x 40% 0;
	bottom: 0;
	height: 200px;
	left: 0;
	position: absolute;
	width: 100%;
	z-index: 1;	
}

#mountains2 {
	background: url(<?php echo get_template_directory_uri(); ?>/components/html5-fireworks/images/mountains2.png) repeat-x 30% 0;
	bottom: 0;
	height: 250px;
	left: 0;
	position: absolute;
	width: 100%;
	z-index: 1;	
}

#gui {
	right: 0;
	position: fixed;
	top: 0;
	z-index: 3;
}
</style>

</head>

<body>

<div id="gui"></div>		
<div id="canvas-container">
  <div id="mountains2"></div>
  <div id="mountains1"></div>
  <div id="skyline"></div>
</div>

  <script type='text/javascript' src='/wp-includes/js/jquery/jquery.js?ver=1.11.2'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/components/html5-fireworks/js/dat.gui.min.js'></script>
  <script src="<?php echo get_template_directory_uri(); ?>/components/html5-fireworks/js/index-wp.js?v=001"></script>

</body>

</html>
