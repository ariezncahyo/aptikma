<script>

	json_list_intern = <?php echo json_encode($list_intern) ?>;

	function load_list_intern(list_intern){
		var html="";
		for(var i = 0; i < list_intern.length; i++){
			var a = '<tr>\n\
						<td>'+(i+1)+'</td>\n\
						<td>'+list_intern[i].name+'</td>\n\
						<td>'+list_intern[i].instance+'</td>\n\
                        <td>'+list_intern[i].department+'</td>\n\
                        <td>'+list_intern[i].start_date+'</td>\n\
                        <td>'+list_intern[i].finish_date+'</td>\n\
						<td>\n\
							<button class="btn btn-xs btn-success" data-toggle="tooltip" title="Change" onclick="showEdit('+i+')"><i class="fa fa-edit"></i></button>\n\
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
    List Intern
  </h1>
</section>

<!-- INSERT MODAL --> 
<div class="modal fade" id="id_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Insert/Update List Intern</h4>
            </div>
            <form id="form_model" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Full Name</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id_list_intern">
                            <input type="text" class="form-control" id="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Instance</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="instance" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Department</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="department" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Start Date</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="start_date" data-date-format="yyyy-mm-dd" required>
                        </div>
                    </div>                                        
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Finish Date</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="finish_date" data-date-format="yyyy-mm-dd" required>
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
                <h4 class="modal-title">Delete List Intern</h4>
            </div>
            <form id="form_model_del" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <center>
                        <input type="hidden" id="hapus_id_list_intern">
                        <p style="font-size: 15px;">Do you really want to delete <span id="hapus_nama_list_intern" style="font-weight: bold;"></span> ?</p>
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
            <h3 class="box-title">Data list Intern</h3>
            <button class="btn btn-xs btn-primary pull-right" data-toggle="tooltip" title="Add New" style="margin-right: 5px;"  onclick="showAdd()"><i class="fa fa-plus"></i></button>
        </div><!-- /.box-header -->
        <div class="box-body">

          <table id="id_tabel" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Instance</th>
                <th>Department</th>
                <th>Start Date</th>                                
                <th>Finish Date</th>
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

load_list_intern(json_list_intern);

function showAdd(){
	$("#id_modal").modal("show");
	$("#id_list_intern").val("");
	$("#name").val("");
	$("#instance").val("");
    $("#department").val("");
    $("#start_date").val("");
    $("#finish_date").val("");
}

function showEdit(i){
	$("#id_list_intern").val(json_list_intern[i].id_list_intern);
	$("#name").val(json_list_intern[i].name);
	$("#instance").val(json_list_intern[i].instance);
    $("#department").val(json_list_intern[i].department);
    $("#start_date").val(json_list_intern[i].start_date);
    $("#finish_date").val(json_list_intern[i].finish_date);
	$("#id_modal").modal("show");	
}

$("#form_model").submit(function (e){
		e.preventDefault();
		$("#load_form_model").show();
		$.ajax({
			url: "<?php echo base_url().'admin/mst_list_intern/insert_list'; ?>",
			data: { "id_list_intern":$("#id_list_intern").val(),
					"name":$("#name").val(),
					"instance":$("#instance").val(),
                    "department":$("#department").val(),
                    "start_date":$("#start_date").val(),
                    "finish_date":$("#finish_date").val()
				},
			type : 'POST',
			dataType : 'json',
			success: function (data, textStatus, jqXHR) {
                console.log("OK");
                $("#load_form_modal").fadeOut(1000, function (){
                    $("#notif_form_modal").text(data.status);
                    $("#notif_form_modal").show();
                    $("#notif_form_modal").fadeOut(2000, function (){
                        json_list_intern=data.list_intern;
                        load_list_intern(json_list_intern);
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
	$("#hapus_id_list_intern").val(json_list_intern[i].id_list_intern);
	$("#hapus_nama_list_intern").html(json_list_intern[i].name);
	$("#id_modal_del").modal("show");
}

$("#form_model_del").submit(function (e){
        e.preventDefault();
        $("#load_form_modal_del").show();
        $.ajax({
            url: "<?php echo base_url().'admin/mst_list_intern/delete_list'; ?>",
            data: {"id_list_intern":$("#hapus_id_list_intern").val()},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#load_form_modal_del").fadeOut(1000,function(){
                    $("#notif_form_modal_del").text(data.status);
                    $("#notif_form_modal_del").show();
                    $("#notif_form_modal_del").fadeOut(2000, function (){
                        json_list_intern=data.list_intern;
                        load_list_intern(json_list_intern);
                        $("#id_modal_del").modal("hide");
                    });
                    
                });
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("gagal");

            }
        });
    });

    //Date picker
    $('#start_date').datepicker({
        autoclose: true
    });

    //Date picker
    $('#finish_date').datepicker({
        autoclose: true
    });

</script>