<script>

	json_user = <?php echo json_encode($user) ?>;

	function load_user(user){
		var html="";
		for(var i = 0; i < user.length; i++){
			var a = '<tr>\n\
						<td>'+(i+1)+'</td>\n\
						<td>'+user[i].fullname+'</td>\n\
						<td>'+user[i].email+'</td>\n\
                        <td>'+user[i].description+'</td>\n\
                        <td>'+user[i].photo+'</td>\n\
						<td>\n\
                            <button class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete" onclick="showDelete('+i+')"><i class="fa fa-trash"></i></button>\n\
                        </td>\n\
                    </tr>';
            html = html + a;
		}
		$('#isi_tabel').html(html);
		$("#id_tabel").dataTable();
	}

</script>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    User
  </h1>
</section>

<!-- INSERT MODAL --> 
<div class="modal fade" id="id_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Insert User</h4>
            </div>
            <form id="form_model" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Full Name</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id_user">
                            <input type="text" class="form-control" id="fullname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Username </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Password </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Email </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" required>
                        </div>
                    </div>                                        
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Description</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="description">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Photo</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="photo">
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

<!-- DELETE MODAL -->
<div class="modal fade" id="id_modal_del" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete User</h4>
            </div>
            <form id="form_model_del" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <center>
                        <input type="hidden" id="hapus_id_user">
                        <input type="hidden" id="hapus_username_user">
                        <p style="font-size: 15px;">Do you really want to delete <span id="hapus_nama_user" style="font-weight: bold;"></span> ?</p>
                    </center>
                </div>
            </div>
            <div class="modal-footer">
                <img id="load_form_modal_del" style="display: none;" src="<?php echo base_url().'assets/admin/img/loading.gif'; ?>">
                <span id="notif_form_modal_del" style="display: none;"></span>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data User</h3>
            <button class="btn btn-xs btn-primary pull-right" data-toggle="tooltip" title="Add New" style="margin-right: 5px;"  onclick="showAdd()"><i class="fa fa-plus"></i></button>
        </div><!-- /.box-header -->
        <div class="box-body">

          <table id="id_tabel" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>                                
                <th>Description</th>
                <th>Photo</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="isi_tabel">

            </tbody>

          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

<script>

load_user(json_user);

function showAdd(){
	$("#id_modal").modal("show");
	$("#id_user").val("");
	$("#fullname").val("");
	$("#username").val("");
    $("#password").val("");
    $("#email").val("");
    $("#description").val("");
    $("#photo").val("");
}

$("#form_model").submit(function (e){
		e.preventDefault();
		$("#load_form_model").show();
		$.ajax({
			url: "<?php echo base_url().'admin/mst_user/insert_user'; ?>",
			data: { "id_user":$("#id_user").val(),
					"fullname":$("#fullname").val(),
					"username":$("#username").val(),
                    "password":$("#password").val(),
                    "email":$("#email").val(),
                    "description":$("#description").val(),
                    "photo":$("#photo").val()
				},
			type : 'POST',
			dataType : 'json',
			success: function (data, textStatus, jqXHR) {
                console.log("OK");
                $("#load_form_modal").fadeOut(1000, function (){
                    $("#notif_form_modal").text(data.status);
                    $("#notif_form_modal").show();
                    $("#notif_form_modal").fadeOut(2000, function (){
                        json_user=data.user;
                        load_user(json_user);
                        $("#id_modal").modal("hide");
                    });
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("NO");
            }
		});
	});

function showDelete(i){
	$("#hapus_id_user").val(json_user[i].id_user);
    $("#hapus_username_user").val(json_user[i].username);
	$("#hapus_nama_user").html(json_user[i].fullname);
	$("#id_modal_del").modal("show");
}

$("#form_model_del").submit(function (e){
        e.preventDefault();
        $("#load_form_modal_del").show();
        $.ajax({
            url: "<?php echo base_url().'admin/mst_user/delete_user'; ?>",
            data: {"id_user":$("#hapus_id_user").val(), "username":$("#hapus_username_user").val()},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#load_form_modal_del").fadeOut(1000,function(){
                    $("#notif_form_modal_del").text(data.status);
                    $("#notif_form_modal_del").show();
                    $("#notif_form_modal_del").fadeOut(2000, function (){
                        json_user=data.user;
                        load_user(json_user);
                        $("#id_modal_del").modal("hide");
                    });
                    
                });
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("gagal");

            }
        });
    });

</script>