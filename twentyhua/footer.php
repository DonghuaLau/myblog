<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->

		<footer class="site-footer" role="contentinfo">
			<?php //get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfifteen_credits' ); ?>
			&copy; 2016 <a href="http://liudonghua.net">liudonghua.net</a>&nbsp;&nbsp;<span>京ICP备14053565号-3</span> <div style="display:none;">Powered by <a href="https://wordpress.org/">Wordpress</a></div>
			<div style="display:none;">
			<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256098697'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1256098697%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
			</div>
			</div><!-- .site-info -->
			<div class="padding-top20"></div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
