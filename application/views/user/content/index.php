
<div class="ui-content ui-page-active" data-ajax="false" role="main">

		<?php foreach ($pesan as $row) { ?>
<div data-url="other-page" id="other-page" >
			
			<ul class="ui-group-theme-a ui-listview" data-role="listview" data-theme="a" data-dividertheme="b">
				<li class="">
				<a class="ui-btn ui-btn-icon-right ui-icon-carat-r" rel="external"  href="<?= base_url('user/index/tampil_index/'.$row->id_penerima); ?>">
					<img src="<?php echo base_url('asset/gambar/'.$row->foto); ?>"  >
					<h3><?= $row->nama; ?></h3>
					<p class="ui-li-aside"><strong><?= substr($row->waktu,0,5) ?></strong></p>
				</a></li>
				
			</ul>
		</div>
		<?php }?>


	</div>
	<script type="text/javascript">
	
	</script>