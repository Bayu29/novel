<div id="content" class="content">
	<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
						<h4 class="panel-title">Data NASABAH</h4>
					</div>
					<div class="panel-body">


						<thead>
							<table id="data-table-default" class="table  table-bordered table-hover table-td-valign-middle">
								<tr>
									<td>No Ktp <?php echo form_error('no_ktp') ?></td>
									<td><input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="No Ktp" value="<?php echo $no_ktp; ?>" /></td>
								</tr>
								<tr>
									<td>Nama Nasabah <?php echo form_error('nama_nasabah') ?></td>
									<td><input type="text" class="form-control" name="nama_nasabah" id="nama_nasabah" placeholder="Nama Nasabah" value="<?php echo $nama_nasabah; ?>" /></td>
								</tr>
								<tr>
									<td>Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></td>
									<td><select name="jenis_kelamin" class="form-control theSelect" value="<?= $jenis_kelamin ?>">
											<option value="">-- Pilih --</option>
											<option value="Laki Laki" <?php echo $jenis_kelamin == 'Laki Laki' ? 'selected' : 'null' ?>>Laki Laki</option>
											<option value="Perempuan" <?php echo $jenis_kelamin == 'Perempuan' ? 'selected' : 'null' ?>>Perempuan</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>No Hp <?php echo form_error('no_hp') ?></td>
									<td><input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" /></td>
								</tr>
								<tr>
									<td>Email <?php echo form_error('email') ?></td>
									<td><input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td>
								</tr>

								<tr>
									<td>Alamat Ktp <?php echo form_error('alamat_ktp') ?></td>
									<td> <textarea class="form-control" rows="3" name="alamat_ktp" id="alamat_ktp" placeholder="Alamat Ktp"><?php echo $alamat_ktp; ?></textarea></td>
								</tr>

								<tr>
									<td>Alamat Domisili <?php echo form_error('alamat_domisili') ?></td>
									<td> <textarea class="form-control" rows="3" name="alamat_domisili" id="alamat_domisili" placeholder="Alamat Domisili"><?php echo $alamat_domisili; ?></textarea></td>
								</tr>
								<tr>
									<td>Status Nasabah <?php echo form_error('status_nasabah') ?></td>
									<td><select name="status_nasabah" class="form-control theSelect" value="<?= $status_nasabah ?>">
											<option value="">-- Pilih --</option>
											<option value="Aktif" <?php echo $status_nasabah == 'Aktif' ? 'selected' : 'null' ?>>Aktif</option>
											<option value="Blacklist" <?php echo $status_nasabah == 'Blacklist' ? 'selected' : 'null' ?>>Blacklist</option>
										</select>
									</td>
								</tr>

						</thead>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
						<h4 class="panel-title">Data BANK NASABAH</h4>
					</div>
					<div class="panel-body">
						<thead>
							<table id="data-table-default" class="table  table-bordered table-hover table-td-valign-middle">
								<tr>
									<td>Nama Bank<?php echo form_error('bank_id') ?></td>
									<td>
										<select name="bank_id" class="form-control theSelect">
											<option value="">-- Pilih -- </option>
											<?php foreach ($bank as $key => $data) { ?>
												<?php if ($bank_id == $data->bank_id) { ?>
													<option value="<?php echo $data->bank_id ?>" selected><?php echo $data->nama_bank ?></option>
												<?php } else { ?>
													<option value="<?php echo $data->bank_id ?>"><?php echo $data->nama_bank ?></option>
												<?php } ?>
											<?php } ?>
										</select>
									</td>
								</tr>
								<tr>
									<td>No Rekening <?php echo form_error('no_rekening') ?></td>
									<td><input type="text" class="form-control" name="no_rekening" id="no_rekening" placeholder="No Rekening" value="<?php echo $no_rekening; ?>" /></td>
								</tr>
						</thead>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
						<h4 class="panel-title">Data FILE NASABAH</h4>
					</div>
					<div class="panel-body">
						<thead>
							<table id="data-table-default" class="table  table-bordered table-hover table-td-valign-middle">
								<tr>
									<td>Photo DIRI <?php echo form_error('photo_diri') ?>
									</td>
									<td>
										<?php if ($this->uri->segment(2) == 'update' || $this->uri->segment(2) == 'update_action') { ?>
											<div class="col-md-2">
												<?php if ($photo_diri == null || $photo_diri == '') { ?>
													<button type="button" class="btn btn-danger" disabled><i class="fa fa-times"></i> view</button>
												<?php } else { ?>
													<a href="<?= base_url() ?>temp/nasabah/<?= $photo_diri ?>" target="_blank" type="button" class="btn btn-success updateDataPhoto"><i class="fa fa-eye"></i> view</a>
												<?php } ?>

											</div>
											<div class="col-md-10">
												<input onchange="return validasiEkstensiDiri()" type="file" class="form-control validasiphoto" name="photo_diri" id="photo_diri" placeholder="Photo Ktp" value="<?php echo $photo_diri; ?>" />
												<!-- <span style="color: red">Pilih photo Jika Ingin Merubahnya</span> -->
											</div>
										<?php } else { ?>
											<input onchange="return validasiEkstensiDiri()" type="file" class="form-control validasiphoto" name="photo_diri" id="photo_diri" placeholder="Photo Ktp" value="" />
										<?php } ?>
									</td>
								</tr>

								<tr>
									<td>Photo KTP <?php echo form_error('photo_ktp') ?></td>
									<td>
										<?php if ($this->uri->segment(2) == 'update' || $this->uri->segment(2) == 'update_action') { ?>
											<div class="col-md-2">
												<?php if ($photo_ktp == null || $photo_ktp == '') { ?>
													<button type="button" class="btn btn-danger" disabled><i class="fa fa-times"></i> view</button>
												<?php } else { ?>
													<a href="<?= base_url() ?>temp/nasabah/<?= $photo_ktp ?>" target="_blank"  type="button" class="btn btn-success updateDataPhoto"><i class="fa fa-eye"></i> view</a>
												<?php } ?>
											</div>
											<div class="col-md-10">
												<input onchange="return validasiEkstensiKTP()" type="file" class="form-control validasiphoto" name="photo_ktp" id="photo_ktp" placeholder="Photo Ktp" value="<?php echo $photo_ktp; ?>" />
												<!-- <span style="color: red">Pilih photo Jika Ingin Merubahnya</span> -->
											</div>
										<?php } else { ?>
											<input onchange="return validasiEkstensiKTP()" type="file" class="form-control validasiphoto" name="photo_ktp" id="photo_ktp" placeholder="Photo Ktp" value="" />
										<?php } ?>
									</td>
								</tr>

								<tr>
									<td>Photo KK <?php echo form_error('photo_kk') ?></td>
									<td>
										<?php if ($this->uri->segment(2) == 'update' || $this->uri->segment(2) == 'update_action') { ?>
											<div class="col-md-2">
												<?php if ($photo_kk == null || $photo_kk == '') { ?>
													<button type="button" class="btn btn-danger" disabled><i class="fa fa-times"></i> view</button>
												<?php } else { ?>
													<a href="<?= base_url() ?>temp/nasabah/<?= $photo_kk ?>" target="_blank"  type="button" class="btn btn-success updateDataPhoto"><i class="fa fa-eye"></i> view</a>
												<?php } ?>
											</div>
											<div class="col-md-10">
												<input onchange="return validasiEkstensiKK()" type="file" class="form-control validasiphoto" name="photo_kk" id="photo_kk" placeholder="Photo Ktp" value="<?php echo $photo_kk; ?>" />
												<!-- <span style="color: red">Pilih photo Jika Ingin Merubahnya</span> -->
											</div>
										<?php } else { ?>
											<input onchange="return validasiEkstensiKK()" type="file" class="form-control validasiphoto" name="photo_kk" id="photo_kk" placeholder="Photo Ktp" value="" />
										<?php } ?>
									</td>
								</tr>
								<tr>
									<td>Photo SIM <?php echo form_error('photo_sim') ?></td>
									<td>
										<?php if ($this->uri->segment(2) == 'update' || $this->uri->segment(2) == 'update_action') { ?>
											<div class="col-md-2">

												<?php if ($photo_sim == null || $photo_sim == '') { ?>
													<button type="button" class="btn btn-danger" disabled><i class="fa fa-times"></i> view</button>
												<?php } else { ?>
													<a href="<?= base_url() ?>temp/nasabah/<?= $photo_sim ?>" target="_blank"  type="button" class="btn btn-success updateDataPhoto"><i class="fa fa-eye"></i> view</a>
												<?php } ?>
											</div>
											<div class="col-md-10">
												<input onchange="return validasiEkstensiSIM()" type="file" class="form-control validasiphoto" name="photo_sim" id="photo_sim" placeholder="Photo Ktp" value="<?php echo $photo_sim; ?>" />
												<!-- <span style="color: red">Pilih photo Jika Ingin Merubahnya</span> -->
											</div>
										<?php } else { ?>
											<input onchange="return validasiEkstensiSIM()" type="file" class="form-control validasiphoto" name="photo_sim" id="photo_sim" placeholder="Photo Ktp" value="" />
										<?php } ?>
									</td>
								</tr>
						</thead>
						</table>
					</div>
				</div>
			</div>

		</div>
		<input type="hidden" name="nasabah_id" value="<?php echo $nasabah_id; ?>" />
		<button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> <?php echo $button ?></button>
		<a href="<?php echo site_url('nasabah') ?>" class="btn btn-info"><i class="fa fa-undo"></i> Kembali</a>
	</form>
