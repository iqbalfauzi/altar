<div class="clearfix">
<div class="container">
   <nav>
    <div class="nav-wrapper green darken-4">
      <a href="#" class="brand-logo left">  Manage Admin</a>
      <form  method="post" action="<?php echo base_URL(); ?>index.php/admin/manage_admin/cari">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        <li><a href="<?php echo base_URL(); ?>index.php/admin/manage_admin/add" class="btn-info"><i class="material-icons right">add</i>Tambah Data</a></li></li>
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
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%">ID</th>
			<th width="30%">Username</th>
			<th width="30%">Nama, NIP</th>
			<th width="20%">Level</th>
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
			<td class="ctr"><?php echo $b->id;?></td>
			<td><?php echo $b->username?></td>
			<td><?php echo $b->nama."<br>".$b->nip?></td>
			<td><?php echo $b->level?></td>
			<td class="ctr">
				<div class="btn-group">
					<a href="<?php echo base_URL(); ?>index.php/admin/manage_admin/edt/<?php echo $b->id; ?>" class="btn-floating yellow btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit"><i class="material-icons">edit</i></a>
					<?php if ($b->level != 'Admin'){ ?>
					<a href="<?php echo base_URL(); ?>index.php/admin/manage_admin/del/<?php echo $b->id?>" class="btn-floating red btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Hapus" onclick="return confirm('Anda Yakin..?')"><i class="material-icons">delete</i></a>
					<?php } ?>			
				</div>					
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
