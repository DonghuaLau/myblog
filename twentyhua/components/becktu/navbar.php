<nav id="bkt-nav" class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bkt-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/front/becktu">
		<img alt="Brand" src="/wp-content/themes/twentyhua/components/becktu/images/book_logo.jpg">
 	  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bkt-navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/front/becktu">贝克图书<span class="sr-only">(current)</span></a></li>
         <li><a href=""><span>关于</span></a></li>

        <form class="navbar-form navbar-left" role="search" method="get" action="/front/becktu">
		<div class="input-group"> 
			<input id="search-word" type="text" class="form-control" placeholder="输入关键词搜索" value="<?php if(isset($_GET['s'])){ echo $_GET['s']; } ?>" name="s" aria-label="">
		    <div class="input-group-btn"> 
		      <button type="submit" class="btn btn-default"><div class="glyphicon glyphicon-search"></div></button> 
		    </div>
		</div>
        </form>

      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href=""><span>登录</span></a></li>
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
