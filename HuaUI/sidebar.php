

<!-- -->
<div class="ui bottom attached segment pushable" style="border:0px;">

	<div class="ui teal inverted vertical sidebar menu" id="menu-left">
	  <?php include('menu-side.php'); ?>
	</div>

	<!-- Side Menu for larger medie -->
	<div class="ui teal inverted vertical sticky menu" id="widescreen-menu-left">
		<?php include('menu-side.php'); ?>
	</div><!-- sider-left -->

	<div class="pusher" >
	
	  <div class="ui teal top inverted menu" id="menu-top" style="border-radius:0; margin:0;">
	    <a class="item" id="menu-open">
	      <i class="sidebar icon"></i>
	    </a>
	    <div class="item">
	      <a href="/" style="line-height: 1.1;"><?php echo get_bloginfo('name'); ?></a>
	    </div>
	  </div>
	
	  <div class="ui masthead vertical segment" style="min-height:1120px;">
	
<script>
// using context
jQuery('.ui.sidebar')
  .sidebar({
    context: jQuery('.bottom.segment')
  })
  .sidebar('attach events', '#menu-open')
;
</script>
