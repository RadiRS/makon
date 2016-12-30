  <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/bootstrap.min.css">
      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/font-awesome.min.css"/>

      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>asset/css/plugins/fullcalendar.min.css"/>

	<link href="<? echo base_url(); ?>asset/css/style.css" rel="stylesheet">
	<!-- end: Css -->

<div id="content">
    <div class="panel">
       
   </div> 
   <div class="col-md-12 padding-0">
       <div class="panel box-v3">
          <div class="panel-heading bg-white border-none">
           
              <h4>Laporan data user</h4>                
                    <p>
                        <a  href="<? echo base_url()?>data_user/add_user" type="button" class="btn btn-primary" >Tambah User</a>
                    
                    <input id="keyword" placeholder="keyword" />
                    <button id="searchBtn">Search</button>
                        <div id="result"></div>
                    </p>
        
                
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Hak Akses</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                        <?php
                        $no = 0;
                        foreach ($list as $data_user) {
                            $no++; ?>
                            <td><? echo $no; ?> </td>
                            <td><? echo $data_user->NAMA_LENGKAP_USER; ?> </td>
                            <td><? echo $data_user->EMAIL_USER; ?> </td>
                            <td><? echo $data_user->USERNAME; ?> </td>
                            <td><? echo $data_user->HAKAKSES_USER; ?> </td>
                            <td>
                                <a type="button" href="<? echo base_url()?>data_user/update_user/<? echo $data_user->ID_USER ?>" class="btn btn-primary" >Edit</a>
                                <a type="button" href="<? echo base_url()?>data_user/delete_user/<? echo $data_user->ID_USER ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini !')" >Hapus</a>       
                        </td>
                        </tr>
                        <?php } ?>              
                                            
                    </table>
           </div>
      </div>
   </div>
</div>



    <!-- start: Javascript -->
<!-- start: Javascript -->
    <script src="<? echo base_url(); ?>asset/js/jquery.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/jquery.ui.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
    <script src="<? echo base_url(); ?>asset/js/plugins/moment.min.js"></script>
    <script src="<? echo base_url(); ?>asset/js/plugins/fullcalendar.min.js"></script>
 
 <script src="<? echo base_url()?>asset/js/main.js"></script>

<script type="text/javascript" src="<? echo base_url('asset/js/jquery-3.1.1.min.js')?>"></script>
<script>
    //fungsi untuk mendapatkan isi artikel via AJAX
    function load_artikel(){
        var keyword = $('#keyword').val();
        $.ajax({
            'url' : '<? echo base_url()?>data_user/get'+keyword,
            'dataType' : 'json',
            'success' : function(response){
                $('#result').html(''); // kosongkan div
                for(i=0; i<response.length; i++){
                    searchajax = response[i];
                    $('#result').append('<h1>'+searchajax.judul+'</h1>');
                    $('#result').append('<p>'+searchajax.isi+'</p>');
                }
            }
        });
    }
    
    //event untuk memanggil load_artikel
    $(document).ready(load_artikel);
    $('#searchBtn').click(load_artikel);
    $('#keyword').keyup(load_artikel);
</script>