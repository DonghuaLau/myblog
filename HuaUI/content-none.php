<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Hua_UI 
 * @since Hua UI 1.0
 */
?>

<header class="page-header">
	<h1 class="search-title"><?php printf( __( '糟糕，没有搜索到与"%s"的相关文章。', 'huaui' ), get_search_query() ); ?></h1>
</header>

<div class="page-content">
</div><!-- .page-content -->
