	<div class="ui-content"  role="main">
	<a href="#popupLogin" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-left ui-btn-a" data-transition="pop">Tambah</a>

	<div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
    <form data-ajax="false" action="<?= base_url("user/grup/tambahRoom")?>" name="tambah"  >
        <div style="padding:10px 20px;">
            <h3>Nama grup</h3>
            <label for="un" class="ui-hidden-accessible">Nama grup</label>
            <input name="nama_room" id="un" placeholder="username" data-theme="a" type="text" >
            
            <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Tambah</button>
        </div>
    </form>
</div>
<!-- isi-->
 <?php
					foreach($kontak as $kontak){?>
<div id="ui-body-test" class="ui-body ui-body-a ui-corner-all" style="margin-bottom:1em;">

<div class="hidden" name="id_room" value="<?= $kontak->id_rom?>"></div>
<div class="hidden" name="id_member" value="<?= $kontak->id_member?>"></div>
	
  <h3><?= $kontak->nama_room?></h3>
	<a href="<?php echo base_url('user/grup/tampil_grup/'.$kontak->id_rom);?>"  rel="external" class="ui-shadow ui-btn ui-corner-all ui-btn-inline" data-transition="pop">masuk</a>
	
   
	

</div>
					<?php } ?>

	</div>
	<script type="text/javascript">
	
		function leave(x){
		if(confirm("Yakin ingin konfirmasi user?"))
		{
		var row=x.parent().parent().parent();
		alert(row);
		var id_rom	=row.find('.id_room').html();
		var id_mem	=row.find('.id_member').html();
		$.post('<?= base_url()."user/grup/leave/"?>'+id_rom+"/"+id_mem).done(function(){
			row.remove();	
		});
		}
							}
	</script>
	