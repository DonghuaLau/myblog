
			<div class="item text-center">
			  <div style="margin-top:20px;"></div>


			  <a class="ui logo icon image" href="/">
			    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar-160-1.1.jpg" style="width:100px; border-radius: 50%;">
			  </a>
			  <br/>
			  <div style="margin-top:20px;"></div>
			  <a href="/"><b><?php echo get_bloginfo('name'); ?></b></a>
			</div>
			
			<div class="item">
			  <div class="header">文章分类</div>
			  <div class="menu">
				  <?php echo get_my_categories(); ?>
			  </div>
			</div>


			<div class="item">
			  <div class="header">其他</div>
			  <div class="menu">
			  	<a class="item" href="/wiki">我的维基</a>
			  	<a class="item" href="http://www.pxhua.com/">祥和人生 华丽遇见</a>
			  	<a class="item" href="http://www.csmbcfw.com/">长沙面包车出租搬家</a>
			  </div>
			</div>


			<div class="item">
				<div style="margin-top:20px;"></div>
				<form action="/" method="GET" class="text-center">
				  <div class="ui icon input">
				    <input id="seach-input" name="s" type="text" placeholder="搜索...">
				    <i class="search icon"></i>
				  </div>
				</form>
				<div style="margin-top:20px;"></div>
			</div>

			<div style="margin-top:20px;"></div>

<?php /*
*/ ?>
			<div class="item">
			  <div class="header">最新文章</div>
			  <div class="menu">
			   <?php echo my_get_recent_posts(8); ?> 
			  </div>
			</div>

			<div class="item">
			  <div class="header">热门文章</div>
			  <div class="menu">
			   <?php echo my_get_recent_posts(8); ?> 
			  </div>
			</div>
