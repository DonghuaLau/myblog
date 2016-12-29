<style>
.cover{
	//border: 1px solid #eee;
	//min-height:100px;
	padding-left:5px;
	padding-right:5px;
}
</style>

<div class="row main-content">

	<h1>Front-End Developer Handbook</h1>
	<p>It is specifically written with the intention of being a professional resource for potential and currently practicing front-end developers to equip themselves with learning materials and development tools. Secondarily, it can be used by managers, CTOs, instructors, and head hunters to gain insights into the practice of front-end development.</p>
	<p></p>

	<h1>开放平台概述</h1>
	<p>蚂蚁金服开放平台基于支付宝的海量用户，将强大的支付、营销、数据能力，通过接口等形式开放给第三方合作伙伴，帮助第三方合作伙伴创建更具竞争力的应用。通过接入蚂蚁金服开放平台，第三方合作伙伴可以获得更多的流量、用户和收益，而第三方合作伙伴提供的服务也让用户获得了更丰富的体验，平台生态更加繁荣，最终实现多方共赢。</p>
	<p></p>
</div>

<script>

function text_selected()
{
	console.log('text selected');
}

function mousedown_func(e)
{
	//console.dir(e);
	console.log('mouse down');
}

function mouseup_func(e)
{
	//console.dir(e);
	var text_selected = window.getSelection();
	console.log('mouse up: ' + text_selected);
	alert(text_selected);
}

jQuery(document).ready(function(){
	//jQuery(".main-content").change(text_selected);
	//jQuery(".main-content").mousedown(mousedown_func);
	jQuery(".main-content").mouseup(mouseup_func);
	
});
</script>
