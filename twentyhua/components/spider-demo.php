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
	<title>spider demo</title>
	<meta content="博客, 刘东华" name="keywords">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--<link href="<?php echo get_template_directory_uri(); ?>/css/non-responsive.css" rel="stylesheet" /> non-responsive -->
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/images/avatar_64.jpg'; ?>" /> 

	<link rel='stylesheet' id='twentythirteen-style-css'  href='/wp-content/themes/twentyhua/css/bootstrap.min.css?ver=20160301' type='text/css' media='all' />
	<script type='text/javascript' src='/wp-includes/js/jquery/jquery.js?ver=1.11.2'></script>
	<script type='text/javascript' src='/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<style>
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
</style>

<body>
	<div class="row text-center">
		<h1 id="test1-h1" class="content-title">test1</h1>
	</div>
</body>

<script>
jQuery(document).ready(function(){
	jQuery("#test1-h1").text("hello");
});

</script>

</html>


