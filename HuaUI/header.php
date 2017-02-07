<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Hua
 * @since Twenty Hua 1.0
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
	<meta name="viewport" content="width=device-width">
	<title><?php /*wp_title( '|', true, 'right' );*/ huaui_site_title(); ?></title>
	<meta content="博客, 刘东华" name="keywords">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/images/avatar-160-1.1.jpg'; ?>" /> 
	<?php wp_head(); ?>


	<!-- not working in wp_enqueue_scripts, don't know why? -->
	<link rel='stylesheet' href='/wp-content/themes/HuaUI/semantic-ui/semantic.min.css?ver=001' type='text/css' />
	<script type='text/javascript' src='/wp-content/themes/HuaUI/semantic-ui/semantic.min.js?ver=001'></script>

<!-- move to style.css later -->
<style>

#body, .ui.menu, h1, h2, h3, h4, h5 {
    height:100%;
    font-family: "Microsoft YaHei","微软雅黑";
}


</style>

</head>

<body id="body" <?php body_class(); ?>>
	<div id="page">
		<?php include("sidebar.php"); ?>

		<div class="site-main">

