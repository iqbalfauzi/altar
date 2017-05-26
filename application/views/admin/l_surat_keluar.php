<div class="container">
   <nav>
    <div class="nav-wrapper green darken-4">
      <a href="#" class="brand-logo left">Surat Keluar</a>
      <form  method="post" action="<?php echo base_URL(); ?>index.php/admin/surat_keluar/cari">">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        <li><a href="<?php echo base_URL(); ?>index.php/admin/surat_keluar/add"><i class="material-icons right">add</i>Tambah Data</a></li></li>
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


<?php echo $this->session->flashdata("k");?>
	
<div class="container">
	<div class="card-panel grey lighten-5">
		<table class="table highlight">
	<thead>
		<tr>
			<th width="10%">No. Agd/Kode</th>
			<th width="30%">Isi Ringkas, File</th>
			<th width="25%">Tujuan Surat</th>
			<th width="20%">Nomor, Tgl. Surat</th>
			<th width="15%">Aksi</th>
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
			<td><?php echo $b->isi_ringkas."<br><b>File : </b><i><a href='".base_URL()."upload/surat_keluar/".$b->file."' target='_blank'>".$b->file."</a>"?></td>
			<td><?php echo $b->tujuan?></td>
			<td><?php echo $b->no_surat."<br><i>".tgl_jam_sql($b->tgl_surat)."</i>"?></td>
			<td class="ctr">
				<?php  
				if ($b->pengolah == $this->session->userdata('admin_id')) {
				?>
				<div class="btn-group">
					<a href="<?php echo base_URL()?>index.php/admin/surat_keluar/edt/<?php echo $b->id?>" class="btn-floating yellow btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit"><i class="material-icons">edit</i></a>
					<a href="<?php echo base_URL()?>index.php/admin/surat_keluar/del/<?php echo $b->id?>" class="btn-floating red btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Hapus" onclick="return confirm('Anda Yakin..?')">
					<i class="material-icons">delete</i></a>
				</div>	
				<?php } else { ?>
				<div class="label label-danger">No Action</div>
				<?php } ?>
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
