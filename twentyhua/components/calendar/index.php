<!DOCTYPE html>
<html><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta content="always" name="referrer">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>万年历 | 刘东华的博客</title>
<!--<script type='text/javascript' src='/wp-includes/js/jquery/jquery.js?ver=1.11.2'></script>-->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/components/calendar/js/main.js?v=20160315'></script>
<link href="<?php echo get_template_directory_uri(); ?>/components/calendar/style.css?v=20160301" rel="stylesheet" type="text/css" />

<style>
#back-home a{
	font-size:15px;
	text-decoration: none;
}
</style>
</head>

<body>
<!-- BEGIN #main -->
<div id="main">

<div id="back-home"><a href="/">返回博客</a></div>

<div id="mohe-rili" class="g-mohe"  data-mohe-type="rili">

<div class="mh-rili-wap mh-rili-only " data-mgd='{"b":"rili-body"}'>
	<div class="mh-tips">
		<div class="mh-loading">
			<i class="mh-ico-loading"></i>正在为您努力加载中...
		</div>
		<div class="mh-err-tips">亲，出了点问题~ 您可<a href="#reload" class="mh-js-reload">重试</a></div>
	</div>
	<div class="mh-rili-widget">
								
<div class="mh-doc-bd mh-calendar">
	<div class="mh-hint-bar gclearfix">
		<div class="mh-control-bar">
			<div class="mh-control-module mh-year-control mh-year-bar">
				<a href="#prev-year" action="prev" class="mh-prev" data-md='{"p":"prev-year"}'></a>
				<div class="mh-control">
					<i class="mh-trigger"></i>
					<div class="mh-field mh-year" val=""></div>
				</div>
				<a href="#next-year" action="next" class="mh-next" data-md='{"p":"next-year"}'></a>
				<ul class="mh-list year-list" style="display:none;" data-md='{"p":"select-year"}'></ul>
			</div>
			<div class="mh-control-module mh-month-control mh-mouth-bar">
				<a href="#prev-month" action="prev" class="mh-prev" data-md='{"p":"prev-month"}'></a>
				<div class="mh-control">
					<i class="mh-trigger"></i>
					<div class="mh-field mh-month" val=""></div>
				</div>
				<a href="#next-month" action="next" class="mh-next" data-md='{"p":"next-month"}'></a>
				<ul class="mh-list month-list" style="display:none;" data-md='{"p":"select-month"}'></ul>
			</div>
			<div class="mh-control-module mh-holiday-control mh-holiday-bar">
				<div class="mh-control">
					<i class="mh-trigger"></i>
					<div class="mh-field mh-holiday"></div>
				</div>
				<ul class="mh-list" style="display:none;" data-md='{"p":"select-holiday"}'></ul>
			</div>
			<div class="mh-btn-today" data-md='{"p":"btn-today"}'>返回今天</div>
		</div>
		<div class="mh-time-panel">
			<dl class="gclearfix">
				<dt class="mh-time-monitor-title">北京时间:</dt>
				<dd class="mh-time-monitor"></dd>
			</dl>
		</div>
	</div>
	<div class="mh-cal-main">
		<div class="mh-col-1 mh-dates">
			<ul class="mh-dates-hd gclearfix">
				<li class="mh-days-title">一</li>
				<li class="mh-days-title">二</li>
				<li class="mh-days-title">三</li>
				<li class="mh-days-title">四</li>
				<li class="mh-days-title">五</li>
				<li class="mh-days-title mh-weekend">六</li>
				<li class="mh-days-title mh-last mh-weekend">日</li>
			</ul>
			<ol class="mh-dates-bd"></ol>
		</div>
		<div class="mh-col-2 mh-almanac">
			<div class="mh-almanac-base mh-almanac-main"></div>
			<div class="mh-almanac-extra gclearfix" style="display:none;">
				<div class="mh-suited">
					<h3 class="mh-st-label">宜</h3>
					<ul class="mh-st-items gclearfix"></ul>
				</div>
				<div class="mh-tapu">
					<h3 class="mh-st-label">忌</h3>
					<ul class="mh-st-items gclearfix"></ul>
				</div>
			</div>
			
	
		</div>
	</div>
</div>


</div>
</div>

<div class="mh-rili-foot">
</div>

<select class="mh-holiday-data" style="display:none;">
</select>

<!--value获取当前PHP服务器时间-->
<?php
$date = getdate();
$today_query_str = 'year='.$date['year'].'&month='.$date['mon'].'&day='.$date['mday'];
?>
<span id="mh-date-y" style="display:none;"><?php echo $date['year']; ?></span>
<input type="hidden" id="mh-rili-params" value="action=query&<?php echo $today_query_str; ?>" />

</div><!-- mohe-rili -->

</div><!-- END #main -->

<script>
	holiday_list_2016();
	_loader.use("jquery",loader_jquery);
	_loader.remove && _loader.remove("rili-widget");
	_loader.add("rili-widget", "/wp-content/themes/twentyhua/components/calendar/js/wnl.js");//上述JS文件们已让我压缩成wnl.js
	_loader.use("jquery, rili-widget", loader_jquery_rili_widget);
</script>

</body>
</html>
