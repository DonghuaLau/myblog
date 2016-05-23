
<div class="row">
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
</div><!-- row -->

<div class="row">
	<!-- newest articles -->
	<div class="panel">
	  <div class="panel-heading">
	    <h3 class="panel-title"><?php echo __("最新文章", "hua"); ?><!--<a class="panel-title-right" href="#">更多>></a>--></h3>
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
</div><!-- row -->

<div class="row">
	<!-- hotest articles -->
	<div class="panel">
	  <div class="panel-heading">
	    <h3 class="panel-title"><?php echo __("热门文章", "hua"); ?><!--<a class="panel-title-right" href="#">更多>></a>--></h3>
	  </div>
	  <div class="panel-body">
	  <?php echo get_popular_posts(10); ?>
	  </div>
	</div>
</div><!-- row -->
