<?php
/**
 *	Copy design from koubei
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html class="ie ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if (gt IE 9) & !(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Demo</title>
	<meta content="博客, 刘东华" name="keywords">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--<link href="<?php echo get_template_directory_uri(); ?>/css/non-responsive.css" rel="stylesheet" /> non-responsive -->
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/images/avatar_64.jpg'; ?>" /> 

	<link rel='stylesheet' id='twentythirteen-style-css'  href='/wp-content/themes/twentyhua/css/bootstrap.min.css?ver=20160301' type='text/css' media='all' />
	<script type='text/javascript' src='/wp-includes/js/jquery/jquery.js?ver=1.11.2'></script>
	<script type='text/javascript' src='/wp-content/themes/twentyhua/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>

<style>
#main-body {
    background-color:#E9EAEC;
    font-family: "Microsoft YaHei","微软雅黑","黑体","宋体",Helvetica,Arial,Tahoma;
	min-width: 1200px;
	
}
.ho-top-nav{
	height:20px;
	background: #1e1b29;
}
#main-body .navbar{
    background-color: #fff;
	min-width:1300px;
}
#main-body .navbar-header{
    margin-left:5%;
	height:60px;
}
#main-body .navbar-brand{
	height:60px;
	font-size: 2em;
}
.ho-container{
	width:100%;
}
.ho-tbl-container{
    width: 1102px;
    min-height: 800px;
    margin: 30px auto 0;
    border: 1px solid #E7E8EB;
    background-color: #fff;
}
.ho-slider-bar{
	width:200px;
	min-height:800px;
	float:left;
	border-style: solid;
	border-color: #EEE;
    border-width: 0px 1px 0px 0px;
}
.ho-context{
	width:900px;
	min-height:700px;
	float:left;
}
.ho-context h2{
	padding: 10px 0 20px 30px;
	font-size:18px;
    line-height: 18px;
    border-bottom: 1px solid #e7e7eb;
    font-weight: 400;
}

.site-footer {
    text-align: center;
    font-size: 0.8em;
    color: #8d8d8d;
	height:60px;
	background: #1e1b29;
}
.site-info{
	height:100%;
}
.margin-top20{
	margin-top:20px;
}
.margin-top40{
	margin-top:40px;
}
.margin-top60{
	margin-top:60px;
}
.padding-top30{
	padding-top:30px;
}

.ho-slider-menu dl {
    padding: 5px 0;
    border-bottom: 1px solid #e7e7eb;
    font-size: 14px;
	margin-bottom: 10px;
}
.selected{
	background-color: #0ae;
}
.ho-slider-menu dl .selected a{
	color:#fff;
}
.ho-slider-menu dl .selected:hover{
	background-color: #0ae;
}
.ho-slider-menu dl dd, .ho-slider-menu dl dt{
	line-height: 30px;
}
.ho-slider-menu dl dd a{
	padding-left: 60px;
    color: #1a1a1a;
	text-decoration: none;
	cursor: pointer;
}
.ho-slider-menu dl dd:hover{
	background-color: #EEE;
}
.ho-slider-menu dl dt a {
	padding-left: 30px;
    color: #1a1a1a;
    display: block;
    width: auto;
    overflow: hidden;
    text-overflow: ellipsis;
	text-decoration: none;
    white-space: nowrap;
    word-wrap: normal;
	cursor: auto;
}
.ho-slider-menu dl dt a span, .ho-slider-menu dl dt em span{
	padding-right:10px;
    color: grey;
}
.ho-slider-menu dl dt em {
	padding-left: 30px;
    color: grey;
    display: block;
    width: auto;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    word-wrap: normal;
}
.iconfont-crmhome {
    //font-family: 'crmhome';
    font-weight: 400;
    font-style: normal;
    cursor: default;
    -webkit-font-smoothing: antialiased;
    //-webkit-text-stroke-width: .2px;
}
.ho-recommend img{
	margin-left:25px;
	margin-left:25px;
	width:850px;
	height:80px;
}
</style>

</head> 

<body id="main-body">

<div class="ho-top-nav">
</div>

<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Brand</a>
    </div>
</nav>
<!-- End Navbar -->

<!-- main container -->
<div class="ho-container">
<div class="ho-tbl-container">

	<div class="ho-slider-bar">
	  <div class="margin-top20"></div>
	  <div class="ho-slider-menu">

		<dl>
		  <dt class="selected">
			<a href="#" class="iconfont-crmhome"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首页</a>
		  </dt>
		</dl>

		<dl>
		  <dt>
			<em href="#" class="iconfont-crmhome"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>历史记录</em>
		  </dt>
		  <dd>
			<a href="#">付款历史</a>
		  </dd>
		  <dd>
			<a href="#">收账记录</a>
		  </dd>
		</dl>

		<dl>
		  <dt>
			<em href="#" class="iconfont-crmhome"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>配置中心</em>
		  </dt>
		  <dd>
			<a href="#">基本信息</a>
		  </dd>
		  <dd>
			<a href="#">会员管理</a>
		  </dd>
		  <dd>
			<a href="#">修改密码</a>
		  </dd>
		</dl>

	  </div>
	</div><!-- /.ho-slider-bar -->

	<div class="ho-context">
		<h2>首页</h2>

		<div class="margin-top20"></div>
		<div class="ho-recommend">
			<img src="https://i.alipayobjects.com/i/ecmng/jpg/201512/6JQLEn7ok9.jpg">
		</div>

		
		<div class="margin-top40"></div>
		<br/>
		<div class="margin-top40"></div>

		<div style="width:100%;text-align:center;">
		<script type="text/javascript">
		document.write(unescape("%3Cspan class='dsc-zone' id='dsc-zone-878690'%3E%3C/span%3E%3Cscript src='http://www.dashangcloud.com/open/dsc-1.1.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		n = 1;
		if(n == 0){
			dsc.config({
				type:"image",
				//show:"http://liudonghua.net/wp-content/themes/twentyhua/images/avatar_64.jpg", //"打赏",
				show:"http://www.dashangcloud.com/static/ds-logo-1.2-64.png", 
				width:64,
				height:64,
				radius:50,
				//amount:[1.8, 2.8, 5.8, 9.8, 99.8, 188],
				amount:[1, 2, 8, 9.8, 99.8, 188],
				userid:100001,
				contentid:200001,
				author:"Donghua.Lau",
				author_link:"http://liudonghua.net",
				link:"http://host/link.html",
				key:"123456789" 
			});
		}else if(n == 1){
			dsc.config({
				type:"button",
				show:"求赏",
				//show:"女神",
				//width:70,
				//height:32,
				amount:[1.8, 2.8, 5.8, 9.8, 99.8, 188],
				//amount:[1.8, 2.8, 5.8],
				//amount:[188],
				userid:100001,
				contentid:200001,
				author:"李某",
				author_link:"http://liudonghua.net",
				link:"http://host/link.html",
				key:"123456789" 
			});
		}
		</script>
		</div>

	</div><!-- /.ho-context -->

</div>
</div><!-- /.ho-container -->

<div class="margin-top60"></div>

<!-- Footer -->
<footer class="site-footer" role="contentinfo">
	<div class="site-info">
		<div class="padding-top30"></div>
		<span>&copy; 2016 <a href="http://liudonghua.net">liudonghua.net</a><span>
	</div><!-- .site-info -->
	<div class="padding-top20"></div>
</footer><!-- #colophon -->
<!-- End Footer -->

<script>
</script>

</body>

</html>
