<?php
	$nav_active = get_active_nav();
	

?>
		<nav id="hua-nav" class="navbar navbar-default <?php if(defined("NAV_FIX")){echo " navbar-fixed-top";} ?>">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hua-navbar-collapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/">
				<img alt="Brand" src="<?php echo get_template_directory_uri().'/images/avatar_64.jpg'; ?>">
		 	  </a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="hua-navbar-collapse">
		      <ul class="nav navbar-nav">
		        <li<?php echo $nav_active['home'];?>><a href="/">首页<span class="sr-only">(current)</span></a></li>
		        <li class="dropdown<?php echo $nav_active['category'];?>">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">文章分类<span class="caret"></span></a>
		          <ul id="category-menu" class="dropdown-menu">
				  <?php
				  	$categories = get_categories();
				  	foreach($categories as $cat){
		            	echo "<li><a href=\"".get_category_link($cat->cat_ID)."\">".$cat->cat_name."<span class=\"badge\">".$cat->category_count."</span></a></li>";
				  	
				  	}
				  ?>
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">其它<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="/screenslider">Full screen slider</a></li>
		            <!--<li><a href="/front/home11"><?php //echo __("首页Morn", "hua"); ?></a></li>-->
					<li role="separator" class="divider"></li>
		            <li><a href="javascript:void(0);">...</a></li>
		          </ul>
		        </li>
		        <li class="dropdown<?php echo $nav_active['tools'];?>">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">工具<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="/front/calendar"><?php echo __("万年历", "hua"); ?></a></li>
					<li role="separator" class="divider"></li>
		            <li><a href="javascript:void(0);">...</a></li>
		          </ul>
		        </li>
		        <li><a href="/wiki">我的维基</a></li>
		        <li<?php echo $nav_active['about'];?>><a href="/about">关于</a></li>
		        <form class="navbar-form navbar-left" role="search" method="get" action="/">
				<div class="input-group"> 
					<input id="search-word" type="text" class="form-control" placeholder="输入关键词搜索" value="<?php if(isset($_GET['s'])){ echo $_GET['s']; } ?>" name="s" aria-label="">
				    <div class="input-group-btn"> 
				      <button type="submit" class="btn btn-default"><div class="glyphicon glyphicon-search"></div></button> 
				      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
				      <ul class="dropdown-menu dropdown-menu-right">
				            <li><a id="google-search" href="javascript:void(0);"><img alt="google" width="20px" src="<?php echo get_template_directory_uri(); ?>/images/google.png"/>&nbsp;&nbsp;Google</a></li>
				            <li><a id="baidu-search" href="javascript:void(0);"><img alt="baidu" width="20px" src="<?php echo get_template_directory_uri(); ?>/images/baidu.ico"/>&nbsp;&nbsp;Baidu</a></li>
				      </ul>
				    </div>
				</div>
		        </form>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
				<li id="music-bar" style="display:none;">
					<audio controls>
					  <source src="<?php echo get_template_directory_uri(); ?>/musics/pingxingyuzhou.mp3" type="audio/mpeg">
					  <?php echo __("Unsupported", "hua"); ?>
					</audio>
				</li>
				<?php if(is_user_logged_in()){
                         $current_user = wp_get_current_user();
                ?>
                   <li><a href="<?php echo admin_url('post-new.php'); ?>"><?php echo "发表文章"; ?></a></li>
                   <li><a href="<?php echo admin_url(); ?>"><?php echo $current_user->user_login; ?></a></li>
                   <li><a href="<?php echo wp_logout_url("http://".$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">退出</a></li>
                 <?php }else{ ?>
                   <li><a href="<?php echo wp_login_url("http://".$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">登录</a></li>
                 <?php } ?>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>	

<!-- additional code -->
<div style="display:none">
	<form id="google-search-form" method="get" action="https://www.google.com/#newwindow=1&q=word" target="_blank">
		<!--<input id="google-search-word" type="text" name="q"/>-->
	</form>
	<form id="baidu-search-form" method="get" action="https://www.baidu.com/s" target="_blank">
		<input id="baidu-search-word" type="text" name="wd"/>
	</form>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery("#google-search").click(function(){
		var word = jQuery("#search-word").val();
		var action = "https://www.google.com/#newwindow=1&q=" + word;
		console.log("google search, word: " + word + ", action: " + action);
		//jQuery("#google-search-word").val(word);
		jQuery("#google-search-form").attr("action", action);
		jQuery("#google-search-form").submit();
	});
	jQuery("#baidu-search").click(function(){
		var word = jQuery("#search-word").val();
		console.log("baidu search, word: " + word);
		jQuery("#baidu-search-word").val(word);
		jQuery("#baidu-search-form").submit();
	});
});
</script>
