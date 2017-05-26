<?php
$mode		= $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
	$act		= "act_edt";
	$idp		= $datpil->id;
	$no_agenda	= $datpil->no_agenda;
	$kode		= $datpil->kode;
	$dari		= $datpil->tujuan;
	$no_surat	= $datpil->no_surat;
	$tgl_surat	= $datpil->tgl_surat;
	$uraian		= $datpil->isi_ringkas;
	$ket		= $datpil->keterangan;
	
} else {
	$act		= "act_add";
	$idp		= "";
	$no_agenda	= gli("t_surat_keluar", "no_agenda", 4);
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
    <div class="nav-wrapper green darken-4">
      <a href="#" class="brand-logo center">Surat Keluar</a>
      
    </div>
  </nav>
</div>
<br>
  <div class="container">
  	<div class="card-panel grey lighten-5">
	<form action="<?php echo base_URL()?>index.php/admin/surat_keluar/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="col s12">
	
	<input type="hidden" name="idp" value="<?php echo $idp; ?>">
	
	<div class="row">
		<div class="input-field col s6">
			<input type="text" autofocus tabindex="1" name="no_agenda" required value="<?php echo $no_agenda; ?>" class="validate">
			<label>No. Agenda</label>
		</div>
		<div class="input-field col s6">
			<input type="text" tabindex="2" name="dari" required value="<?php echo $dari; ?>" id="dari" class="validate">
			<label>Tujuan</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s6">
			<input type="text" tabindex="3" name="no_surat" required value="<?php echo $no_surat; ?>" class="validate">
			<label>Nomor Surat</label>
		</div>
		<div class="input-field col s6">
			Tanggal Surat: 
			<div class="input-field inline">
			<input type="text" name="tgl_surat" required value="<?php echo $tgl_surat; ?>" id="tgl_surat" class="datepicker">
			</div>
		</div>
	</div>

	<div class="row">
			<div class="input-field col s6">
			Kode Klasifikasi :  
			<div class="input-field inline" style="width: 400px;">
			<select name="kode" id="kode_surat" >
					<option value="" disabled selected>Pilih Divisi</option>   
					<?php foreach ($data->result() as $row) {?>
					<option value="<?php echo $row->Divisi ?>"><?php echo $row->Divisi ?></option>
					<?php } ?>
				</select>
				
				<select name="kode" id="kode" >   
					<option value="" disabled selected>Pilih Kode</option>   
				</select>
				
				</div>
		</div>
		<div class="file-field input-field col s6">
		      <div class="btn">
		        <span>File</span>
		        <input type="file" name="file_surat">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text">
		      </div>
		    </div>
	
	</div>

	<div class="row">
		<div class="input-field col s6">
			<input type="text" name="ket" value="<?php echo $ket; ?>" class="validate">
			<label>Keterangan</label>
		</div>
			
			
		
	</div>
	

	<div class="row">
		<div class="input-field col s12">
          <textarea name="uraian" id="textarea1" class="materialize-textarea"><?php echo $uraian; ?></textarea>
          <label for="textarea1">Textarea</label>
        </div>
	</div>
	<div class="row">
		<button type="submit" class="btn" ><i class="material-icons right">add</i>Simpan</button>
		<a href="<?php echo base_URL()?>index.php/admin/surat_keluar" tabindex="10" class="btn"><i class="material-icons right">close</i> Kembali</a>
	</div>

	
	
	
	</form>
	</div>
	</div>
