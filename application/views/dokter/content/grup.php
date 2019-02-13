	<div class="ui-content"  role="main">
	<a href="#popupLogin" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-a" data-transition="pop">Tambah</a>

	<div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
    <form data-ajax="false" action="<?= base_url("user/grup/tambahRoom")?>" name="tambah"  >
        <div style="padding:10px 20px;">
            <h4>Nama grup</h4>
            <label for="un" class="ui-hidden-accessible">Nama grup</label>
            <input name="nama_room" id="un" placeholder="username" data-theme="a" type="text">
            
            <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Tambah</button>
        </div>
    </form>
</div>
<!-- isi-->
 <?php
					foreach($kontak as $kontak){?>
<div id="ui-body-test" class="ui-body ui-body-a ui-corner-all" style="margin-bottom:1em;">

<div class="hidden" name="id_room" value="<?= $kontak->id_rom?>"></div>
	
  <h4><?= $kontak->nama_room?></h4>
	<a href="<?php echo base_url('dokter/grup/tampil_grup/'.$kontak->id_rom);?>" rel="external" class="ui-shadow ui-btn ui-corner-all ui-btn-inline" data-transition="pop">masuk</a>
	<!--<a href="javascript:void(null)" onclick="leaveRoom($(this))" class="ui-shadow ui-btn ui-corner-all ui-btn-inline" data-transition="pop">Meninggalkan</a>-->
   
	

</div>
					<?php } ?>

	</div>
	<script type="text/javascript">
		function leaveRoom(x){
						var a		=x.parent().parent().parent();
						var id_rom	=a.find('.id_rom').html();
						var id_m	=a.find('.id_member').html();
						$.post("<?= base_url("dokter/grup/leaveRoom")?>/"+id_rom+"/"+id_m).done
						(function(){
							a.remove();
						});
					}
	</script>
	
	