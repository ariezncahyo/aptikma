<script>

	json_company_contactus = <?php echo json_encode($company_contactus) ?>;

	function load_company_contactus(company_contactus){
		var html="";
		for(var i = 0; i < company_contactus.length; i++){
			var a = '<tr>\n\
						<td>'+(i+1)+'</td>\n\
						<td>'+company_contactus[i].name+'</td>\n\
						<td>'+company_contactus[i].address+'</td>\n\
                        <td>'+company_contactus[i].phone+'</td>\n\
                        <td>'+company_contactus[i].email+'</td>\n\
                        <td>'+company_contactus[i].coordinate+'</td>\n\
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
    Company Contact Us
  </h1>
</section>

<!-- INSERT MODAL --> 
<div class="modal fade" id="id_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Insert/Update Company Contact</h4>
            </div>
            <form id="form_model" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Company Name</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id_company_contactus">
                            <input type="text" class="form-control" id="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Company Address </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Company Phone Number </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="phone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Company Email </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" required>
                        </div>
                    </div>                                        
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Company Coordinate</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="coordinate" required>
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
                <h4 class="modal-title">Delete Company Contact</h4>
            </div>
            <form id="form_model_del" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <center>
                        <input type="hidden" id="hapus_id_company_contactus">
                        <p style="font-size: 15px;">Do you really want to delete <span id="hapus_nama_company_contactus" style="font-weight: bold;"></span> ?</p>
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
            <h3 class="box-title">Data Company Contact contactus</h3>
            <button class="btn btn-xs btn-primary pull-right" data-toggle="tooltip" title="Add New" style="margin-right: 5px;"  onclick="showAdd()"><i class="fa fa-plus"></i></button>
        </div><!-- /.box-header -->
        <div class="box-body">

          <table id="id_tabel" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>                                
                <th>Coordinate</th>
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

load_company_contactus(json_company_contactus);

function showAdd(){
	$("#id_modal").modal("show");
	$("#id_company_contactus").val("");
	$("#name").val("");
	$("#address").val("");
    $("#phone").val("");
    $("#email").val("");
    $("#coordinate").val("");
}

function showEdit(i){
	$("#id_company_contactus").val(json_company_contactus[i].id_company_contactus);
	$("#name").val(json_company_contactus[i].name);
	$("#address").val(json_company_contactus[i].address);
    $("#phone").val(json_company_contactus[i].phone);
    $("#email").val(json_company_contactus[i].email);
    $("#coordinate").val(json_company_contactus[i].coordinate);
	$("#id_modal").modal("show");	
}

$("#form_model").submit(function (e){
		e.preventDefault();
		$("#load_form_model").show();
		$.ajax({
			url: "<?php echo base_url().'admin/mst_company_contactus/insert_company'; ?>",
			data: { "id_company_contactus":$("#id_company_contactus").val(),
					"name":$("#name").val(),
					"address":$("#address").val(),
                    "phone":$("#phone").val(),
                    "email":$("#email").val(),
                    "coordinate":$("#coordinate").val()
				},
			type : 'POST',
			dataType : 'json',
			success: function (data, textStatus, jqXHR) {
                console.log("OK");
                $("#load_form_modal").fadeOut(1000, function (){
                    $("#notif_form_modal").text(data.status);
                    $("#notif_form_modal").show();
                    $("#notif_form_modal").fadeOut(2000, function (){
                        json_company_contactus=data.company_contactus;
                        load_company_contactus(json_company_contactus);
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
	$("#hapus_id_company_contactus").val(json_company_contactus[i].id_company_contactus);
	$("#hapus_nama_company_contactus").html(json_company_contactus[i].name);
	$("#id_modal_del").modal("show");
}

$("#form_model_del").submit(function (e){
        e.preventDefault();
        $("#load_form_modal_del").show();
        $.ajax({
            url: "<?php echo base_url().'admin/mst_company_contactus/delete_company'; ?>",
            data: {"id_company_contactus":$("#hapus_id_company_contactus").val()},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#load_form_modal_del").fadeOut(1000,function(){
                    $("#notif_form_modal_del").text(data.status);
                    $("#notif_form_modal_del").show();
                    $("#notif_form_modal_del").fadeOut(2000, function (){
                        json_company_contactus=data.company_contactus;
                        load_company_contactus(json_company_contactus);
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