<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="<?php echo base_url(); ?>aset/materialize/css/material.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>aset/materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <!--dropdown -->
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="<?php echo base_url(); ?>index.php/admin/klas_surat">Klasifikasi Surat</a></li>
        
      </ul>

      <ul id="dropdown2" class="dropdown-content">
        <li><a href="<?php echo base_url(); ?>index.php/admin/surat_masuk">Surat Masuk</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/surat_keluar">Surat Keluar</a></li>
      </ul>

      <ul id="dropdown3" class="dropdown-content">
        <li><a href="<?php echo base_url(); ?>index.php/admin/agenda_surat_masuk">Surat Masuk</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/agenda_surat_keluar">Surat Keluar</a></li>
      </ul>

      <ul id="dropdown4" class="dropdown-content">
        <?php if ($this->session->userdata('admin_level') == "Admin") { ?>
        <li><a href="<?php echo base_url(); ?>index.php/admin/manage_admin">Manajemen</a></li>
        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/pengguna">Instansi</a></li>-->
                <?php } ?>
        <li><a href="<?php echo base_url(); ?>index.php/admin/passwod">Ganti Password</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/logout">Logout</a></li>
      </ul>
      <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper green darken-4">
         <div class="container">
          
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href=""><b>ALTAR</b></a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin">Beranda</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Klasifikasi Surat<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Persuratan<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Agenda Surat<i class="material-icons right">arrow_drop_down</i></a></li>
            
          </ul>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#!" class="dropdown-button" data-activates="dropdown4">
            <i class="material-icons right">supervisor_account</i>
            <?php echo $this->session->userdata('admin_nama'); ?> <span class="caret"></span></a></li>
          </ul>
         </div> 
        </div>
      </nav>
      </div>  
      </div>
      <?php 
      $q_instansi = $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
      ?>
      <br>
     <!-- <div class="container">
         <div class="card panel grey lighten-5">
           <div class="row">
            <div class="" style="padding: 15px 15px 0 15px;">
              <div class="well well-sm">
                <img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="display: inline; float: left; margin-right: 20px; width: 100px; height: 100px">
                  <h2 style="margin: 15px 0 10px 0; color: #000;"><?php echo $q_instansi->nama; ?></h2>
                  <div style="color: #000; font-size: 16px; font-family: Tahoma" class="clearfix"><b>Alamat : <?php echo $q_instansi->alamat; ?></b></div>
               </div>
            </div>
          </div>
         </div>
      </div>-->

      <?php $this->load->view('admin/'.$page); ?>

      <footer class="page-footer fixed transparent">
        <div class="footer-copyright green darken-4">
            <div class="container">
            © 2017 Waktu Eksekusi : {elapsed_time}, Penggunaan Memori : {memory_usage}
            
            </div>
          </div>
      </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="<?php echo base_url(); ?>aset/materialize/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>aset/materialize/js/materialize.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
            Materialize.updateTextFields();
            $('.tooltipped').tooltip({delay: 50});
            $('select').material_select();
            $(".dropdown-button").dropdown();
            $('.datepicker').pickadate({
            format: 'yy-mm-dd',
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
            });
          });
      </script>
    </body>
  </html>
        