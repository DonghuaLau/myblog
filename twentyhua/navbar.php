
		<nav class="navbar navbar-default <?php if(defined("NAV_FIX")){echo " navbar-fixed-top";} ?>">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/"><div class="glyphicon glyphicon-globe"></div></a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="/">Home<span class="sr-only">(current)</span></a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="/wiki">Wiki</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="/screenslider">Full screen slider</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-left" role="search" method="get" action="/">
		        <div class="input-group">
		          <input type="text" class="form-control" placeholder="Search" value name="s">
				  <span class="input-group-btn">
		        	<button type="submit" class="btn btn-default" id="nav-search-id"><div class="glyphicon glyphicon-search"></div></button>
      			  </span>
		        </div>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <!--<li><a href="#">Link</a></li>-->
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><div class="glyphicon glyphicon-cog"></div><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="/about">About</a></li>
		            <li role="separator" class="divider"></li>
		            <li>
						<?php if(is_user_logged_in()){
                                    $current_user = wp_get_current_user();
                                ?>
                                    <li><a href="<?php echo admin_url(); ?>"><?php echo $current_user->user_login; ?></a></li>
                                    <li><a href="<?php echo admin_url('post-new.php'); ?>"><?php echo "New post"; ?></a></li>
                                    <li><a href="<?php echo wp_logout_url("http://".$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">Logout</a></li>
                                <?php }else{ ?>
                                    <li><a href="<?php echo wp_login_url("http://".$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">Login</a></li>
                            <?php }
                            ?>
					</li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>	
