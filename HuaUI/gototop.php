<style>
#gotop{
    position:fixed;
    bottom:60px;
    right:10px;
    border-radius:50%;
    display:block;
	height: 2.5rem;
	font-size: 2rem;
	color: #fff;
    text-decoration:none;
    background-color:#5bc0de;
    //background:url(/wp-content/themes/HuaUI/images/gotop.png);
    background-size:40px;
    background-repeat: no-repeat;
    /* for IE */
    filter:alpha(opacity=60);
    /* CSS3 standard */
    opacity:0.6 !important;
    z-index:999;
}
#float-menu{
    position:fixed;
    bottom:20px;
    right:10px;
    border-radius:50%;
    display:block;
	height: 2.5rem;
    font-size: 1.2rem;
    width: 2.75rem;
	color: #fff;
    text-decoration:none;
    background-color:#5bc0de;
    background-size:40px;
    background-repeat: no-repeat;
    /* for IE */
    filter:alpha(opacity=60);
    /* CSS3 standard */
    opacity:0.6 !important;
    z-index:999;
}
#gotop i.icon{
	margin-top: 6px;
    margin-left: 2px;
}
#float-menu i.icon{
	margin-top: 9px;
    margin-left: 9px;
}

@media (min-width: 987px){
#gotop{
    bottom:20px;
}
#float-menu{
	display:none !important;
}
}
</style>

<a id="gotop" href="#"><i class="angle up icon"></i></a>
<a id="float-menu" href="javascript:void(0);"><i class="content icon"></i></a>

<script>
jQuery('.ui.sidebar')
  .sidebar({
    context: jQuery('.bottom.segment')
  })
  .sidebar('attach events', '#float-menu')
;
jQuery(function(){
    jQuery(window).scroll(function(){  //只要窗口滚动,就触发下面代码 
        var scrollt = document.documentElement.scrollTop + document.body.scrollTop; //获取滚动后的高度 
        if( scrollt >200 ){  //判断滚动后高度超过200px,就显示  
            jQuery("#gotop").fadeIn(400); //淡出     
            jQuery("#float-menu").fadeIn(400);
        }else{
            jQuery("#gotop").stop().fadeOut(400); //如果返回或者没有超过,就淡入.必须加上stop()停止之前动画,否则会出现闪动   
            jQuery("#float-menu").stop().fadeOut(400);
        }
    });
    jQuery("#gotop").click(function(){ //当点击标签的时候,使用animate在200毫秒的时间内,滚到顶部
            jQuery("html,body").animate({scrollTop:"0px"},200);
    });
});
</script>
