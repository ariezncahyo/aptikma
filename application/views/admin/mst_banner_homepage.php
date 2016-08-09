<script>

	json_banner_homepage = <?php echo json_encode($banner_homepage) ?>;

	function load_banner_homepage(banner_homepage){
		var html="";
		for(var i = 0; i < banner_homepage.length; i++){
			if(banner_homepage[i].status=="1") 
                var status = "Active"; 
            else
                var status = "Nonactive";
             
            var a = '<tr>\n\
						<td>'+(i+1)+'</td>\n\
						<td>'+banner_homepage[i].name_en+'</td>\n\
						<td>'+banner_homepage[i].name_id+'</td>\n\
                        <td>'+banner_homepage[i].desc_en+'</td>\n\
                        <td>'+banner_homepage[i].desc_id+'</td>\n\
                        <td>'+status+'</td>\n\
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
    Banner Homepage
  </h1>
</section>

<!-- INSERT MODAL --> 
<div class="modal fade" id="id_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Insert/Update Banner</h4>
            </div>
            <form id="form_model" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Banner Name (English)</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id_banner_homepage">
                            <input type="text" class="form-control" id="name_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Banner Name (Indonesia) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name_id" required>
                        </div>
                    </div><div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Description (English) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="desc_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Description (Indonesia) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="desc_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Image</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="image" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">URL</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="url_link" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Status</label>
                        <div class="col-sm-8">
                            <!--<input type="text" class="form-control" id="status" required>-->
                            <select class="form-control" id="status" required>
                                <option value="1">Active</option>
                                <option value="0">Nonactive</option>
                            </select>
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
                <h4 class="modal-title">Delete Banner</h4>
            </div>
            <form id="form_model_del" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <center>
                        <input type="hidden" id="hapus_id_banner_homepage">
                        <p style="font-size: 15px;">Do you really want to delete <span id="hapus_nama_banner_homepage" style="font-weight: bold;"></span> ?</p>
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
            <h3 class="box-title">Data Banner Homepage</h3>
            <button class="btn btn-xs btn-primary pull-right" data-toggle="tooltip" title="Add New" style="margin-right: 5px;"  onclick="showAdd()"><i class="fa fa-plus"></i></button>
        </div><!-- /.box-header -->
        <div class="box-body">

          <table id="id_tabel" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Name (English)</th>
                <th>Name (Indonesia)</th>
                <th>Description (English)</th>
                <th>Description (Indonesia)</th>
                <td>Status</td>
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

load_banner_homepage(json_banner_homepage);

function showAdd(){
	$("#id_modal").modal("show");
	$("#id_banner_homepage").val("");
	$("#name_en").val("");
	$("#name_id").val("");
    $("#desc_en").val("");
    $("#desc_id").val("");
    $("#image").val("");
    $("#url_link").val("");
    $("#status").val("");
}

function showEdit(i){
	$("#id_banner_homepage").val(json_banner_homepage[i].id_banner_homepage);
	$("#name_en").val(json_banner_homepage[i].name_en);
	$("#name_id").val(json_banner_homepage[i].name_id);
    $("#desc_en").val(json_banner_homepage[i].desc_en);
    $("#desc_id").val(json_banner_homepage[i].desc_id);
    $("#image").val(json_banner_homepage[i].image);
    $("#url_link").val(json_banner_homepage[i].url_link);
    $("#status").val(json_banner_homepage[i].status);
	$("#id_modal").modal("show");	
}

$("#form_model").submit(function (e){
		e.preventDefault();
		$("#load_form_model").show();
		$.ajax({
			url: "<?php echo base_url().'admin/mst_banner_homepage/insert_banner_homepage'; ?>",
			data: { "id_banner_homepage":$("#id_banner_homepage").val(),
					"name_en":$("#name_en").val(),
					"name_id":$("#name_id").val(),
                    "desc_en":$("#desc_en").val(),
                    "desc_id":$("#desc_id").val(),
                    "image":$("#image").val(),
                    "url_link":$("#url_link").val(),
                    "status":$("#status").val()
				},
			type : 'POST',
			dataType : 'json',
			success: function (data, textStatus, jqXHR) {
                console.log("OK");
                $("#load_form_modal").fadeOut(1000, function (){
                    $("#notif_form_modal").text(data.status);
                    $("#notif_form_modal").show();
                    $("#notif_form_modal").fadeOut(2000, function (){
                        json_banner_homepage=data.banner_homepage;
                        load_banner_homepage(json_banner_homepage);
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
	$("#hapus_id_banner_homepage").val(json_banner_homepage[i].id_banner_homepage);
	$("#hapus_nama_banner_homepage").html(json_banner_homepage[i].name_en);
	$("#id_modal_del").modal("show");
}

$("#form_model_del").submit(function (e){
        e.preventDefault();
        $("#load_form_modal_del").show();
        $.ajax({
            url: "<?php echo base_url().'admin/mst_banner_homepage/delete_banner_homepage'; ?>",
            data: {"id_banner_homepage":$("#hapus_id_banner_homepage").val()},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#load_form_modal_del").fadeOut(1000,function(){
                    $("#notif_form_modal_del").text(data.status);
                    $("#notif_form_modal_del").show();
                    $("#notif_form_modal_del").fadeOut(2000, function (){
                        json_banner_homepage=data.banner_homepage;
                        load_banner_homepage(json_banner_homepage);
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