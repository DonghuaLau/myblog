<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>流程图</title>
        <style type="text/css">
          .end-element { background-color : #FFCCFF; }
        </style>
		<link rel="shortcut icon" href="http://liudonghua.net/wp-content/themes/twentyhua/images/avatar_64.jpg" /> 
		<script type='text/javascript' src='/wp-includes/js/jquery/jquery.js?ver=1.11.2'></script>
        <script src="<?php echo get_template_directory_uri();?>/components/flowchart/js/raphael-min-2.1.0.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/components/flowchart/js/flowchart.js"></script>
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
    </head>
    <body>
        <div><textarea id="code" style="width: 100%;" rows="11">
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
        <div><button id="run" type="button">Run</button></div>
        <div id="canvas"></div>
    </body>
</html>

