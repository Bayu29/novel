<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Setting_web</li>
	</ol>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Data SETTING_WEB</h4>
				</div>
				<div class="panel-body">

					<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
						<thead>
							<table id="data-table-default" class="table  table-bordered table-hover table-td-valign-middle">
								<tr>
									<td>Nama Website <?php echo form_error('nama_website') ?></td>
									<td><input type="text" class="form-control" name="nama_website" id="nama_website" placeholder="Nama Website" value="<?php echo $nama_website; ?>" /></td>
								</tr>
								<div class="form-group">
									<tr>
										<td>Logo <?php echo form_error('logo') ?></td>
										<td>
											<a href="#modal-dialog" data-bs-toggle="modal"><img src="<?php echo base_url(); ?>template/assets/img/website/<?= $logo ?>" style="width: 30%;"></img></a>
											<input type="hidden" readonly name="logo_lama" value="<?= $logo ?>">
											<p style="color: red">Note : Pilih logo Jika Ingin Merubahnya</p>
											<input type="file" class="form-control" name="logo" id="logo" placeholder="logo" value="" onchange="return validasiEkstensi()" />
										</td>

									</tr>
								</div>
								<tr>
									<td>Telpon <?php echo form_error('telpon') ?></td>
									<td><input type="text" class="form-control" name="telpon" id="telpon" placeholder="Telpon" value="<?php echo $telpon; ?>" /></td>
								</tr>
								<tr>
									<td>Email <?php echo form_error('email') ?></td>
									<td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td>
								</tr>

								<tr>
									<td>Deskripsi <?php echo form_error('deskripsi') ?></td>
									<td> <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea></td>
								</tr>
								<tr>
									<td>Is Aktif Website <?php echo form_error('is_aktif_website') ?></td>
									<td><select name="is_aktif_website" class="form-control theSelect" value="<?= $is_aktif_website ?>">
											<option value="">-- Pilih --</option>
											<option value="Aktif" <?php echo $is_aktif_website == 'Aktif' ? 'selected' : 'null' ?>>Aktif</option>
											<option value="Non Aktif" <?php echo $is_aktif_website == 'Non Aktif' ? 'selected' : 'null' ?>>Non Aktif</option>
										</select>
									</td>
								</tr>
								<tr>
									<td></td>
									<td><input type="hidden" name="setting_web_id" value="<?php echo $setting_web_id; ?>" />
										<button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> <?php echo $button ?></button>
									</td>
								</tr>
						</thead>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	function validasiEkstensi() {
		var inputFile = document.getElementById('logo');
		var pathFile = inputFile.value;
		var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.webp)$/i;
		if (!ekstensiOk.exec(pathFile)) {
			alert('Silakan upload file yang memiliki ekstensi .jpeg/.jpg/.png/.webp');
			inputFile.value = '';
			return false;
		} else {
			// Preview photo
			if (inputFile.files && inputFile.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					document.getElementById('preview').innerHTML = '<iframe src="' + e.target.result + '" style="height:400px; width:600px"/>';
				};
				reader.readAsDataURL(inputFile.files[0]);
			}
		}
	}
</script>
