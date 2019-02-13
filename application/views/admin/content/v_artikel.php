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
						<form class="form-horizontal" action="<?php echo base_url("admin1/artikel/tambah_a")?>" method="post" enctype="multipart/form-data">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Judul artikel</label>
									<div class="col-md-9">
									<input id="judul" name="judul" type="text" placeholder="Judul artikel" class="form-control">
									</div>
								</div>
							
								<!-- foto-->
							<div class="form-group">
                      	<label class="col-md-3 control-label" for="inputgambar">gambar</label>
						<div class="col-md-9">
						<input type="file" name="gambar" >
						</div>
						</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">isi artikel</label>
									<div class="col-md-9">
										<textarea class="form-control" id="isi" name="isi" placeholder="Please enter your message here..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">simpan</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
	
		<table class="table table-striped" border="1px" bordercolor="#CCCCCC">
			
			<tr>

			  <th width="5%"><div align="center">no</div></th>
			  <th width="19%"><div align="center">judul</div></th>
			  <th width="19%"><div align="center">foto</div></th>
			  <th width="19%"><div align="center">text </div></th>
			  <th width="10%"><div align="center">Ket</div></th>
			 
			</tr>
			<?php
				  $no = 1;
				  
					foreach($semua_artikel->result_array() as $get){
				  ?>
			<tr>
              <td><?php echo $no; ?></td>
			  <td><?php echo substr($get['judul'],0,30)?></td>
              <td><?php if(!empty($get['gambar'])){?>
						<img src="<?php echo base_url('asset/gambar/'.$get['gambar']); ?>" style="width:100px;" >
						<?php } ?></td>
			  <td><?php echo substr($get['text'],0,120)?></td>
			  <td width="10%">
				<div align="center">
					<a href="<?php echo base_url() .'admin1/artikel/edit_artikel/'.$get['id']; ?>"><button class="btn btn-mini btn-success" type="button">Edit</button></a>
					<a href="javascript:hapus('<?php echo $get['id'] ?>');"><button class="btn btn-mini btn-danger" type="button">Hapus</button></a>
					
				</div>
			  </td>
			</tr>
			<?php $no++; } ?>
		</table>
		</div>
		
		<script>
function hapus(x)
{
	if(confirm("Yakin ingin hapus data?"))
	{
		location = "<?php echo base_url('admin1/artikel/hapus_artikel') ?>/"+x;
	}
}
</script>