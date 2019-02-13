<div role="main" class="ui-content jqm-content">
<div data-demo-html="true">
<h3>Riwayat Penyakit</h3>

<span></span>

			
</div>
<?php foreach ($riwa as $row) { ?>
<div id="ui-body-test" class="ui-body ui-body-a ui-corner-all" style="margin-bottom:1em;">
		<h3>Form isi</h3>
		 <form data-ajax="false" action="<?php echo base_url("user/riwayat/edit_rwt")?>" method="POST" enctype="multipart/form-data">
           <fieldset>
		   
			<input name="id" id="textinput-4" placeholder="Keluhan sekarang" value="<?= $row->id_riwayat;?>" type="hidden">
			<label for="textinput-4" class="ui-hidden-accessible">Keluhan sekarang</label>
			<input name="sekarang" id="textinput-4" placeholder="Keluhan sekarang" value="<?= $row->rwt_now;?>" type="text">
			<label for="textinput-4" class="ui-hidden-accessible">Penyebab sakit</label>
			<input name="penyebab" id="textinput-4" placeholder="Penyebab sakit" value="<?= $row->penyebab;?>" type="text">
			<label for="textinput-4" class="ui-hidden-accessible">Pada area mana gejala dirasakan</label>
			<input name="area" id="textinput-4" placeholder="Pada area mana gejala dirasakan" value="<?= $row->area;?>" type="text">
			<label for="textinput-4" class="ui-hidden-accessible">Kapan gejala muncul</label>
			<input name="kapan" id="textinput-4" placeholder="Kapan gejala muncul" value="<?= $row->kapan;?>" type="text">

			<label for="email">Gambar riwayat penyakitdiagnosa</label>
			<input type="file" name="gambar" >

		    <label for="textinput-4" class="ui-hidden-accessible">Riwayat penyakit</label>
			<input name="dulu" id="textinput-4" placeholder="Riwayat penyakit" value="<?= $row->rwt_dulu;?>" type="text">
		    <label for="textinput-4" class="ui-hidden-accessible">Riwayat penyakit keluarga</label>
			<input name="keluarga" id="textinput-4" placeholder="Riwayat penyakit" value="<?= $row->rwt_keluarga;?>" type="text">
                        
			<input id="Submit" type="submit" value="Simpan" data-role="button" data-inline="true" data-theme="b" />
               

           <hr />
           
           </fieldset>
       </form>
	
		</div>
<?php }?>
		</div>
		
