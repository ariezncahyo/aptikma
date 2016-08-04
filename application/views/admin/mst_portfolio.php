<script>

	var json_portfolio = <?php echo json_encode($portfolio) ?>;
	var json_category_portfolio = <?php echo json_encode($category_portfolio) ?>;

	function load_portfolio(portfolio){
		var html ="";
        var category = "";


		for(var i = 0; i< portfolio.length; i++){
            for(var j = 0 ; j < category.length ; j++){
                if(category[j].id_category_portfolio == portfolio[i].category){
                    category = category[j].name_en;
                }
            }

			var a = '<tr>\n\
                        <td>'+(i+1)+'</td>\n\
						<td>'+portfolio[i].title_en+'</td>\n\
						<td>'+portfolio[i].title_id+'</td>\n\
						<td>'+portfolio[i].desc_en+'</td>\n\
						<td>'+portfolio[i].desc_id+'</td>\n\
						<td>'+portfolio[i].url_link+'</td>\n\
						<td>'+category+'</td>\n\
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

	function load_category(category){
		var awal = '<option value="">-Pilih Kategory-</option>';
		var html= "";

		for(var i = 0;i<category.length;i++){
			var a = '<option value="'+category[i].id_category_portfolio+'">'+category[i].name_en+'</option>';
			html = html + a;
		}

		$('#category').html(awal+html);
	}

</script>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Master
    <small>Kamar</small>
  </h1>
  <ol class="breadcrumb">
    <li>Master</li>
    <li>Portfolio</li>
  </ol>
</section>

<!-- MODAL INSERT PORTFOLIO -->
<div class="modal fade" id="id_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Portfolio</h4>
            </div>
            <form id="form_model" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Judul Portfolio (EN)</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id_portfolio">
                            <input type="text" class="form-control" id="title_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Judul Portfolio (ID)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Deskripsi Portfolio (EN)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="desc_en" required>
                        </div>
                    </div><div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Deskripsi Portfolio (ID)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="desc_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">URL LINK Portfolio</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="url_links" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Kategory</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="category" required>
                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <img id="load_form_modal" style="display: none;" src="<?php echo base_url().'assets/images/assets/loader.gif'; ?>">
                <span id="notif_form_modal" style="display: none;"></span>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- END OF INSERT MODAL -->

<!-- DELETE MODAL -->
<div class="modal fade" id="id_modal_del" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Kategori</h4>
            </div>
            <form id="form_model_del" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <center>
                        <input type="hidden" id="hapus_portfolio">
                        <p style="font-size: 15px;">Yakin Menghapus <span id="hapus_portfolio_p" style="font-weight: bold;"></span> ?</p>
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

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data portfolio</h3> 
					<button class="btn btn-xs btn-primary pull-right" data-toggle="tooltip" title="Tambah Portfolio" style="margin-right: 5px;"  onclick="showAdd()"><i class="fa fa-plus"></i></button>
				</div>
				<div class="box-body">

					<table id="id_tabel" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Title English</th>
								<th>Title Indonesia</th>
								<th>Deskripsi English</th>
								<th>Deskripsi Indonesia</th>
								<th>URL Link</th>
								<th>Category</th>
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
	load_portfolio(json_portfolio);
	load_category(json_category_portfolio);

	// FUNSI TAMBAH DATA
	function showAdd(){
		$("#id_modal").modal("show");
		$("#id_portfolio").val("");
		$("#title_en").val("");
		$("#title_id").val("");
		$("#desc_en").val("");
		$("#desc_id").val("");
		$("#url_links").val("");
		$("#category").val("");
	}

    // FUNGSI EDIT
	function showEdit(i){
		$("#id_portfolio").val(json_portfolio[i].id_portfolio_portfolio);
		$("#title_en").val(json_portfolio[i].title_en);
		$("#title_id").val(json_portfolio[i].title_id);
		$("#desc_en").val(json_portfolio[i].desc_en);
		$("#desc_id").val(json_portfolio[i].desc_id);
		$("#url_links").val(json_portfolio[i].url_link);
		$("#category").val(json_portfolio[i].category);
		$("#id_modal").modal("show");
	}
	

   $("#form_model").submit(function (e){
        e.preventDefault();
        $("#load_form_model").show();
        $.ajax({
            url: "<?php echo base_url().'admin/mst_portfolio/insert_portfolio'; ?>",
            data: { "id_portfolio":$("#id_portfolio").val(),
                     "title_en":$("#title_en").val(),
                     "title_id":$("#title_id").val(),
                     "desc_en":$("#desc_en").val(),
                     "desc_id":$("#desc_id").val(),
                     "url_link":$("#url_links").val(),
                     "category":$("#category").val()
                    },
            type : 'POST',
            dataType : 'json',
            success: function (data, textStatus, jqXHR) {
                console.log("OK");
                $("#load_form_modal").fadeOut(1000, function (){
                    $("#notif_form_modal").text(data.status);
                    $("#notif_form_modal").show();
                    $("#notif_form_modal").fadeOut(2000, function (){
                        json_portfolio=data.portfolio;
                        load_portfolio(json_portfolio);
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
        $("#hapus_portfolio").val(json_portfolio[i].id_portfolio_portfolio);
        $("#hapus_portfolio_p").html(json_portfolio[i].title_en);
        $("#id_modal_del").modal("show");
    }

    $("#form_model_del").submit(function (e){
        e.preventDefault();
        $("#load_form_modal_del").show();
        $.ajax({
            url: "<?php echo base_url().'admin/mst_portfolio/delete_portfolio'; ?>",
            data: {"id_portfolio":$("#hapus_portfolio").val()},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#load_form_modal_del").fadeOut(1000,function(){
                    $("#notif_form_modal_del").text(data.status);
                    $("#notif_form_modal_del").show();
                    $("#notif_form_modal_del").fadeOut(2000, function (){
                        json_portfolio=data.portfolio;
                        load_portfolio(json_portfolio);
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
</html>