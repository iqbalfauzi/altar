<div class="clearfix">

<div class="container">
   <nav>
    <div class="nav-wrapper green darken-4">
      <a href="#" class="brand-logo left">Klasifikasi Surat</a>
      <form  method="post" action="<?php echo base_URL(); ?>index.php/admin/surat_keluar/cari">">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        
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
<table class="highlight">
	<thead>
		<tr>
			<th width="10%">Kode</th>
			<th width="20%">Nama</th>
			<th width="60%">Bobot</th>
			<th width="10%">Aksi</th>
		</tr>
	</thead>
	
	<tbody>
		<?php 
		if (empty($data)) {
			echo "<tr><td colspan='4'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		} else {
			$no 	= ($this->uri->segment(4) + 1);
			foreach ($data as $b) {
		?>
		<tr>
			<td><?php echo $b->kode; ?></td>
			<td><?php echo $b->nama; ?></td>
			<td><?php echo $b->uraian; ?></td>
			
			<?php 
			if ($this->session->userdata('admin_level') == "Super Admin") {
			?>
			<td class="ctr">
				<div class="btn-group">
					<a href="<?php echo base_URL(); ?>index.php/admin/klas_surat/edit/<?php echo $b->id; ?>" class="btn btn-success btn-sm"><i class="icon-edit icon-white"> </i> Edit</a>
				</div>					
			</td>
			<?php 
			} else {
				echo "<td class='ctr'> -- </td>";
			}
			?>
		</tr>
		<?php 
			$no++;
			}
		}
		?>
	</tbody>
</table>
</div>
<center><ul class="pagination"><?php echo $pagi; ?></ul></center>
</div>
