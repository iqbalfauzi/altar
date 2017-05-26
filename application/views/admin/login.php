
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>.:: ALTAR ::.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>aset/materialize/css/material.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>aset/materialize/css/materialize.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
  

    <script src="<?php echo base_url(); ?>aset/materialize/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>aset/materialize/js/materialize.min.js"></script>
    
  <body style="">
    
  <div class="navbar-fixed">
     <nav>
     
    <div class="nav-wrapper green darken-4">
      <div class="container">
      <a href="#" class="brand-logo center"><strong style="font-family: verdana; text-align: center">Aplikasi Manajemen Surat</strong></a>
      
    </div>
    </div>
  </nav>
  </div>

	<!--<?php 
	$q_instansi	= $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
	?>-->
    <div class="container">
	
	<br><br>

	<div class="container-fluid" style="margin-top: 30px">
	
   <!--   <div class="row-fluid">
		<div style="width: 400px; margin: 0 auto">
			<div class="well well-sm">
				<img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="display: inline; float: left; margin-right: 20px; width: 80px; height: 80px">
				<h3 style="margin: 5px 0 0.4em 0; font-size: 21px; color: #000; font-weight: bold"><?php echo $q_instansi->nama; ?></h3>
				<div style="color: #000; font-size: 13px" class="clearfix"><?php echo $q_instansi->alamat; ?></div>
			 </div>
		</div>-->
		
		<div class="well" style="width: 400px; margin: 20px auto; border: solid 1px #d9d9d9; padding: 30px 20px; border-radius: 8px">
		<form action="<?php echo base_URL(); ?>index.php/admin/do_login" method="post">
		<legend>Login Admin</legend>	
		<?php echo $this->session->flashdata("k"); ?>
		  
		  <div class="row">
	        <div class="input-field">
	          <input id="email" type="text" name="u" class="validate">
	          <label for="email">Username</label>
	        </div>
	      </div>
		  
		  <div class="row">
	        <div class="input-field">
	          <input id="password" name="p" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
	      </div>
	      <div class="row center-align">
	      	<input type="submit" class="btn" value="Login">
	      </div>
		
		
		
		</form>
		</div><!--/span-->
      </div><!--/row-->

    </div><!--/.fluid-container-->
	
	<script type="text/javascript">
	$(document).ready(function(){
		$(" #alert" ).fadeOut(6000);
	});
	</script>
	  
    </div>
  
</body></html>

