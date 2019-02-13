<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dokter</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dokter</h1>
			</div>
		</div><!--/.row-->
<div>
<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg>Form Daftar</div>
					<div class="panel-body">
						<form class="form-horizontal"  action="<?php echo base_url("admin1/dokter/edit_d")?>" method="post" enctype="multipart/form-data">
						
							<?php
				
					foreach($edit_dokter->result_array() as $get){
				  ?>
								<!-- Name input-->
								<input type="text" name="id" class="form-control hidden" value="<?php echo $get['id']; ?>"> 
								<div class="form-group">
								
									<label class="col-md-3 control-label" for="name">Nama</label>
									<div class="col-md-9">
									<input id="name" name="nama" type="text" placeholder="name" value= "<?php echo $get['nama']?>" class="form-control">
									</div>
								</div>
								<!-- foto-->
							<div class="form-group">
                      	<label class="col-md-3 control-label" for="inputgambar">Foto dokter</label>
						<div class="col-md-9">
						<?php if(!empty($get['foto'])){?>
						<img src="<?php echo base_url('asset/gambar/'.$get['foto']); ?>" style="width:200px;" >
						<?php } ?>
						<input type="file" name="foto" >
						</div>
						</div>
								<!-- Email input-->
								<div class="form-group">
								<label class="col-md-3 control-label" for="alamat">Alamat</label>
									<div class="col-md-9">
										<input id="alamat" name="alamat" type="text" placeholder="alamat" value="<?php echo $get['alamat']; ?>" class="form-control">
									</div>
								</div>
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="jkelamin">Jenis kelamin</label>
									<div class="col-md-9">
										<input id="jkelamin" name="jeniskelamin" type="text" placeholder="jeniskelamin" value="<?php echo $get['jeniskelamin']; ?>"class="form-control">
										
									</div>
								</div>
								<!-- spesialis input-->
								<div class="form-group">
								<label class="col-md-3 control-label" for="spesial">Spesialis</label>
									<div class="col-md-9">
										<input id="spesialis" name="spesialis" type="text" placeholder="spesialis" value="<?php echo $get['spesialis']; ?>"class="form-control">
									</div>
								</div>
								<!-- username-->
								<div class="form-group">
								<label class="col-md-3 control-label" for="username">username</label>
									<div class="col-md-9">
										<input id="username" name="username" type="text" placeholder="username" value="<?php echo $get['username']; ?>" class="form-control">
									</div>
								</div>
								<!-- password input-->
								<div class="form-group">
								<label class="col-md-3 control-label" for="password">Password</label>
									<div class="col-md-9">
										<input id="password" name="password" type="text" placeholder="password" value="<?php echo $get['password'];?>" class="form-control">
									</div>
								</div>																		
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input type="submit" class="btn btn-md btn-success pull-right" value="simpan">
										<a href="<?= base_url("admin1/dokter/")?>"><button class="btn btn-default btn-md pull-right btn btn-mini btn-danger" type="button">batal</button></a>
									</div>
								</div>
									<?php }?>
						
						
						</form>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
       		