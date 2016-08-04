<!DOCTYPE html>
<html>
<!--  ini head-->
<?php $this->load->view('admin/head'); ?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php $this->load->view('admin/header'); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php $this->load->view('admin/menu'); ?>
      
      <div id="id_load" class="loader"></div>
      <div class="content-wrapper" id="isi">
        <?php $this->load->view('admin/beranda'); ?>
      </div>
      

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrsapper -->

    
  </body>
  <script>
    function buka_halaman(a,angka){
        var dir =a;
        $("#id_load").show();
        $(".treeview").removeClass("active");
        $("#treeview"+angka).addClass("active");
        
        //alert('ijdj');
        $.ajax({ 
            url: dir,
            success: function(response){
  	    $('#isi').html(response);
            $("#id_load").hide();
        
  	 }, 
  	 error: function(response){ 
  	 	alert('salah'+response.toString());
              //  $('#status').html(response);
              $("#id_load").hide();
  	  } 
  	}); 
    }
</script>
</html>