<div data-role="header">
		<h1>Aplikasi Konsultasi Dokter</h1>
		<a href="#search" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-left ui-icon-user">login</a>
		<div data-role="navbar">
			<ul>
				<li><a href="<?php echo base_url();?>" >Forum</a></li>
				<li><a href="<?php echo base_url();?>pengguna/dokter">Dokter</a></li>
				<li><a href="<?php echo base_url();?>pengguna/artikel"  >Artikel</a></li>
			</ul>
		</div>
		
		
		<!-- pop up-->
		<div data-role="panel" id="panel-overlay" data-display="overlay">
		<ul data-role="listview">
			<li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
		<li><a href="#">
		<img src="gambar/album-ws.jpg">
			<h2>Warning</h2>
			<p>Hot Chip</p></a>
				<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
			</li>
			<li><a href="#">List item</a></li>
		</ul>
		<br><br>
		<button class="ui-btn ui-corner-all ui-shadow">Button</button>
	</div>
		<div data-role="panel" data-position="left" id="search" data-display="overlay">
		<ul data-role="listview">
		<li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
		
		<div  class="ui-body ui-body-a ui-corner-all" style="margin-bottom:1em;">
		<a href="<?= base_url(); ?>user/login" class="ui-btn ui-corner-all ui-shadow">Member</a>
		<br>
		<a href="<?= base_url();?>dokter/login" class="ui-btn ui-corner-all ui-shadow">Dokter</a>
		</div>
		</ul>
	</div>
		
	</div>