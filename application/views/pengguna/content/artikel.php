<div role="main" class="ui-content jqm-content">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/from.css">
	<!--coba -->
	
	<div class="ui-corner-all custom-corners">
	<form action="#" method="get" data-ajax="false">
	 <input type="text" id="search" placeholder="Searching" name="search"/>
				 <input type="submit"   id="button" value="Cari" />
				 <ul id="result"></ul>
				 </form>	
	<?php foreach ($list as $row) { ?>
	
	  <ul class="ui-group-theme-a ui-listview" data-role="listview" data-theme="a" data-dividertheme="b">
				<li class="">
				<a class="ui-btn ui-btn-icon-right ui-icon-carat-r" rel="external"  href="<?php echo base_url('pengguna/artikel/detail/'.$row["id"]);?>">
					<img src="<?php echo base_url('asset/gambar/'.$row['gambar']); ?>" style="width:200px" >
					<h3><?= $row['judul'] ?></h3>
				
					<p class="ui-li-aside"><strong><?= $row['tanggal'] ?></strong></p>
				</a></li>
				
			</ul>
	<?php }?>


</div>
</div>