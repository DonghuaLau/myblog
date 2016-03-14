<?php //Template Name: Screen slider Page ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html class="fsvs demo" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/images/avatar_64.jpg'; ?>"  /> 
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/screenslider/css/default.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/screenslider/css/style-format.css'; ?>">
	<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/screenslider/js/jquery.min.js'; ?>'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/screenslider/js/jquery.swipe-events.js'; ?>'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/screenslider/js/prismjs.js'; ?>'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/screenslider/js/fsvs.js'; ?>'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/screenslider/js/main.js?v=01'; ?>'></script>
</head>

<style>
#fsvs-pagination{
	//display:none;
}
</style>


    <body>
        <div id="fsvs-body">
            <div class="slide" id="fsvs-initial-setup">
                <h4 class="htmleaf-title"><a class="htmleaf-icon icon-home" href="http://liudonghua.net/" title="Home"><span>Home</span></a>有技术男的地方，就有江湖</h4>
                <div>
                    <pre><code class="language-javascript">
#include < iostream >
int main()
{
	std::cout << "Hello World!" << std::endl;
	return 0;
}
                    </code></pre>
                <p>凭借“Hello World!”行走江湖多年，所向披靡。 </p>
                </div>
            </div>
            <div class="slide" id="basic-html-setup">
                <h4 class="htmleaf-title">对酒当歌，权天下久矣！</h4>
                <div>
                    <a href="http://www.htmleaf.com/jQuery/shijuecha/201412311044.html">
                      <img src="<?php echo get_template_directory_uri() . '/screenslider/img/z.jpg'; ?>" width="300" alt="jQuery带视觉差的整个页面滚动特效插件OnePageScroll.js"/>
                    </a>
                </div>

            </div>
            <div class="slide">
                <h2>Default Options</h2>
    <pre><code class="language-javascript">
$(document).ready( function() {
    var fsvs = $.fn.fsvs({
        speed : 5000,
        bodyID : 'fsvs-body',
        selector : '> .slide',
        mouseSwipeDisance : 40,
        afterSlide : function(){},
        beforeSlide : function(){},
        endSlide : function(){},
        mouseWheelEvents : true,
        mouseDragEvents : true,
        touchEvents : true,
        arrowKeyEvents : true,
        pagination : false,
        nthClasses : false,
        detectHash : true
    });
});
    </code></pre>
            </div>
            <div class="slide">
                <h2>Load In New Slides On End</h2>
    <pre><code class="language-javascript">
$(document).ready( function() {
    var slider = $.fn.fsvs({
        ...
        endSlide : function(index) {
            $('&lt;div class="slide"&gt;&lt;h2&gt;Slide ' + (index+2) + '&lt;/h2&gt;&lt;/div&gt;').appendTo( $('body') );
            // reset the nth classes if you need it
            slider.nthClasses(3);
            // rebind pagination if you need it
            //slider.addPagination();
        }
        ...
    });
});
</code></pre>
            </div>
            <div class="slide">
                <div class="related">
                    <h3>如果你喜欢这个插件，那么你可能也喜欢:</h3>
                    <a href="http://www.htmleaf.com/jQuery/shijuecha/201412311044.html">
                      <img src="<?php echo get_template_directory_uri() . '/screenslider/img/1.jpg'; ?>" width="300" alt="jQuery带视觉差的整个页面滚动特效插件OnePageScroll.js"/>
                      <h3>jQuery带视觉差的整个页面滚动特效插件OnePageScroll.js</h3>
                    </a>
                    <a href="http://www.htmleaf.com/jQuery/Layout-Interface/20141219923.html">
                      <img src="<?php echo get_template_directory_uri() . '/screenslider/img/2.jpg'; ?>" width="300" alt="jQuery和css3全屏翻页切换页面特效"/>
                      <h3>jQuery和css3全屏翻页切换页面特效</h3>
                    </a>
                </div>
            </div>
        </div>
    </body>

</html>
