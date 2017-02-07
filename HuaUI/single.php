<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Hua_UI
 * @since Hua UI 1.0
 */

get_header(); 
?>
	
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() );  ?>
				<?php huaui_post_nav(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div style="margin-top:3rem;"></div>
	<?php comments_template(); ?>



</div><!-- container -->

<div class="padding-top40"></div>

<?php get_footer(); ?>

