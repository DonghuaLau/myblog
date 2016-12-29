<style>
.panel-body li a{
	margin-left: -18px;
}
</style>
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
	  <?php echo my_get_recent_posts(20); ?>
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
	  <?php echo get_popular_posts(20); ?>
	  </div>
	</div>
</div><!-- row -->

<div class="row">
	<!-- hotest articles -->
	<div class="panel">
	  <div class="panel-heading">
	    <h3 class="panel-title"><?php echo __("友情链接", "hua"); ?><!--<a class="panel-title-right" href="#">更多>></a>--></h3>
	  </div>
	  <div class="panel-body">
		<li><a href="http://www.csmbcfw.com/">长沙面包车出租搬家</a></li>
	  </div>
	</div>
</div><!-- row -->
