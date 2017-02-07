<?php

define("LOG_FILE", getcwd()."/var/log/ds.log");

/**
 * Hua UI setup.
 *
 * @since Hua UI 1.0
 */
function huaui_setup() {

	//dslog('DEBUG', 'huaui_setup');
	/*
	 * Makes Hua UI available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 */
	load_theme_textdomain( 'huaui', get_template_directory() . '/languages' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	//add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentythirteen_fonts_url() ) );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * This theme supports all available post formats by default.
	 * See https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu', 'huaui' ) );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270, true );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'huaui_setup' );


/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Hua UI 1.0
 */
function huaui_scripts_styles() {

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// Loads JavaScript file with functionality specific to Hua UI.
	//wp_enqueue_script( 'huaui-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160302', true );

	// Loads our main stylesheet.
	wp_enqueue_style( 'huaui-style', get_stylesheet_uri(), array(), '20170208' );

	// Loads the Internet Explorer specific stylesheet.
	//wp_enqueue_style( 'twentyhua-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyhua-style' ), '2016-03-18' );
	//wp_style_add_data( 'twentyhua-ie', 'conditional', 'lt IE 9' );


	// semantic-ui
	wp_enqueue_script( 'huaui-script', get_template_directory_uri() . '/semantic-ui/semantic.min.js', array( 'jquery' ), '20170206', true );
	wp_enqueue_style( 'huaui-style', get_template_directory_uri() . '/semantic-ui/semantic.min.css', array(), '20170206' );

	/* added by Donghua */
	// bootstrap
	//wp_enqueue_script( 'twentythirteen-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20160301', true );
	//wp_enqueue_style( 'twentythirteen-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '20160301' );
	//wp_enqueue_style( 'twentythirteen-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '20160301' );

}
add_action( 'wp_enqueue_scripts', 'huaui_scripts_styles' );


// Hide the admin bar
add_filter('show_admin_bar', '__return_false');


/**
 *	wp_title does not work well
 */
function huaui_site_title($display = true)
{
	$title = '';

	$site_title = get_bloginfo('name');

	if(is_home()){
		$title = $site_title;
	}else if(is_single()){
		$post_title = get_the_title	();
		$title = "$post_title | $site_title";
	}else{
		return wp_title( '|', $display, 'right' );
	}

	if($display == true){
		echo $title;
	}
	return $title;
}


/**
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 */
function huaui_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . esc_html__( 'Sticky', 'huaui' ) . '</span>';

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		huaui_entry_date();

	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'huaui' ) );
	if ( $categories_list ) {
		echo '<span class="categories-links">' . $categories_list . '</span>';
	}

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'huaui' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links">' . $tag_list . '</span>';
	}

	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'huaui' ), get_the_author() ) ),
			get_the_author()
		);
	}
}

/**
 * Print HTML with date information for current post.
 */
function huaui_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'huaui' );
	else
		$format_prefix = '%2$s';


	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'huaui' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date('Y/m/d') ) )
	);


	if ( $echo )
		echo $date;

	return $date;
}

/**
 * Display navigation to next/previous set of posts when applicable.
 */
function huaui_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<div class="padding-top40"></div>
	<nav class="navigation paging-navigation" role="navigation">
		<!--<h1 class="screen-reader-text"><?php _e( '文章导航', 'huaui' ); ?></h1>-->
		<div class="nav-links nav-xyz">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> 以前的文章', 'huaui' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( '最新文章 <span class="meta-nav">&rarr;</span>', 'huaui' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

function huaui_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<div class="padding-top40"></div>
	<nav class="navigation post-navigation" role="navigation">
		<!--<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'huaui' ); ?></h1>-->
		<div class="nav-links">
			<span><?php echo __("上一篇","hua");?>:&nbsp;</span><?php previous_post_link( '%link', _x( '%title', 'Previous post link', 'huaui' ) ); ?>
			<br>
			<span><?php echo __("下一篇","hua");?>:&nbsp;</span><?php $next = next_post_link( '%link', _x( '%title', 'Next post link', 'huaui' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

function get_my_categories()
{
	$htmlstr = '';
	$categories = get_categories();
	foreach($categories as $cat){
		$htmlstr .= "<a class=\"item\" href=\"".get_category_link($cat->cat_ID)."\">".$cat->cat_name."<span class=\"badge\">".$cat->category_count."</span></a></li>";
	}
	return $htmlstr;
}

function my_get_recent_posts($num) {
    global $wpdb;
    
    $posts = $wpdb->get_results("SELECT comment_count, ID, post_title FROM $wpdb->posts where post_type = 'post' and post_status = 'publish' ORDER BY post_date DESC LIMIT 0 , $num");
    
    foreach ($posts as $post) {
        setup_postdata($post);
        $id = $post->ID;
        $title = $post->post_title;
        $count = $post->comment_count;
        $popular .= '<a class="item" href="' . get_permalink($id) . '" title="' . $title . '">' . $title . '</a> ';
    }
    return $popular;
}


function get_popular_posts($num) {
    global $wpdb;
    
    $posts = $wpdb->get_results("SELECT comment_count, ID, post_title FROM $wpdb->posts where post_type = 'post' and post_status = 'publish' ORDER BY comment_count DESC LIMIT 0 , $num");
    
    foreach ($posts as $post) {
        setup_postdata($post);
        $id = $post->ID;
        $title = $post->post_title;
        $count = $post->comment_count;
        
        $popular .= '<a class="item" href="' . get_permalink($id) . '" title="' . $title . '">' . $title . '</a> ';
    }
    return $popular;
}

function dslog($tag, $msg)
{
    date_default_timezone_set("PRC");
    $timestr = date('Y-m-d H:i:s', time());
    $log_suffix = date('.Ym', time());
    $logfile = LOG_FILE.$log_suffix;
    file_put_contents($logfile, "$timestr [$tag] $msg\n", FILE_APPEND | LOCK_EX);
}

function var_dump_string($obj)
{
    ob_start();
    var_dump($obj);
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}

