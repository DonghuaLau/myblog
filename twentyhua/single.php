<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); 
?>
	
<div class="container">
<div class="padding-top40"></div>
<div class="row">

<div class="col-md-9">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php twentythirteen_post_nav(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- col-md-9 -->

<div class="col-md-2">
	<div class="padding-top40"></div>
	<div class="panel">
	  <div class="panel-heading">
	    <h3 class="panel-title"><?php echo __("文章分类", "hua"); ?></h3>
	  </div>
	  <div class="panel-body">
		<?php
			$categories = get_categories();
			foreach($categories as $cat){
		  		//echo "<li><a href=\"".get_category_link($cat->cat_ID)."\">".$cat->cat_name."</a></li>";
		        echo "<li><a href=\"".get_category_link($cat->cat_ID)."\">".$cat->cat_name."<span class=\"badge\">".$cat->category_count."</span></a></li>";
			}
		?>
		</ul>
	  </div>
	</div>
</div><!-- col-md-2 -->

</div><!-- row -->

<div class="row">
<div class="col-md-8">
<div class="padding-top40"></div>
<?php comments_template(); ?>
</div><!-- col-md-8 -->
</div><!-- row -->

</div><!-- container -->

<div class="padding-top40"></div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
