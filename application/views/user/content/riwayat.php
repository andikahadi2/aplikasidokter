<div role="main" class="ui-content jqm-content">
<div data-demo-html="true">
<h4>Riwayat Penyakit</h4>

<span></span>
<?php foreach ($riwa as $row) { ?>
	<form>
    <ul data-role="listview" data-inset="true">
        <li class="ui-field-contain">
			<input  id="name2" value="<?= $row->id_riwayat ?>" data-clear-btn="true" type="hidden">
            <label for="name2">Keluhan sekarang</label>
            <input  disabled="disabled" id="name2" value="<?= $row->rwt_now ?>" data-clear-btn="true" type="text">
		</li>
		<li class="ui-field-contain">
			<label for="name2">Penyebab sakit</label>
            <input  disabled="disabled" id="name2" value="<?= $row->penyebab ?>" data-clear-btn="true" type="text">
		</li>
		<li class="ui-field-contain">
			<label for="name2">Pada area mana gejala dirasakan</label>
            <input  disabled="disabled" id="name2" value="<?= $row->area ?>" data-clear-btn="true" type="text">
		</li>
		<li class="ui-field-contain">
			<label for="name2">Kapan gejalan mulai muncul</label>
            <input  disabled="disabled" id="name2" value="<?= $row->kapan ?>" data-clear-btn="true" type="text">
        </li>
        <li class="ui-field-contain" >
		<div>
		<label for="name2">Gambar riwayat penyakit/diagnosa</label>
		<?php if(!empty($row->gambar)){?>
						<img src="<?php echo base_url('asset/gambar/'.$row->gambar); ?>" style="width:100px;" >
						<?php } ?>
		</div>
        </li>
		 <li class="ui-field-contain">
            <label for="name2">Riwayat penyakit</label>
            <input  disabled="disabled"  value="<?= $row->rwt_dulu ?>" data-clear-btn="true" type="text">
			</li>
			<li class="ui-field-contain">
			<label for="name2">Riwayat penyakit keluarga</label>
            <input  disabled="disabled" id="name2" value="<?= $row->rwt_keluarga ?>" data-clear-btn="true" type="text">
		</li>
		<a href="<?= base_url('user/riwayat/edit/'.$row->id_member)?>" id="kembali" type="button" value="kembali" data-role="button" data-inline="true" data-theme="b" >edit</a>
    </ul>

</form>			
			<?php }?>
</div>
<div id="ui-body-test" class="ui-body ui-body-a ui-corner-all" style="margin-bottom:1em;">
		<h3>Form isi</h3>
		 <form data-ajax="false" action="<?php echo base_url("user/riwayat/tambah")?>" method="POST" enctype="multipart/form-data">
           <fieldset>
		   
          <label for="textinput-4" class="ui-hidden-accessible">Keluhan sekarang</label>
			<input name="sekarang" id="textinput-4" placeholder="Keluhan sekarang" value="" type="text">
			<label for="textinput-4" class="ui-hidden-accessible">Penyebab sakit?</label>
			<input name="penyebab" id="textinput-4" placeholder="penyebab sakit" value="" type="text">
		    <label for="textinput-4" class="ui-hidden-accessible">Pada area mana gejala dirasakan ?</label>
			<input name="area" id="textinput-4" placeholder="area mana gejala dirasakan.." value="" type="text">
		    <label for="textinput-4" class="ui-hidden-accessible">Kapan gejala mulai muncul ?</label>
			<input name="kapan" id="textinput-4" placeholder="kapan gejala muncul.." value="" type="text">
           <label for="email">Gambar riwayat penyakit/diagnosa</label>
           <input type="file" name="gambar" >
			<label for="textinput-4" class="ui-hidden-accessible">Riwayat penyakit</label>
			<input name="dulu" id="textinput-4" placeholder="Riwayat penyakit" value="" type="text">
			<label for="textinput-4" class="ui-hidden-accessible">Riwayat Penyakit Keluarga</label>
			<input name="keluarga" id="textinput-4" placeholder="Riwayat penyakit Keluarga" value="" type="text">

         
            <input id="Submit" type="submit" value="Simpan" data-role="button" data-inline="true" data-theme="b" />
               

           <hr />
           
           </fieldset>
       </form>
	
		</div>

		</div>
		
