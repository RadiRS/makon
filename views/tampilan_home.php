<!DOCTYPE html>
<html lang="en">
<head>

    <title>Home</title> 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/bootstrap.min.css">
      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/font-awesome.min.css"/>
	<link href="<? echo base_url(); ?>asset/css/style.css" rel="stylesheet">
	<!-- end: Css -->
	<link rel="shortcut icon" href="<? echo base_url(); ?>asset/img/logo.png">
</head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="navbar-header" style="width:100%;">              
                <a href="index.html" class="navbar-brand"> 
                 <b>Manajemen Kontrakan</b>
                </a>
            </div>
        </nav>
      <!-- end: Header -->
      

      <div class="container-fluid mimin-wrapper"> 
          <!-- start:Left Menu -->
    <?php $this->load->view('tampilan_menu'); ?>
          <!-- end: Left Menu -->
          
      </div>

      <div id="content">
            <div class="col-md-12 padding-0">
              <div class="col-md-12 padding-0">
                <div class="col-md-12 padding-0">
                  <div class="panel box-shadow-none content-header">
                      <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft"><? echo $judul; ?></h3>
                            <p class="animated fadeInDown" style="line-height:.4;">
                              <? echo $sub_judul;  $namauser = $this->session->userdata('nama_user'); 
                                echo $namauser;
                              ?>
                            </p>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
                

      <!-- start: content -->
    <?php $this->load->view($content);?>        
      <!-- end: content -->  

    <!-- start: Javascript -->
    <script src="<? echo base_url(); ?>asset/js/jquery.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/jquery.ui.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/bootstrap.min.js"></script>   

    <!-- custom -->
     <script src="<? echo base_url(); ?>asset/js/main.js"></script>
     
  <!-- end: Javascript -->
  </body>
</html>