<div class="container">
	<nav>
    <div class="nav-wrapper green accent-4">
      <a href="#" class="brand-logo center">Cetak Agenda</a>
      
    </div>
  </nav>
</div><!-- /.navbar -->

<br>


<div class="well">
<div class="container">
<div class="card-panel teal grey lighten-5">
<form action="<?php echo base_URL(); ?>index.php/admin/cetak_agenda" target="blank" method="post" accept-charset="utf-8" enctype="multipart/form-data">	
	<input type="hidden" name="tipe" value="<?php echo $this->uri->segment(2); ?>">

	<div class="row">
		<div class="col s6">
          Tanggal Surat:
          <div class="input-field inline">
            <input type="text" class="datepicker" name="tgl_start" required>
            
          </div>
        </div>
	</div>
	<div class="row">
		<div class="col s6">
          Tanggal Surat:
          <div class="input-field inline">
            <input type="text" class="datepicker" name="tgl_end" required>
            
          </div>
        </div>
	</div>
	
	<button type="submit" class="btn waves-effect waves-light"><i class="material-icons">print</i> Cetak</button>
	<a href="<?php echo base_URL(); ?>index.php/admin" class="btn waves-effect waves-light"><i class="btn waves-effect waves-light"></i> Kembali</a>
	</td></tr>
	
</form>
</div>
</div>

<script type="text/javascript">
$(function() {
	$( "#tgl_start" ).pickadate({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});
	$( "#tgl_end" ).pickadate({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});
});
</script>
