<?php //Template Name: Bookshelf 2 Page
include_once(dirname( __FILE__ ) . '/config-books.php');
get_header(); 
$book_list = get_book_list();
//var_dump($book_list);
global $g_hua;
?>

<div class="container entry-content">
<div class="padding-top20"></div>
<div class="row text-center">
	<h1><?php echo $g_hua['title']; ?></h1>
</div>
<div class="padding-top40"></div>
<div class="row">

	<?php 
		foreach($book_list as $book_info){  
		//var_dump($book_info); 
	?>
	

	<div class="col-md-2 col-sm-4 col-xs-6 padding-2">
	  <div class="thumbnail">
	    <a href="javascript:;"><img src="<?php echo $book_info['cover']; ?>" onclick=""></a>
	    <div class="caption">
	      <h5 style="font-weight:normal;margin-top:3px;margin-bottom:3px;"><?php echo $book_info['name']; ?></h5>
		  <h5>
			<small style="margin-left:2px;"><?php echo $book_info['time']; ?></small>
			<a target="_blank" href="<?php echo $book_info['link']; ?>"><span class="glyphicon glyphicon-download-alt"></span></a>
		  </h5>
	    </div>
	  </div>
	</div>

	<?php } ?>

</div><!-- row -->

<div class="row">
<div class="col-md-8">
<div class="padding-top40"></div>
<?php 
//global $withcomments, $post;
//echo 'is single: ' . is_single() . ', is page: ' . is_page(). ', withcomments: ' . $withcomments . ', empty post: ' . var_dump(empty($post)); 
?>
<?php comments_template(dirname( __FILE__ ) . '/../../comments.php'); ?>
</div><!-- col-md-8 -->
</div><!-- row -->

</div><!-- container -->


<?php get_footer(); ?>

<script>
</script>

