<script>

	json_menu_homepage = <?php echo json_encode($menu_homepage) ?>;

	function load_menu_homepage(menu_homepage){
		var html="";
		for(var i = 0; i < menu_homepage.length; i++){
			var a = '<tr>\n\
						<td>'+(i+1)+'</td>\n\
                        <td>'+menu_homepage[i].title+'</td>\n\
                        <td>'+menu_homepage[i].name_en+'</td>\n\
                        <td>'+menu_homepage[i].name_id+'</td>\n\
                        <td>'+menu_homepage[i].controller+'</td>\n\
                        <td>'+menu_homepage[i].url_link_en+'</td>\n\
                        <td>'+menu_homepage[i].url_link_id+'</td>\n\
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
    Menu Bar Homepage
  </h1>
</section>

<!-- INSERT MODAL --> 
<div class="modal fade" id="id_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Insert/Update Menu Bar</h4>
            </div>
            <form id="form_model" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Title Menu Bar</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id_menu_homepage">
                            <input type="text" class="form-control" id="title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Menu Name (English) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name_en" required>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Menu Name (Indonesia) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Controller</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="controller" required>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">URL (English)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="url_link_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">URL (Indonesia) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="url_link_id" required>
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
                <h4 class="modal-title">Delete Menu Bar</h4>
            </div>
            <form id="form_model_del" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <center>
                        <input type="hidden" id="hapus_id_menu_homepage">
                        <p style="font-size: 15px;">Do you really want to delete <span id="hapus_title_menu_homepage" style="font-weight: bold;"></span> ?</p>
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
            <h3 class="box-title">Data Menu Homepage</h3>
            <button class="btn btn-xs btn-primary pull-right" data-toggle="tooltip" title="Add New" style="margin-right: 5px;"  onclick="showAdd()"><i class="fa fa-plus"></i></button>
        </div><!-- /.box-header -->
        <div class="box-body">

          <table id="id_tabel" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Title Menu Bar</th>                
                <th>Menu Name (English)</th>
                <th>Menu Name (Indonesia)</th>
                <th>Controller</th>                
                <th>URL (English)</th>
                <th>URL (Indonesia)</th>
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

load_menu_homepage(json_menu_homepage);

function showAdd(){
	$("#id_modal").modal("show");
	$("#id_menu_homepage").val("");
    $("#title").val("");    
    $("#name_en").val("");
    $("#name_id").val("");
    $("#controller").val("");    
    $("#url_link_en").val("");
    $("#url_link_id").val("");
}

function showEdit(i){
	$("#id_menu_homepage").val(json_menu_homepage[i].id_menu_homepage);
    $("#title").val(json_menu_homepage[i].title);
    $("#name_en").val(json_menu_homepage[i].name_en);
    $("#name_id").val(json_menu_homepage[i].name_id);
    $("#controller").val(json_menu_homepage[i].controller);
    $("#url_link_en").val(json_menu_homepage[i].url_link_en);
    $("#url_link_id").val(json_menu_homepage[i].url_link_id);
	$("#id_modal").modal("show");	
}

$("#form_model").submit(function (e){
		e.preventDefault();
		$("#load_form_model").show();
		$.ajax({
			url: "<?php echo base_url().'admin/mst_menu_homepage/insert_menu_homepage'; ?>",
			data: { "id_menu_homepage":$("#id_menu_homepage").val(),
                    "title":$("#title").val(),
                    "name_en":$("#name_en").val(),
                    "name_id":$("#name_id").val(),
                    "controller":$("#controller").val(),
                    "url_link_en":$("#url_link_en").val(),
                    "url_link_id":$("#url_link_id").val()
				},
			type : 'POST',
			dataType : 'json',
			success: function (data, textStatus, jqXHR) {
                console.log("OK");
                $("#load_form_modal").fadeOut(1000, function (){
                    $("#notif_form_modal").text(data.status);
                    $("#notif_form_modal").show();
                    $("#notif_form_modal").fadeOut(2000, function (){
                        json_menu_homepage=data.menu_homepage;
                        load_menu_homepage(json_menu_homepage);
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
	$("#hapus_id_menu_homepage").val(json_menu_homepage[i].id_menu_homepage);
	$("#hapus_title_menu_homepage").html(json_menu_homepage[i].title);
	$("#id_modal_del").modal("show");
}

$("#form_model_del").submit(function (e){
        e.preventDefault();
        $("#load_form_modal_del").show();
        $.ajax({
            url: "<?php echo base_url().'admin/mst_menu_homepage/delete_menu_homepage'; ?>",
            data: {"id_menu_homepage":$("#hapus_id_menu_homepage").val()},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#load_form_modal_del").fadeOut(1000,function(){
                    $("#notif_form_modal_del").text(data.status);
                    $("#notif_form_modal_del").show();
                    $("#notif_form_modal_del").fadeOut(2000, function (){
                        json_menu_homepage=data.menu_homepage;
                        load_menu_homepage(json_menu_homepage);
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