

<?php
$mode		= $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
	$act		= "act_edt";
	$idp		= $datpil->id;
	$no_agenda	= $datpil->no_agenda;
	$indek_berkas= $datpil->indek_berkas;
	$kode		= $datpil->kode;
	$dari		= $datpil->dari;
	$no_surat	= $datpil->no_surat;
	$tgl_surat	= $datpil->tgl_surat;
	$uraian		= $datpil->isi_ringkas;
	$ket		= $datpil->keterangan;
	
} else {
	$act		= "act_add";
	$idp		= "";
	$no_agenda	= gli("t_surat_masuk", "no_agenda", 4);
	$indek_berkas="";
	$kode		= "";
	$dari		= "";
	$no_surat	= "";
	$tgl_surat	= "";
	$uraian		= "";
	$ket		= "";
}
?>
<div class="container">
<nav>
    <div class="nav-wrapper green accent-4">
      <a href="#" class="brand-logo center">Surat Masuk</a>
      
    </div>
  </nav>
</div>
<br>

  <div class="container">
  <div class="card-panel teal grey lighten-5">		
	<form action="<?php echo base_URL(); ?>index.php/admin/surat_masuk/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="col s12">
	
	<input type="hidden" name="idp" value="<?php echo $idp; ?>">
	
	<div class="row">
		        <div class="input-field col s6">
		          <input type="text" name="no_agenda" class="validate" value="<?php echo $no_agenda; ?>">
		          <label>No. Agenda</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="dari" type="text" class="validate" required value="<?php echo $dari; ?>" id="dari">
		          <label for="last_name">Dari</label>
		        </div>
		      </div>
		      
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="no_surat" type="text" class="validate" required value="<?php echo $no_surat; ?>">
		          <label>Nomor Surat</label>
		        </div>
		       	 <div class="input-field col s6">
		           
		          <select name="sifat">
				      <option value="disabled selected"> - Sifat - </option>
				      <option value="Sangat Segera">Sangat Segera</option>
				      <option value="Segera">Segera</option>
				      <option value="Biasa">Biasa</option>
				    </select>
				    <label>Sifat</label>
		        </div>
		      </div>

		      <div class="row">
		      	 <div class="col s6">
		          Tanggal Surat:
		          <div class="input-field inline">
		            <input type="text" class="datepicker" name="tgl_surat" value="<?php echo $tgl_surat; ?>">
		            
		          </div>
		        </div>
		         <div class="col s6">
		          indeks berkas
		          <div class="input-field inline">
		            <input type="text" name="indek_berkas" value="<?php echo $indek_berkas; ?>">
		            
		          </div>
		        </div>
		      </div>
		      

			  
		      
		      <div class="row">
		        <div class="input-field col s12">
		          <textarea id="textarea1" class="materialize-textarea" name="uraian"><?php echo $uraian; ?></textarea>
		          <label for="textarea1">Perihal</label>
		        </div>

		      </div>
		     <div>
			    <div class="file-field input-field">
		     		<div class="btn">
		        		<span>File</span>
		        		<input type="file" name="file_surat">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text">
		      </div>
		    </div>
		     </div> 
			  <button class="btn waves-effect waves-light" type="submit" name="action">Simpan
			    <i class="material-icons right">send</i>
			  </button>
			  <button class="btn waves-effect waves-light" href="<?php echo base_URL(); ?>index.php/admin/surat_masuk">Kembali
			   
			  </button>
		
	
	</form>
	</div>
  </div>	
