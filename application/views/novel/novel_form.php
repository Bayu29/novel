<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Novel</li>
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
					<h4 class="panel-title">Data NOVEL</h4>
				</div>
				<div class="panel-body">

					<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
						<thead>
							<table id="data-table-default" class="table  table-bordered table-hover table-td-valign-middle">
								<?php if ($this->uri->segment(2) == 'create' || $this->uri->segment(2) == 'create_action') { ?>
									<tr>
										<td>Thumbnail <?php echo form_error('thumbnail') ?></td>
										<td><input type="file" class="form-control" name="thumbnail" id="thumbnail" placeholder="thumbnail" required="" value="" onchange="return validasiEkstensi()" />
										</td>
									</tr>
								<?php } else { ?>
									<div class="form-group">
										<tr>
											<td>Thumbnail <?php echo form_error('thumbnail') ?></td>
											<td>
												<a href="#modal-dialog" data-bs-toggle="modal"><img src="<?php echo base_url(); ?>template/assets/img/novel/<?= $thumbnail ?>" style="width: 150px;height: 150px;border-radius: 5%;"></img></a>
												<input type="hidden" name="thumbnail_lama" value="<?= $thumbnail ?>">
												<p style="color: red">Note :Pilih thumbnail Jika Ingin Merubahnya</p>
												<input type="file" class="form-control" name="thumbnail" id="thumbnail" placeholder="thumbnail" value="" onchange="return validasiEkstensi()" />
											</td>

										</tr>
									</div>
								<?php } ?>

								<tr>
									<td>Title <?php echo form_error('title') ?></td>
									<td><input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $title; ?>" /></td>
								</tr>
								<tr>
									<td>Tgl Released <?php echo form_error('tgl_released') ?></td>
									<td><input type="date" class="form-control" name="tgl_released" id="tgl_released" placeholder="Tgl Released" value="<?php echo $tgl_released; ?>" /></td>
								</tr>
								<tr>
									<td>Total Chapter <?php echo form_error('total_chapter') ?></td>
									<td><input type="text" class="form-control" name="total_chapter" id="total_chapter" placeholder="Total Chapter" value="<?php echo $total_chapter; ?>" /></td>
								</tr>
								<tr>
									<td>Author <?php echo form_error('author') ?></td>
									<td><input type="text" class="form-control" name="author" id="author" placeholder="Author" value="<?php echo $author; ?>" /></td>
								</tr>

								<tr>
									<td>Sinopsis <?php echo form_error('sinopsis') ?></td>
									<td> <textarea class="form-control" rows="3" name="sinopsis" id="sinopsis" placeholder="Sinopsis"><?php echo $sinopsis; ?></textarea></td>
								</tr>
								<tr>
									<td>Type <?php echo form_error('type_id') ?></td>
									<td><select name="type_id" class="form-control theSelect">
											<option value="">-- Pilih -- </option>
											<?php foreach ($data_type as $key => $data) { ?>
												<?php if ($type_id == $data->type_id) { ?>
													<option value="<?php echo $data->type_id ?>" selected><?php echo $data->nama_type ?> </option>
												<?php } else { ?>
													<option value="<?php echo $data->type_id ?>"><?php echo $data->nama_type ?></option>
												<?php } ?>
											<?php } ?>
										</select>
									</td>
								</tr>
								<tr>
									<td>Rating <?php echo form_error('rating') ?></td>
									<td><input type="number" step="any" class="form-control" name="rating" id="rating" placeholder="Rating" value="<?php echo $rating; ?>" /></td>
								</tr>
								<tr>
									<td>Status <?php echo form_error('status') ?></td>
									<td><select name="status" class="form-control theSelect" value="<?= $status ?>">
											<option value="">-- Pilih --</option>
											<option value="Ongoing" <?php echo $status == 'Ongoing' ? 'selected' : 'null' ?>>Ongoing</option>
											<option value="Completed" <?php echo $status == 'Completed' ? 'selected' : 'null' ?>>Completed</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Genre <?php echo form_error('status') ?></td>
									<td style="width: 80%;">
									<div class="row mb-3">
										<?php foreach ($data_genre as $data) { ?>
												<div class="col-md-3">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" id="checkbox<?= $data->genre_id ?>" value="<?= $data->genre_id ?>" name="genre_id[]" <?= cekGenre($novel_id,$data->genre_id) ?>  />
														<label class="form-check-label" for="checkbox<?= $data->genre_id ?>"><?= $data->nama_genre ?></label>
													</div>
												</div>
											
										<?php } ?>
										</div>
									</td>
								</tr>
								<tr>
									<td></td>
									<td><input type="hidden" name="novel_id" value="<?php echo $novel_id; ?>" />
										<button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> <?php echo $button ?></button>
										<a href="<?php echo site_url('novel') ?>" class="btn btn-info"><i class="fa fa-undo"></i> Kembali</a>
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
		var inputFile = document.getElementById('thumbnail');
		var pathFile = inputFile.value;
		var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.webp)$/i;
		if (!ekstensiOk.exec(pathFile)) {
			alert('Silakan upload file yang memiliki ekstensi .jpeg/.jpg/.png/.webp');
			inputFile.value = '';
			return false;
		} else {
			// Preview thumbnail
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
