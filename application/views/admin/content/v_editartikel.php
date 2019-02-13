<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Artikel</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Artikel</h1>
			</div>
		</div><!--/.row-->
<div>
<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Form tambah artikel</div>
					<div class="panel-body">
						<form class="form-horizontal" action="<?php echo base_url("admin1/artikel/editartikel")?>" method="post" enctype="multipart/form-data">
							<fieldset>
							<?php
					foreach($edit_artikel->result_array() as $get){
				  ?>
								<!-- Name input-->
								<input type="text" name="id" class="form-control hidden" value="<?php echo $get['id']; ?>"> 
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Judul artikel</label>
									<div class="col-md-9">
									<input id="judul" name="judul" type="text" placeholder="Judul artikel" value="<?php echo $get['judul'];?>" class="form-control">
									</div>
								</div>
							
								<!-- foto-->
							<div class="form-group">
                      	<label class="col-md-3 control-label" for="inputgambar">gambar</label>
						<div class="col-md-9">
						<?php if(!empty($get['gambar'])){?>
						<img src="<?php echo base_url('asset/gambar/'.$get['gambar']); ?>" style="width:100px;" >
						<?php } ?>
						<input type="file" name="gambar" >
						</div>
						</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">isi artikel</label>
									<div class="col-md-9">
										<textarea class="form-control" id="isi"  name="isi" placeholder="Please enter your message here..." rows="5"><?php echo $get['text']; ?></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">simpan</button>
									</div>
								</div>
								<?php }?>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->