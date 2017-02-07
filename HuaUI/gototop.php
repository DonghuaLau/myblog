<style>
#gotop{
    position:fixed;
    bottom:20px;
    right:10px;
    border-radius:50%;
    display:block;
    width:40px;
    height:40px;
    text-decoration:none;
    background-color:#5bc0de;
    background:url(/wp-content/themes/HuaUI/images/gotop.png);
    background-size:40px;
    background-repeat: no-repeat;
    /* for IE */
    filter:alpha(opacity=60);
    /* CSS3 standard */
    opacity:0.6 !important;
    z-index:999;
}
</style>

<a id="gotop" href="#"></a>

<script>
jQuery(function(){
    jQuery(window).scroll(function(){  //只要窗口滚动,就触发下面代码 
        var scrollt = document.documentElement.scrollTop + document.body.scrollTop; //获取滚动后的高度 
		console.log("scrollt:" + scrollt );
        if( scrollt >200 ){  //判断滚动后高度超过200px,就显示  
            jQuery("#gotop").fadeIn(400); //淡出     
        }else{
            jQuery("#gotop").stop().fadeOut(400); //如果返回或者没有超过,就淡入.必须加上stop()停止之前动画,否则会出现闪动   
        }
    });
    jQuery("#gotop").click(function(){ //当点击标签的时候,使用animate在200毫秒的时间内,滚到顶部
            jQuery("html,body").animate({scrollTop:"0px"},200);
    });
});
</script>
