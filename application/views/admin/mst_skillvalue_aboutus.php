<script>

	json_skillvalue_aboutus = <?php echo json_encode($skillvalue_aboutus) ?>;

	function load_skillvalue_aboutus(skillvalue_aboutus){
		var html="";
		for(var i = 0; i < skillvalue_aboutus.length; i++){
			var a = '<tr>\n\
						<td>'+(i+1)+'</td>\n\
						<td>'+skillvalue_aboutus[i].title_en+'</td>\n\
						<td>'+skillvalue_aboutus[i].title_id+'</td>\n\
                        <td>'+skillvalue_aboutus[i].value+'</td>\n\
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
    Skill Value About Us
  </h1>
</section>

<!-- INSERT MODAL --> 
<div class="modal fade" id="id_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Insert/Update SKill Value</h4>
            </div>
            <form id="form_model" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">SKill Name (English)</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id_skillvalue_aboutus">
                            <input type="text" class="form-control" id="title_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">SKill Name (Indonesia)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Nilai</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="value" required>
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
                <h4 class="modal-title">Delete Skill Value</h4>
            </div>
            <form id="form_model_del" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <center>
                        <input type="hidden" id="hapus_id_skillvalue_aboutus">
                        <p style="font-size: 15px;">Do you really want to delete <span id="hapus_title_skillvalue_aboutus" style="font-weight: bold;"></span> ?</p>
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
            <h3 class="box-title">Data Skill Value About Us</h3>
            <button class="btn btn-xs btn-primary pull-right" data-toggle="tooltip" title="Add New" style="margin-right: 5px;"  onclick="showAdd()"><i class="fa fa-plus"></i></button>
        </div><!-- /.box-header -->
        <div class="box-body">

          <table id="id_tabel" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Name (English)</th>
                <th>Name (Indonesia)</th>
                <th>Value</th>
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

load_skillvalue_aboutus(json_skillvalue_aboutus);

function showAdd(){
	$("#id_modal").modal("show");
	$("#id_skillvalue_aboutus").val("");
	$("#title_en").val("");
	$("#title_id").val("");
    $("#value").val("");
}

function showEdit(i){
	$("#id_skillvalue_aboutus").val(json_skillvalue_aboutus[i].id_skillvalue_aboutus);
	$("#title_en").val(json_skillvalue_aboutus[i].title_en);
	$("#title_id").val(json_skillvalue_aboutus[i].title_id);
    $("#value").val(json_skillvalue_aboutus[i].value);
	$("#id_modal").modal("show");	
}

$("#form_model").submit(function (e){
		e.preventDefault();
		$("#load_form_model").show();
		$.ajax({
			url: "<?php echo base_url().'admin/mst_skillvalue_aboutus/insert_skillvalue'; ?>",
			data: { "id_skillvalue_aboutus":$("#id_skillvalue_aboutus").val(),
					"title_en":$("#title_en").val(),
					"title_id":$("#title_id").val(),
                    "value":$("#value").val()
				},
			type : 'POST',
			dataType : 'json',
			success: function (data, textStatus, jqXHR) {
                console.log("OK");
                $("#load_form_modal").fadeOut(1000, function (){
                    $("#notif_form_modal").text(data.status);
                    $("#notif_form_modal").show();
                    $("#notif_form_modal").fadeOut(2000, function (){
                        json_skillvalue_aboutus=data.skillvalue_aboutus;
                        load_skillvalue_aboutus(json_skillvalue_aboutus);
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
	$("#hapus_id_skillvalue_aboutus").val(json_skillvalue_aboutus[i].id_skillvalue_aboutus);
	$("#hapus_title_skillvalue_aboutus").html(json_skillvalue_aboutus[i].title_en);
	$("#id_modal_del").modal("show");
}

$("#form_model_del").submit(function (e){
        e.preventDefault();
        $("#load_form_modal_del").show();
        $.ajax({
            url: "<?php echo base_url().'admin/mst_skillvalue_aboutus/delete_skillvalue'; ?>",
            data: {"id_skillvalue_aboutus":$("#hapus_id_skillvalue_aboutus").val()},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#load_form_modal_del").fadeOut(1000,function(){
                    $("#notif_form_modal_del").text(data.status);
                    $("#notif_form_modal_del").show();
                    $("#notif_form_modal_del").fadeOut(2000, function (){
                        json_skillvalue_aboutus=data.skillvalue_aboutus;
                        load_skillvalue_aboutus(json_skillvalue_aboutus);
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