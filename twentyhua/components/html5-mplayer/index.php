<!DOCTYPE html>
<html>

<?php 
function mplayer_static_files()
{
	// don't know why can't work
	wp_enqueue_style( 'twentythirteen-style', get_template_directory_uri() . '/components/html5-mplayer/css/style.css', array(), '20160316' );
	wp_enqueue_style( 'twentythirteen-style', get_template_directory_uri() . '/components/html5-mplayer/css/APlayer.min.css', array(), '20160316' );
}
	global $g_hua;
	$g_hua['title'] = __("H5音乐播放器 | 刘东华的博客", 'twentythirteen');
	//$g_hua['title'] = "H5音乐播放器 | 刘东华的博客";
	$g_hua['func_static_files'] = 'mplayer_static_files';
	get_header();
?>
<!--
<head>
    <meta charset="UTF-8">
    <title>H5音乐播放器 | 刘东华的博客</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/components/html5-mplayer/css/APlayer.min.css?v=001">
    <link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/components/html5-mplayer/css/style.css?v=001">
    <style>
    </style>
</head>
<body>
-->
    <div class="container">
        <!--<a href="/">返回博客</a>-->
        <h1>HTML5音乐播放器</h1>
        <h3>支持播放列表和歌词</h3>
        <hr>

        <div id="player1" class="aplayer">
            <pre class="aplayer-lrc-content">
				[ti:消失的月光]
				[ar:李健]
				[al:李健]
				[by:]
				[offset:0]
				[00:00.00]消失的月光 - 李健
				[00:00.26]词：李健
				[00:00.39]曲：李健改编自苏格兰民谣
				[00:01.23]
				[00:15.12]我们曾流连在银色的月光
				[00:21.55]
				[00:22.58]也曾让湖水泛起层层波浪
				[00:29.03]
				[00:29.94]可我们如何穿越命运的漩涡
				[00:36.58]
				[00:37.50]相爱的人啊怎能不悲伤
				[00:44.44]
				[00:46.96]我可以为了你放弃所有欲望
				[00:53.32]
				[00:54.42]也可以不顾一切奔赴战场
				[01:01.01]
				[01:01.84]可我又如何逃脱上天的安排
				[01:08.50]
				[01:09.39]亲爱的只要你把我记心上
				[01:16.54]
				[02:06.30]当我迎来春风吹送的芬芳
				[02:12.76]
				[02:13.62]多想你在我身旁和我徜徉
				[02:20.35]
				[02:21.19]可当我身陷最寒冷的苦难
				[02:27.53]
				[02:28.62]亲爱的只要你远走他乡
				[02:35.67]
				[02:38.07]可当我身陷最寒冷的苦难
				[02:44.55]
				[02:45.53]亲爱的我要你远走他乡
            </pre>
            <pre class="aplayer-lrc-content">
				[ti:平行宇宙]
				[ar:徐誉滕]
				[al:]
				[by:心灵之窗志华]
				
				[00:00.00]歌词千寻 www.lrcgc.com
				[00:00.88]徐誉滕 - 平行宇宙
				[00:02.79]词曲：徐誉滕
				[00:04.92]演唱：徐誉滕
				[00:05.44]编曲：徐誉滕
				[00:19.52]我们这里今天又是一个雾霾天
				[00:23.11]你们那里一年能见到几次蔚蓝
				[00:28.17]我们这里拆了我童年的马家巷
				[00:31.97]你们那里一座城市的记忆能卖多少钱
				[00:36.61]我们电视里的观众比台上的还会演
				[00:41.16]你们那里歌手是否喜欢飚着嗓子喊
				[00:45.32]我们这里有人栽花有人种树有人砍
				[00:49.67]你们那里是否依然绿草青青牛羊满山
				[00:57.63]平行宇宙
				[00:59.58]平行的世界
				[01:01.86]我一直想看一眼你的地球
				[01:06.70]有没有约束有没有自由
				[01:10.59]是满街高楼还是败冢荒丘
				[01:15.47]平行宇宙
				[01:16.99]平行的世界
				[01:19.44]你们那里是否有一个乌托邦
				[01:23.70]有没有规则有没有信仰
				[01:27.85]是否人为财死 鸟为食亡
				[01:50.81]我们电视里的观众比台上的还会演
				[01:55.11]你们那里歌手是否喜欢飚着嗓子喊
				[01:59.51]我们这里有人栽花有人种树有人砍
				[02:03.87]你们那里是否依然绿草青青牛羊满山
				[02:11.79]平行宇宙
				[02:13.69]平行的世界
				[02:15.94]我一直想看一眼你的地球
				[02:20.24]有没有约束有没有自由
				[02:24.65]是满街高楼还是败冢荒丘
				[02:29.25]平行宇宙
				[02:31.15]平行的世界
				[02:33.55]你们那里是否有一个乌托邦
				[02:37.70]有没有规则有没有信仰
				[02:42.80]是否人为财死 鸟为食亡
				[02:55.25]平行宇宙
				[02:57.30]平行的世界
				[02:59.85]我一直想看一眼你的地球
				[03:03.90]有没有约束有没有自由
				[03:08.31]是满街高楼还是败冢荒丘
				[03:12.91]平行宇宙
				[03:14.76]平行的世界
				[03:17.21]你们那里是否有一个乌托邦
				[03:21.31]有没有规则有没有信仰
				[03:25.66]是否人为财死 鸟为食亡
				[03:29.74]
				[03:34.74]
				[03:38.74]
            </pre>
            <pre class="aplayer-lrc-content">
				[ti:咱们结婚吧]
				[ar:齐晨]
				[al:咱们结婚吧(单曲)]
				[by:]
				[offset:700]
				[00:00.28]<咱们结婚吧>歌词
				[00:02.77]
				[00:05.17]作词：Jane欢欢/张维
				[00:07.49]作曲：高磊
				[00:09.69]演唱：齐晨
				[00:12.01]
				[01:48.02][00:19.59]洁白的婚纱
				[01:49.83][00:22.11]手捧着鲜花
				[01:51.91][00:24.04]美丽得像童话
				[01:53.83][00:26.60]
				[01:55.30][00:28.03]想起那年初夏
				[01:58.33][00:30.47]我为你牵挂
				[02:00.50][00:32.65]在一起就犯傻
				[02:02.55][00:34.78] 
				[02:02.95][00:35.11]丘比特轻轻飞过月光下
				[02:07.10][00:39.30]潘多拉她听到了回答
				[02:11.56][00:43.84]礼堂钟声 在敲打 幸福密码
				[02:18.14][00:50.15]
				[02:57.03][02:20.52][00:52.55]哦My Love 咱们结婚吧
				[03:01.48][02:24.99][00:56.90]好想和你拥有一个家
				[03:05.27][02:28.95][01:00.92]这一生最美的梦啊 
				[03:09.81][02:33.39][01:05.54]有你陪伴我同闯天涯 
				[03:13.46][02:36.81][01:09.25] 
				[03:14.00][02:37.71][01:09.93]哦My Love 咱们结婚吧
				[03:18.63][02:42.23][01:14.29]我会用一生去爱你的
				[03:22.34][02:46.20][01:18.06]我愿把一切都放下
				[03:27.19][02:50.71][01:22.67]给你幸福的家
				[03:31.22][02:54.65][01:26.60]
            </pre>
            <pre class="aplayer-lrc-content">
				[00:02.90]远
				[00:05.38]作词：左右 作曲：李键
				[00:07.34]演唱：李健
				[00:10.34]
				[00:36.31]不知你现在的地方
				[00:40.85]离我有多遥远
				[00:45.15]站在最高的山顶上
				[00:49.37]能不能望的见
				[00:52.61]就算分离的世界天空依然相连
				[00:59.73]
				[01:01.36]有没有在风中听到我呼唤
				[01:09.85]也许流浪的云他能带去思念
				[01:18.45]有没有在雨中看到我的泪点
				[01:25.99]
				[01:44.63]不知你回来的时候
				[01:49.40]还要有多久远
				[01:53.66]就算最美丽的花朵
				[01:57.89]会不会依然鲜艳
				[02:01.27]当满满的圆月照亮城市夜晚
				[02:09.84]有没有在影子里想到你的孤单
				[02:18.33]当南飞的大雁追逐冬日温暖
				[02:26.96]有没有在落叶中感到你的疲倦
				[02:35.23]
            </pre>
        </div>

	<br>
	<br>
    <p style="font-size:12px;">感谢：<a href="https://www.anotherhome.net/" target="_blank">DIYgod</a>. 源码：<a href="https://github.com/DIYgod/APlayer" target="_blank">GitHub</a>. Licensed MIT.</p>
    </div><!-- ./container -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/html5-mplayer/css/style.css?v=006">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/html5-mplayer/css/APlayer.min.css?v=001">
    <script src="<?php echo get_template_directory_uri(); ?>/components/html5-mplayer/js/APlayer.min.js"></script>
    <script>


        var ap1 = new APlayer({
            element: document.getElementById('player1'),
            narrow: false,
            autoplay: false,
            showlrc: true,
            theme: '#ad7a86',
            music: [
                {
                    title: '消失的月光',
                    author: '李健',
                    url: '<?php echo get_template_directory_uri(); ?>/musics/xiaoshideyueguang.mp3',
                    pic: '<?php echo get_template_directory_uri(); ?>/musics/lijian.jpg'
                },
                {
                    title: '平行宇宙',
                    author: '徐誉滕',
                    url: '<?php echo get_template_directory_uri(); ?>/musics/pingxingyuzhou.mp3',
                    pic: '<?php echo get_template_directory_uri(); ?>/musics/xuyuteng.jpg'
                },
                {
                    title: '咱们结婚吧',
                    author: '齐晨',
                    url: '<?php echo get_template_directory_uri(); ?>/musics/zamenjiehunba.mp3',
                    pic: '<?php echo get_template_directory_uri(); ?>/musics/qichen.jpg'
                },
                {
                    title: '远',
                    author: '李健',
                    url: '<?php echo get_template_directory_uri(); ?>/musics/yuan.mp3',
                    pic: '<?php echo get_template_directory_uri(); ?>/musics/lijian.jpg'
                }
            ]
        });
        ap1.init();
    </script>

<?php get_footer(); ?>
<!--
</body>
</html>
-->