</div>
<script type="text/javascript">
	function validasiEkstensiKTP() {
		var inputFile = document.getElementById('photo_ktp');
		var pathFile = inputFile.value;
		var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;
		if (!ekstensiOk.exec(pathFile)) {
			alert('Silakan upload file yang memiliki ekstensi jpeg/jpg/png');
			inputFile.value = '';
			return false;
		}
	}

	function validasiEkstensiDiri() {
		var inputFile = document.getElementById('photo_diri');
		var pathFile = inputFile.value;
		var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;
		if (!ekstensiOk.exec(pathFile)) {
			alert('Silakan upload file yang memiliki ekstensi jpeg/jpg/png');
			inputFile.value = '';
			return false;
		}
	}

	function validasiEkstensiKK() {
		var inputFile = document.getElementById('photo_kk');
		var pathFile = inputFile.value;
		var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;
		if (!ekstensiOk.exec(pathFile)) {
			alert('Silakan upload file yang memiliki ekstensi jpeg/jpg/png');
			inputFile.value = '';
			return false;
		}
	}

	function validasiEkstensiSIM() {
		var inputFile = document.getElementById('photo_sim');
		var pathFile = inputFile.value;
		var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;
		if (!ekstensiOk.exec(pathFile)) {
			alert('Silakan upload file yang memiliki ekstensi jpeg/jpg/png');
			inputFile.value = '';
			return false;
		}
	}
</script>
