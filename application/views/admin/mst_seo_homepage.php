<script>

	json_seo_homepage = <?php echo json_encode($seo_homepage) ?>;

	function load_seo_homepage(seo_homepage){
		var html="";
		for(var i = 0; i < seo_homepage.length; i++){
			var a = '<tr>\n\
						<td>'+(i+1)+'</td>\n\
						<td>'+seo_homepage[i].meta_tag_en+'</td>\n\
						<td>'+seo_homepage[i].meta_tag_id+'</td>\n\
                        <td>'+seo_homepage[i].meta_keyword_en+'</td>\n\
                        <td>'+seo_homepage[i].meta_keyword_id+'</td>\n\
                        <td>'+seo_homepage[i].meta_desc_en+'</td>\n\
                        <td>'+seo_homepage[i].meta_desc_id+'</td>\n\
						<td>\n\
							<button class="btn btn-xs btn-success" data-toggle="tooltip" title="Ubah" onclick="showEdit('+i+')"><i class="fa fa-edit"></i></button>\n\
                            <button class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus" onclick="showDelete('+i+')"><i class="fa fa-trash"></i></button>\n\
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
    Master
    <small>Homepage</small>
  </h1>
  <ol class="breadcrumb">
    <li>Master</li>
    <li>Homepage</li>
  </ol>
</section>

<!-- INSERT MODAL --> 
<div class="modal fade" id="id_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data SEO Homepage</h4>
            </div>
            <form id="form_model" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Meta Tag (English)</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id_seo_homepage">
                            <input type="text" class="form-control" id="meta_tag_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Meta Tag (Indonesia) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="meta_tag_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Meta Keyword (English)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="meta_keyword_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Meta Keyword (Indonesia) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="meta_keyword_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Meta Description (English)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="meta_desc_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Meta Description (Indonesia) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="meta_desc_id" required>
                        </div>
                    </div>                                        
                </div>
            </div>
            <div class="modal-footer">
                <img id="load_form_modal" style="display: none;" src="<?php echo base_url().'assets/admin/img/loading.gif'; ?>">
                <span id="notif_form_modal" style="display: none;"></span>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
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
                <h4 class="modal-title">Data SEO Homepage </h4>
            </div>
            <form id="form_model_del" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <center>
                        <input type="hidden" id="hapus_id_seo_homepage">
                        <p style="font-size: 15px;">Yakin Menghapus <span id="hapus_meta_tag_seo_homepage" style="font-weight: bold;"></span> ?</p>
                    </center>
                </div>
            </div>
            <div class="modal-footer">
                <img id="load_form_modal_del" style="display: none;" src="<?php echo base_url().'assets/admin/img/loading.gif'; ?>">
                <span id="notif_form_modal_del" style="display: none;"></span>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
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
            <h3 class="box-title">Data SEO Homepage</h3>
            <button class="btn btn-xs btn-primary pull-right" data-toggle="tooltip" title="Tambah SEO" style="margin-right: 5px;"  onclick="showAdd()"><i class="fa fa-plus"></i></button>
        </div><!-- /.box-header -->
        <div class="box-body">

          <table id="id_tabel" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Meta Tag English</th>
                <th>Meta Tag Indonesia</th>
                <th>Meta Keyword English</th>
                <th>Meta Keyword Indonesia</th>
                <th>Meta Description English</th>
                <th>Meta Description Indonesia</th>                
                <th>Opsi</th>
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

load_seo_homepage(json_seo_homepage);

function showAdd(){
	$("#id_modal").modal("show");
	$("#id_seo_homepage").val("");
	$("#meta_tag_en").val("");
	$("#meta_tag_id").val("");
    $("#meta_keyword_en").val("");
    $("#meta_keyword_id").val("");
    $("#meta_desc_en").val("");
    $("#meta_desc_id").val("");
}

function showEdit(i){
	$("#id_seo_homepage").val(json_seo_homepage[i].id_seo_homepage);
	$("#meta_tag_en").val(json_seo_homepage[i].meta_tag_en);
	$("#meta_tag_id").val(json_seo_homepage[i].meta_tag_id);
    $("#meta_keyword_en").val(json_seo_homepage[i].meta_keyword_en);
    $("#meta_keyword_id").val(json_seo_homepage[i].meta_keyword_id);
    $("#meta_desc_en").val(json_seo_homepage[i].meta_desc_en);
    $("#meta_desc_id").val(json_seo_homepage[i].meta_desc_id);
	$("#id_modal").modal("show");	
}

$("#form_model").submit(function (e){
		e.preventDefault();
		$("#load_form_model").show();
		$.ajax({
			url: "<?php echo base_url().'admin/mst_seo_homepage/insert_seo'; ?>",
			data: { "id_seo_homepage":$("#id_seo_homepage").val(),
					"meta_tag_en":$("#meta_tag_en").val(),
					"meta_tag_id":$("#meta_tag_id").val(),
                    "meta_keyword_en":$("#meta_keyword_en").val(),
                    "meta_keyword_id":$("#meta_keyword_id").val(),
                    "meta_desc_en":$("#meta_desc_en").val(),
                    "meta_desc_id":$("#meta_desc_id").val(),                                        
				},
			type : 'POST',
			dataType : 'json',
			success: function (data, textStatus, jqXHR) {
                console.log("OK");
                $("#load_form_modal").fadeOut(1000, function (){
                    $("#notif_form_modal").text(data.status);
                    $("#notif_form_modal").show();
                    $("#notif_form_modal").fadeOut(2000, function (){
                        json_seo_homepage=data.seo_homepage;
                        load_seo_homepage(json_seo_homepage);
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
	$("#hapus_id_seo_homepage").val(json_seo_homepage[i].id_seo_homepage);
	$("#hapus_meta_tag_seo_homepage").html(json_seo_homepage[i].meta_tag_en);
	$("#id_modal_del").modal("show");
}

$("#form_model_del").submit(function (e){
        e.preventDefault();
        $("#load_form_modal_del").show();
        $.ajax({
            url: "<?php echo base_url().'admin/mst_seo_homepage/delete_seo'; ?>",
            data: {"id_seo_homepage":$("#hapus_id_seo_homepage").val()},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#load_form_modal_del").fadeOut(1000,function(){
                    $("#notif_form_modal_del").text(data.status);
                    $("#notif_form_modal_del").show();
                    $("#notif_form_modal_del").fadeOut(2000, function (){
                        json_seo_homepage=data.seo_homepage;
                        load_seo_homepage(json_seo_homepage);
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