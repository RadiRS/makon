 <div id="content">     
   <div class="col-md-12 padding-0">
       <div class="panel box-v3">
          <div class="panel-heading bg-white border-none">
              <h4>Data baru</h4>
              <form method="POST" action="<?php echo base_url();?>data_user/insert_action">
              <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Nama</label>
                            <p>
                              <div class="col-sm-10"><input type="text" name="nama" class="form-control"></div></p>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Email</label>
                              <div class="col-sm-10"><input type="text" name="email" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Username</label>
                              <div class="col-sm-10"><input type="text" name="username" class="form-control"></div>
                            </div> 
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Password</label>
                              <div class="col-sm-10"><input type="password" name="password" class="form-control"></div>
                            </div>                           
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Hak Akses</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <select class="form-control" name="hak_akses">
                                    <option>Admin</option>
                                    <option>Guest</option>
                                  </select>
                                </div>
                              </div>
                         

                          
                          </div>
                        </div>
                               <p>
                        <input type="submit" name="btn_simpan" class="btn btn-primary" value="Simpan">
                    </p>
                      </div>
                    </div>
		
		</form>
                          

         </div>
      </div>
   </div>
</div>





























<!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/bootstrap.min.css">
      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/font-awesome.min.css"/>

      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/fullcalendar.min.css"/>

	<link href="<? echo base_url(); ?>asset/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<? echo base_url(); ?>asset/img/logo.png">
	<!-- end: Css -->




    <!-- start: Javascript -->
<!-- start: Javascript -->
    <script src="<? echo base_url(); ?>asset/js/jquery.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/jquery.ui.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
    <script src="<? echo base_url(); ?>asset/js/plugins/moment.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/plugins/fullcalendar.min.js"></script>

