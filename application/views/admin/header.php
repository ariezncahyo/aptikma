<header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>AS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Aptikma Studio</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src='<?php echo base_url(); ?>assets/admin/img/defaultpp.png' class='user-image' alt='User Image'>
                  <span class='hidden-xs'><?php echo $this->session->fullname; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/admin/img/defaultpp.png" class="img-circle" alt="User Image">
                    <p><?php echo $this->session->fullname; ?></p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <button onclick="showEditProfile('<?php echo $this->session->id_user; ?>')" data-toggle="tooltip" class="btn btn-default btn-flat">Ubah Profil</button>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url().'admin/login/logout/'?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>

                <!--<a href="<?php echo base_url().'admin/login/logout/'?>" class="dropdown-toggle">
                   <i title="Log out" class="fa fa-power-off"></i>
                 
                </a>-->
               
              </li>
              
              
            </ul>
          </div>
        </nav>
      </header>

<div class="modal fade" id="id_modal_profile" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Profile</h4>
            </div>
            <form id="form_model_profile" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Full Name</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id_user_p">
                            <input type="text" class="form-control" id="fullname_p" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Username</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="username_p" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password_p" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email_p" required>
                        </div>
                    </div>                                        
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Description</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="description_p">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Photo</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="photo_p">
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="modal-footer">
                <img id="load_form_modal" style="display: none;" src="<?php echo base_url().'assets/admin/img/loading.gif'; ?>">
                <span id="notif_form_modal" style="display: none;"></span>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
function showEditProfile(i){
  $("#id_user_p").val(<?php echo json_encode($this->session->id_user); ?>);
  $("#fullname_p").val(<?php echo json_encode($this->session->fullname); ?>);
  $("#username_p").val(<?php echo json_encode($this->session->username); ?>);
  $("#password_p").val(<?php echo json_encode($this->session->password); ?>);
  $("#email_p").val(<?php echo json_encode($this->session->email); ?>);
  $("#description_p").val(<?php echo json_encode($this->session->description); ?>);
  $("#photo_p").val(<?php echo json_encode($this->session->photo); ?>);
  $("#id_modal_profile").modal("show"); 
}

$("#form_model_profile").submit(function (e){
    e.preventDefault();
    $("#load_form_model").show();
    $.ajax({
      url: "<?php echo base_url().'admin/mst_user/insert_user'; ?>",
      data: { "id_user":$("#id_user_p").val(),
          "fullname":$("#fullname_p").val(),
          "username":$("#username_p").val(),
                    "password":$("#password_p").val(),
                    "email":$("#email_p").val(),
                    "description":$("#description_p").val(),
                    "photo":$("#photo_p").val(),
        },
      type : 'POST',
      dataType : 'json',
      success: function (data, textStatus, jqXHR) {
                console.log("OK");
                $("#load_form_modal").fadeOut(1000, function (){
                    $("#notif_form_modal").text(data.status);
                    $("#notif_form_modal").show();
                    $("#notif_form_modal").fadeOut(2000, function (){
                        location.reload(); 
                        $("#id_modal_profile").modal("hide");
                    });
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("NO");
            }
    });
  });
</script>      