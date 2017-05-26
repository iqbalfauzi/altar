</script>

<div class="container">
   <nav>
    <div class="nav-wrapper green darken-4">
      <a href="#" class="brand-logo left">  Surat Masuk</a>
      <form  method="post" action="<?php echo base_URL(); ?>index.php/admin/surat_masuk/cari">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        <li><a href="<?php echo base_URL(); ?>index.php/admin/surat_masuk/add" class="btn-info"><i class="material-icons right">add</i>Tambah Data</a></li></li>
        <li >
        	
			      
			        <div class="input-field" style="width: 180px; margin-right: 20px;">
			          <input id="search" type="search" name="q"  placeholder="Cari..." required>
			          
			         </div>
			      
			  
  		</li>
  		<li><button type="submit" class="btn-floating btn-large waves-effect waves-light blue" style="margin-right: 3px;"><i class="material-icons">search</i></button></li>
  		<li>   </li>
      </ul>
      </form>
    </div>
  </nav>


</div>
<div class="clearfix">



	
<!--	
<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Well done!</strong> You successfully read <a href="http://bootswatch.com/amelia/#" class="alert-link">this important alert message</a>.
</div>
	
<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Oh snap!</strong> <a href="http://bootswatch.com/amelia/#" class="alert-link">Change a few things up</a> and try submitting again.
</div>	
-->
<div class="container">
<div class="card-panel teal grey lighten-5">
<table class="highlight">
	<thead>
		<tr>
			<th width="10%">No. Agd/Kode</th>
			<th width="27%">Isi Ringkas, File</th>
			<th width="25%">Asal Surat</th>
			<th width="15%">Nomor, Tgl. Surat</th>
			<th width="23%">Aksi</th>
		</tr>
	</thead>
	
	<tbody>
		<?php 
		if (empty($data)) {
			echo "<tr><td colspan='5'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		} else {
			$no 	= ($this->uri->segment(4) + 1);
			foreach ($data as $b) {
		?>
		<tr>
			<td><?php echo $b->no_agenda."/".$b->kode;?></td>
			<td><?php echo $b->isi_ringkas."<br><b>File : </b><i><a href='".base_URL()."upload/surat_masuk/".$b->file."' target='_blank'>".$b->file."</a>"?></td>
			<td><?php echo $b->dari; ?></td>
			<td><?php echo $b->no_surat."<br><i>".tgl_jam_sql($b->tgl_surat)."</i>"?></td>
			
			<td class="ctr">
				<?php  
				if ($b->pengolah == $this->session->userdata('admin_id')) {
				?>
				<div class="btn-group">
					<a href="<?php echo base_URL()?>index.php/admin/surat_masuk/edt/<?php echo $b->id?>" class="btn-floating yellow btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit" ><i class="material-icons">edit</i></a>
					<a href="<?php echo base_URL()?>index.php/admin/surat_masuk/del/<?php echo $b->id?>" class="btn-floating red btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Hapus"><i class="material-icons" onclick="return confirm('Anda Yakin?')">delete</i></a>			
					<a href="<?php echo base_URL()?>index.php/admin/surat_disposisi/<?php echo $b->id?>" class="btn-floating green btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Disposisi"><i class="material-icons">attach_file</i></a>
					<a href="<?php echo base_URL()?>index.php/admin/disposisi_cetak/<?php echo $b->id?>" class="btn-floating blue btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lihat Disposisi"><i class="material-icons">print</i></a>
				</div>	
				<?php 
				} else {
				?>
				<div class="btn-group">
					<a href="<?php echo base_URL()?>index.php/admin/disposisi_cetak/<?php echo $b->id?>" class="btn-floating blue btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lihat Disposisi" target="_blank"><i class="material-icons">print</i></a>
				</div>	
				<?php 
				}
				?>
				
			</td>
		</tr>
		<?php 
			$no++;
			}
		}
		?>
	</tbody>
</table>
</div>
</div>
<center><ul class="pagination"><?php echo $pagi; ?></ul></center>
</div>
