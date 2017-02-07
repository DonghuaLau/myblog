<?php if ( have_posts() ) : ?>
	<header class="archive-header">
		<?php /*<h1 class="archive-title"><?php printf( __( '文章分类 > %s', 'huaui' ), single_cat_title( '', false ) ); ?></h1> */ ?>

		<?php 
			//if ( category_description() ) : // Show an optional category description 
			if (0) :
				echo category_description(); 
			endif; 
		?>
	</header><!-- .archive-header -->

	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content-summary', get_post_format() ); ?>
	<?php endwhile; ?>

	<div style="margin-top:2rem;"></div>

	<?php huaui_paging_nav(); ?>

<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
