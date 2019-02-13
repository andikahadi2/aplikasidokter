
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">user</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">user</h1>
			</div>
		</div><!--/.row-->
		 
<table class="table table-striped" border="1px" bordercolor="#CCCCCC">
			<tr>
			  <th width="19%"><div align="center">No induk ktp</div></th>
			  <th width="19%"><div align="center">Nama Lengkap</div></th>
			  <th width="19%"><div align="center">Foto </div></th>
			  <th width="19%"><div align="center">Jenis kelamin</div></th>
			  <th width="19%"><div align="center">Alamat</div></th>
			  <th width="19%"><div align="center">Username</div></th>
			  <th width="19%"><div align="center">Ket</div></th>
			</tr>
			<?php
                            foreach($member as $member){
								?> 
			<tr>
              
			  <td><?= $member->nik ?></td>
			  <td><?= $member->nama?></td>
			  <td><img src="<?= base_url("asset/gambar/".$member->foto)?>" width="100%"  class="img-polaroid"/></td>
              <td><?= $member->jeniskelamin ?></td>
			  <td><?= $member->alamat ?></td>
              <td><?= $member->username ?></td>
			 

			 <td width="46%">
			   <span class="hidden id"><?= $member->id?></span>
				<div align="center">
					<a href="javascript:void(null)" Onclick="konfirmasi($(this))" class="btn btn-mini btn-success" >konfirmasi</a>
					<a href="javascript:void(null)" Onclick="hapus($(this))" class="btn btn-mini btn-danger">hapus</a>
					
				</div>
			  </td>
			</tr>
				<?php }?>
			
		</table>
						
							 <center>
                        <?= $page?>
                        </center>
						<script type="text/javascript">
function hapus(x){
	if(confirm("Yakin ingin hapus data?"))
	{
	var row=x.parent().parent().parent();
	var id	=row.find('.id').html();
	$.post('<?= base_url()."admin1/user/hapus/"?>'+id).done(function(){
		row.remove();	
	});
	}
}
function konfirmasi(x){
	if(confirm("Yakin ingin konfirmasi user?"))
	{
	var row=x.parent().parent().parent();
	var id	=row.find('.id').html();
	$.post('<?= base_url()."admin1/user/konfirmasi/"?>'+id).done(function(){
		row.remove();	
	});
	}
}
</script>
