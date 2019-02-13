	<div data-role="content">
	<div class="ui-grid-a">
		<div class="ui-block-a">
		<h5>No induk dokter</h5>
		<p><?php echo $list['nid'] ?></p>
			<hr>
		<h5>Jenis Kelamin </h5>
		<p><?php echo $list['jeniskelamin'] ?></p>
			<hr>
			<h5>Alamat</h5>
		<p><?php echo $list['alamat'] ?></p>
		<hr>
		<h5>Tempat praktek</h5>
		<p><?php echo $list['tmp_praktek'] ?></p>
		<hr>
		<h5>Riwayat pendidikan</h5>
		<p>1.<?php echo $list['pndk_sd'] ?></p>
		<p>2.<?php echo $list['pndk_smp'] ?></p>
		<p>3.<?php echo $list['pndk_sma'] ?></p>
		<p>4.<?php echo $list['pndk_kuliah'] ?></p>
		<hr>
		</div>	
	<div class="ui-block-b">
	<h4><?php echo $list['nama'] ?></h4>
	 <?php if(!empty($list['foto'])){?>
						<img src="<?php echo base_url('asset/gambar/'.$list['foto']); ?>" style="width:150px" >
		<?php } ?>
	<h3>Spesialis</h3>
		<p> <?php echo $list['spesialis'] ?></p>
	
	</div>
	</div>
	<a href="<?= base_url('user/datadokter/pesandokter/'.$list["id"]);?>" data-role="button" data-icon="mail">
	pesan
	</a>
	
	</div>