	<div class="ui-content"  role="main">
	
<!-- isi-->
 <?php
					foreach($kontak as $kontak){?>
<div id="ui-body-test" class="ui-body ui-body-a ui-corner-all" style="margin-bottom:1em;">

<div class="hidden" name="id_room" value="<?= $kontak->id_rom?>"></div>
<div class="hidden" name="id_member" value="<?= $kontak->id_member?>"></div>
	
  <h5><?= $kontak->nama_room?></h5>
	<a href="<?php echo base_url('baru/tampil_grup/'.$kontak->id_rom);?>" rel="external" class="ui-shadow ui-btn ui-corner-all ui-btn-inline" data-transition="pop">masuk</a>
	
   
	

</div>
					<?php } ?>

	</div>
	