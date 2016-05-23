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
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta content="博客, 刘东华" name="keywords">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/images/avatar_64.jpg'; ?>" /> 
	<?php wp_head(); ?>

<!-- move to style.css later -->
<style>
#hua-nav .navbar-right a{
	font-size:12px;
	padding-left: 0px;
}
#hua-nav .navbar-right a > span{
	font-size:12px;
	border-style: solid; 
	border-width: 1px;
	border-radius: 3px;
    color: #178fe6;
	padding: 5px 10px 5px 10px;
}
.site-main p{
	word-wrap: break-word;
}
@media (max-width: 769px){
	.site-main img{
		width:100%;
	}
	#gotop{ 
		display:block;  
		width:60px; 
		height:60px;
		position:fixed;  
		bottom:40px;  
		right:20px; 
		border-radius:50%;   
		text-decoration:none;  
		display:none;  
		background-color:#5bc0de;
		background:url(/wp-content/themes/twentyhua/images/supperman-80x80.png);
		background-size:100%;
		background-repeat: no-repeat;
		/* for IE */
  		filter:alpha(opacity=60);
  		/* CSS3 standard */
  		opacity:0.6;
	}
}
@media (min-width: 769px){
	.dropdown:hover .dropdown-menu {
		display: block;
	}
	#gotop{ 
		display:block;  
		width:80px; 
		height:80px;
		position:fixed;  
		bottom:40px;  
		right:20px; 
		border-radius:50%;   
		text-decoration:none;  
		display:none;  
		background-color:#5bc0de;
		background:url(/wp-content/themes/twentyhua/images/supperman-80x80.png);
	}
}



</style>

</head>

<body id="hua-body" <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
		<?php include("navbar.php"); ?>
		</header><!-- #masthead -->

		<div id="main" class="site-main">
