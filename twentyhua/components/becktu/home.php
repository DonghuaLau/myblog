<style>
.cover{
	//border: 1px solid #eee;
	//min-height:100px;
	padding-left:5px;
	padding-right:5px;
}
.thumbnail{
}
</style>

<div class="row main-content">

 <?php for($i = 0; $i < 25; $i++){ ?>
  <div class="col-xs-6 col-sm-3 col-md-3 cover">
	
	  <div class="thumbnail">
	    <a href="/front/becktu/detail"><img src="/wp-content/themes/twentyhua/components/becktu/images/jobs-cover.jpg"/></a>
	    <div class="caption">
	      <h5 style="font-weight:normal;margin-top:3px;margin-bottom:3px;">title</h5>
		  <h5>
			<small style="margin-left:2px;">2016-09-10</small>
			<!--<a target="_blank" href="#"><span class="glyphicon glyphicon-download-alt"></span></a>-->
		  </h5>
	    </div>
	  </div>
  </div>
 <?php } ?>

</div>
