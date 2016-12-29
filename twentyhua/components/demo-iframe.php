<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html class="ie ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if (gt IE 9) & !(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iframe Demo</title>
	<meta content="博客, 刘东华" name="keywords">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/images/avatar_64.jpg'; ?>" /> 

	<link rel='stylesheet' id='twentythirteen-style-css'  href='/wp-content/themes/twentyhua/css/bootstrap.min.css?ver=20160301' type='text/css' media='all' />
	<script type='text/javascript' src='/wp-includes/js/jquery/jquery.js?ver=1.11.2'></script>
	<script type='text/javascript' src='/wp-content/themes/twentyhua/js/bootstrap.min.js'></script>
<style>
.iframe-demo{
	width:100%;
}
.tipping{
	display:inline;
	position:fixed;
	width:100%;
}
#tipping-id{
	display:inline;
	position:fixed;
	width:50px;
    height:50px;
	border-radius:50%;
	bottom:5px;
	right:42%;
	//background:url(http://portrait7.sinaimg.cn/1193083614/blog/180);
	background:url(http://www.dashangcloud.com/static/ds-logo-1.2-64.png);
	background-size: 100% 100%;
    background-repeat: no-repeat;
	opacity: 0.8;
}
</style>

</head> 
<?php

$src1 = "http://blog.sina.com.cn/s/blog_471d02de01000bvv.html";
$src2 = "http://liudonghua.net/shell-read-line/";

$src = $src1;

?>

<body id="main-body">

<div class="iframe-demo">
	<iframe src="<?php echo $src; ?>" frameBorder=0 marginwidth=0 marginheight=0 width="100%" height="1000" scrolling=yes ALLOWTRANSPARENCY="false" onload="iframe_onload();" id="iFrame1" name="iFrame1"></iframe>
</div>

<div class="tipping">
	<a id="tipping-id" href="javascript:;" data-toggle="modal" data-target="#myModal"></a>
</div>


<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
function iframe_onload()
{
	console.log('this widonw width: ' + window.innerWidth + '-' + this.width + ', height: ' + window.innerHeight + '-' + this.height);
	console.log('iframe widonw width: ' + iFrame1.document.body.scrollWidth + ', height: ' + iFrame1.document.body.scrollHeight);
}
</script>

</body>
</html>

