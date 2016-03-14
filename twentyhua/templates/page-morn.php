<?php 
/*
 *	Home page
 *	
 *	Tips: comment main stylesheet in functions.php 'twentythirteen_scripts_styles'
 */
get_header(); 
?>

<div class="container">

<div class="margin-top40"></div>
<div class="row">
<div class="home-screen">
	<img alt="climbing alone" src="<?php echo get_template_directory_uri().'/images/climbing_alone2.jpg'; ?>">
</div>
</div><!-- row -->

<div class="row">

<div class="col-md-6">
	<!-- newest articles -->
	<div class="padding-top40"></div>
	<div class="panel panel-info">
	  <div class="panel-heading">
	    <h3 class="panel-title"><?php echo __("最新文章", "hua"); ?><a class="panel-title-right" href="#">更多>></a></h3>
	  </div>
	  <div class="panel-body">
	  <?php
	  	$recent_posts = wp_get_recent_posts();
	  	foreach( $recent_posts as $recent ){
	  		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	  	}
	  ?>
	  </div>
	</div>
</div><!-- col-md-6 -->

<div class="col-md-6">
	<!-- hotest articles -->
	<div class="padding-top40"></div>
	<div class="panel panel-info">
	  <div class="panel-heading">
	    <h3 class="panel-title"><?php echo __("热门文章", "hua"); ?><a class="panel-title-right" href="#">更多>></a></h3>
	  </div>
	  <div class="panel-body">
	  <?php echo get_popular_posts(10); ?>
	  </div>
	</div>
</div><!-- col-md-6 -->

</div><!-- row -->
<div class="margin-top80"></div>
</div><!-- container -->

<?php get_footer(); ?>
