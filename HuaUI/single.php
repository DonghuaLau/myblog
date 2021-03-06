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

				<div style="margin-top:2rem;"></div>
				<?php huaui_post_nav(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<?php	if ( comments_open() || get_comments_number() ) {
			echo '<div style="margin-top:3rem;"></div>';
			comments_template();
		}
	?>



</div><!-- container -->


<?php get_footer(); ?>

