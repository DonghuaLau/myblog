<?php 
function flowchart_static_files()
{
	// don't know why can't work
	//wp_enqueue_style( 'twentythirteen-style', get_template_directory_uri() . '/components/html5-mplayer/css/style.css', array(), '20160316' );
	//wp_enqueue_style( 'twentythirteen-style', get_template_directory_uri() . '/components/html5-mplayer/css/APlayer.min.css', array(), '20160316' );
}
	global $g_hua;
	$g_hua['title'] = __("流程图绘制工具 | 刘东华的博客", 'twentythirteen');
	//$g_hua['func_static_files'] = 'flowchart_static_files';
	get_header(); 
?>

<script src="<?php echo get_template_directory_uri();?>/components/flowchart/js/raphael-min-2.1.0.js"></script>
<script src="<?php echo get_template_directory_uri();?>/components/flowchart/js/flowchart.js"></script>
<style>
.container {
    max-width: 80rem;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 50px;
}
h1 {
    font-size: 20px;
    color: #333;
    margin: 30px 0 10px;
}
</style>

  <div class="container">
    <div class="margin-top40"></div>
    <h1>流程图绘制工具</h1>
    <div class="margin-top20"></div>
    <div class="row">
        <div><textarea id="code" class="form-control" style="width: 100%;" rows="16">
st=>start: Start|past:>http://liudonghua.net[blank]
e=>end: End:>http://liudonghua.net
op1=>operation: My Operation|past
op2=>operation: Stuff|current
sub1=>subroutine: My Subroutine|invalid
cond=>condition: Yes
or No?|approved:>http://www.google.com
c2=>condition: Good idea|rejected
io=>inputoutput: catch something...|request

st->op1(right)->cond
cond(yes, right)->c2
cond(no)->sub1(left)->op1
c2(yes)->io->e
c2(no)->op2->e
        </textarea></div>
    	<div class="margin-top20"></div>
        <div class="text-center"><button class="btn btn-info" id="run" type="button">绘制流程图</button></div>
        <div id="canvas"></div>

    </div><!-- .row -->
    <div class="margin-top80"></div>
  </div><!-- .container -->

<script>

    window.onload = function () {
        var btn = document.getElementById("run"),
            cd = document.getElementById("code"),
            chart;

        (btn.onclick = function () {
            var code = cd.value;

            if (chart) {
              chart.clean();
            }

            chart = flowchart.parse(code);
            chart.drawSVG('canvas', {
              // 'x': 30,
              // 'y': 50,
              'line-width': 3,
              'line-length': 50,
              'text-margin': 10,
              'font-size': 14,
              'font': 'normal',
              'font-family': 'Helvetica',
              'font-weight': 'normal',
              'font-color': 'black',
              'line-color': 'black',
              'element-color': 'black',
              'fill': 'white',
              'yes-text': 'yes',
              'no-text': 'no',
              'arrow-end': 'block',
              'scale': 1,
              'symbols': {
                'start': {
                  'font-color': 'red',
                  'element-color': 'green',
                  'fill': 'yellow'
                },
                'end':{
                  'class': 'end-element'
                }
              },
              'flowstate' : {
                'past' : { 'fill' : '#CCCCCC', 'font-size' : 12},
                'current' : {'fill' : 'yellow', 'font-color' : 'red', 'font-weight' : 'bold'},
                'future' : { 'fill' : '#FFFF99'},
                'request' : { 'fill' : 'blue'},
                'invalid': {'fill' : '#444444'},
                'approved' : { 'fill' : '#58C4A3', 'font-size' : 12, 'yes-text' : 'APPROVED', 'no-text' : 'n/a' },
                'rejected' : { 'fill' : '#C45879', 'font-size' : 12, 'yes-text' : 'n/a', 'no-text' : 'REJECTED' }
              }
            });

            jQuery('[id^=sub1]').click(function(){
              alert('info here');
            });
        })();

    };
</script>

<?php get_footer(); ?>
