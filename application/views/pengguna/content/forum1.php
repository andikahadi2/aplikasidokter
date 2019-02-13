<div role="main" class="ui-content jqm-content">
<div data-demo-html="true">
<?php
					foreach($grup as $grup){?>
<h3 class="ui-bar ui-bar-a"><?= $grup->nama_room?></h3>
</div>
<div id="ui-body-test" class="ui-body ui-body-a ui-corner-all" style="margin-bottom:1em;">
		
		<div class="history">
		
		</div>
		
		</div>
		</div>
					<?php } ?>
		 <?php
					$id		=($this->uri->segment(3)=="") ? 0:$this->uri->segment(3);
					$limit	=($this->uri->segment(4)=="") ? 10:$this->uri->segment(4);
					?>
<script type="text/javascript">
var id='<?= $id;?>'; var limit=<?= $limit;?>;
$(document).ready(function(){
	setInterval(_reloadPesan,2000);
});
function kirim(){
	
	$.ajax({
		url:'<?= base_url("baru/kirim")?>/'+id,
							dataType:'json',
							type:'post',
							data:$('form').serialize(),
							success:function(data){
								_reloadPesan();
								$('textarea').val('');
							}
	});
	//var pesan=$('textarea[name=textarea2]').val();
	
}
	function _reloadPesan(){
		
						$.ajax({
							url:'<?= base_url("baru/reload_pesan")?>/'+id+'/'+limit,
							dataType:'json',
							success:function(data){
								$('.textarea2').html('');
								$('.history').html('');
								$.each(data,function(index,value){
									var gambar = "";
									if(value.gambar!=""){gambar="<img src='<?= base_url()?>asset/gambar/"+value.gambar+"' style='width:100px;' >"}
							var pesan="<div  class='ui-body ui-body-a ui-corner-all' style='margin-bottom:1em;'><div class='ui-body ui-body-a ui-corner-all' ><img style='width:50px;height:50px;' src='<?= base_url()?>asset/gambar/"+value.foto+"'> "+value.nama+" " +value.waktu+"  "+value.tanggal+"<a href='javascript:hapus("+value.id_obrolan+")'class='ui-btn ui-icon-delete ui-btn-icon-notext' style='width:20px;height:20px;'></a></div>"+gambar+"<div>"+value.pesan+ "</div> "+"</div>";
									$('.history').prepend(pesan);
								});
								
								
							}
						});

					}
	function hapus(x)
			{
				if(confirm("Yakin ingin hapus pesan?"))
				{
					location = "<?php echo base_url('user/grup/leaveRoom') ?>/"+x;
				}
			}
				
</script>