<!DOCTYPE html>
<html lang="en">
<head>

  <title>Halaman Login</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="<? echo base_url(); ?>asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<? echo base_url(); ?>asset/img/logo.png">

<script type="text/javascript">
  public function cekform()
  {
      if (!$("#username".val)) {
          alert('Maaf nama user tidak boleh kosong');
          $("#username").focus();
          return false;
      }
  }   if (!$("#password".val)) {
          alert('Maaf password tidak boleh kosong');
          $("#username").focus();
          return false;
      }
</script>
  
</head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form class="form-signin" method="POST" action="<?echo base_url();?>login/getlogin">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">MK</h1>                
                  <p class="element-name">Manajemen Kontrakan</p>
                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="username" id="username" required>
                    <span class="bar"></span>
                    <label>Nama User</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" name="password" id="password" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                    <?php                     
                      $info = $this->session->flashdata('info');
                      if (!empty($info)) {
                           echo $info;
                      }             
                    ?>                  
                  <input type="submit" class="btn col-md-12" value="Masuk"/>
              </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="<? echo base_url(); ?>asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="<? echo base_url(); ?>asset/js/plugins/moment.min.js"></script>
      <script src="<? echo base_url(); ?>asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="<? echo base_url(); ?>asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>  