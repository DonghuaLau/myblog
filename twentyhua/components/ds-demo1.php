<!DOCTYPE html>
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
	<title>打赏演示 - 图片按钮</title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--<link href="<?php echo get_template_directory_uri(); ?>/css/non-responsive.css" rel="stylesheet" /> non-responsive -->
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="http://www.dashangcloud.com/static/ds-logo-1.2-64.png" /> 

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
			<em href="#" class="iconfont-crmhome"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>文章分类</em>
		  </dt>
		  <dd>
			<a href="#">文学艺术</a>
		  </dd>
		  <dd>
			<a href="#">散文随笔</a>
		  </dd>
		  <dd>
			<a href="#">技术分享</a>
		  </dd>
		  <dd>
			<a href="#">生物化学</a>
		  </dd>
		  <dd>
			<a href="#">实时观察</a>
		  </dd>
		</dl>

	  </div>
	</div><!-- /.ho-slider-bar -->

	<div class="ho-context">
		<h2>打赏，互联网赚钱模式的流行</h2>

		<div class="margin-top20"></div>
		<div class="ho-recommend" style="padding-left:20px;padding-right:20px;">
			<!--<img src="https://i.alipayobjects.com/i/ecmng/jpg/201512/6JQLEn7ok9.jpg">-->
		<p>打赏，这个被忽略的互联网赚钱的方式，慢慢开始流行。</p>
　　	<p>网文界出了件大事儿：“网文圈第一个亿盟主诞生了！狂热读者@人品贱格为让网络写手@梦入神机夺冠月票榜，豪掷100万元打赏。读者姓林，福建人，24岁，食品行业生意人，喜欢看网文。他称不是炫富，而是憋了一口气，“只是想爽一下而已”。“</p>
　　	<p>在梦入神机新书《星河大帝》的贴吧里有专门的介绍此次打赏的来龙去脉，以及对于这位读者打赏的金额做了更正，因为不是100万，而是“158万“..</p>
　　	<p>在贴吧的介绍帖子里，介绍了梦入神机和粉丝和烽火戏诸侯的粉丝在纵横中文网的月票榜上斗气的过程，以及这位网友的为什么要一掷千金为了看网络小说。</p>
　　	<p>顺便提一嘴，另外一个网文的大神，无罪刚开新书，就有了数千张月票..这可都是赤裸裸的人民币书友的贡献。</p>
		</div>

		
		<div class="margin-top40"></div>
		<br/>
		<div class="margin-top20"></div>

		<div style="width:100%;text-align:center;">
		<script type="text/javascript">
		document.write(unescape("%3Cspan class='dsc-zone' id='dsc-zone-878690'%3E%3C/span%3E%3Cscript src='http://www.dashangcloud.com/open/dsc-1.1.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		dsc.config({
			type:"image",
			show:"http://www.dashangcloud.com/static/ds-logo-1.2-64.png", 
			width:64,
			height:64,
			radius:0,
			amount:[1.8, 2.8, 5.8, 9.8, 99.8, 188],
			userid:100001,
			contentid:200001,
			author:"Michael",
			author_link:"http://baike.baidu.com/link?url=-MLrfF1WOGrc9EFj-jEThOuzyvAOjBvtFChTILPG8b_mJ1SGijwgK4CBpkfB2TiOINO3ucan-e_x9e9NdHQDdq",
			link:"http://host/link1.html",
			key:"123456789" 
		});
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
