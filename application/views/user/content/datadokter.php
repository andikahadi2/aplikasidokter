	<div data-role="content">
	<div class="choice_list">

	<form action="#" method="get" data-ajax="false">
	 <input type="text" id="search" placeholder="Searching" name="search"/>
				 <input type="submit"   id="button" value="Cari" />
				 <ul id="result"></ul>
				 </form>
				 <br>
				 <?php foreach ($list as $row) { ?>
		<ul data-role="listview" data-insert="true" >
			<li>
		<a href="<?php echo base_url('user/datadokter/detail/'.$row["id"]);?>" data-transition="slidedown">
		<?php if(!empty($row['foto'])){?>
						<img src="<?php echo base_url('asset/gambar/'.$row['foto']); ?>" style="40%" >
		<?php } ?>
		<h4> <?php echo $row['nama'] ?></h4>
		<h5> <?php echo $row['spesialis'] ?></h5>
		
		<p class="ui-li-aside"><strong><?= substr($row['akhir'],0,20) ?></strong></p>
		</a>
			</li>
		
	</ul>
				 <?php }?>
	</div>
	</div>