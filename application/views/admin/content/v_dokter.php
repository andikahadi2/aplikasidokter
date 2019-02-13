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

       		
				  
		<table class="table table-striped" border="1px" bordercolor="#CCCCCC">
			<tr>
			  <th width="5%"><div align="center">No</div></th>
			  <th width="19%"><div align="center">Nama</div></th>
			  <th width="19%"><div align="center">Foto</div></th>
			  <th width="19%"><div align="center">Alamat </div></th>
			  <th width="19%"><div align="center">Jenis Kelamin</div></th>
			  <th width="19%"><div align="center">Spesialis</div></th>
			  <th width="19%"><div align="center">Username</div></th>
			  <th width="19%"><div align="center">Ket</div></th>
			 
			</tr>
			<?php
				  $no = 1;
					foreach($semua_dokter->result_array() as $get){
				  ?>
			<tr>
              <td><?php echo $no; ?></td>
			  <td><?php echo $get['nama'];?></td>
			 <td><?php if(!empty($get['foto'])){?>
						<img src="<?php echo base_url('asset/gambar/'.$get['foto']); ?>" style="width:100px;" >
						<?php } ?></td>
              <td><?php echo $get['alamat']?></td>
			  <td><?php echo $get['jeniskelamin']?></td>
              <td><?php echo $get['spesialis']?></td>
			  <td><?php echo $get['username']?></td>
			  <td width="46%">
				<div align="center">
				<span class="hidden id"><?= $get['id']?></span>
					<a href="javascript:void(null)" Onclick="konfirmasi($(this))" class="btn btn-mini btn-success" >konfirmasi</a>
					<a href="javascript:hapus('<?php echo $get['id'] ?>');"><button class="btn btn-danger btn-sm" type="button">Hapus</button></i></a>
					
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
		location = "<?php echo base_url('admin1/dokter/hapus_dokter') ?>/"+x;
	}
}
function konfirmasi(x){
	if(confirm("Yakin ingin konfirmasi user?"))
	{
	var row=x.parent().parent().parent();
	var id	=row.find('.id').html();
	$.post('<?= base_url()."admin1/dokter/konfirmasi/"?>'+id).done(function(){
		row.remove();	
	});
	}
}
</script>