<div role="main" class="ui-content jqm-content">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/from.css">
	<!--coba -->
	
	<div class="ui-corner-all custom-corners">

	
   <div id="ui-body-test" class="ui-body ui-body-a ui-corner-all" style="margin-bottom:1em;">
   <div data-demo-html="true">
    <h3 class="ui-bar ui-bar-a"><?php echo $list['judul'] ?></h3>
  </div>
  <div class="ui-body ui-body-a">
  <center>
  <?php if(!empty($list['gambar'])){?>
						<img src="<?php echo base_url('asset/gambar/'.$list['gambar']); ?>" style="width:200px" >
		<?php } ?>
     </center>
	 <p><?php echo $list['text']; ?></p>
  </div>
  </div>
</div>
	


</div>