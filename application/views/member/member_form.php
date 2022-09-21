<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Member</li>
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
					<h4 class="panel-title">Data MEMBER</h4>
				</div>
				<div class="panel-body">

					<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
						<thead>
							<table id="data-table-default" class="table  table-bordered table-hover table-td-valign-middle">
								<?php if ($this->uri->segment(2) == 'create' || $this->uri->segment(2) == 'create_action') { ?>
									<tr>
										<td>Photo <?php echo form_error('photo') ?></td>
										<td><input type="file" class="form-control" name="photo" id="photo" placeholder="photo" required="" value="" onchange="return validasiEkstensi()" />
										</td>
									</tr>
								<?php } else { ?>
									<div class="form-group">
										<tr>
											<td>Photo <?php echo form_error('photo') ?></td>
											<td>
												<a href="#modal-dialog" data-bs-toggle="modal"><img src="<?php echo base_url(); ?>template/assets/img/member/<?= $photo ?>" style="width: 150px;height: 150px;border-radius: 5%;"></img></a>
												<input type="hidden" name="photo_lama" value="<?= $photo ?>">
												<p style="color: red">Note :Pilih photo Jika Ingin Merubahnya</p>
												<input type="file" class="form-control" name="photo" id="photo" placeholder="photo" value="" onchange="return validasiEkstensi()" />
											</td>

										</tr>
									</div>
								<?php } ?>

								<tr>
									<td>Nama <?php echo form_error('nama') ?></td>
									<td><input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" /></td>
								</tr>
								<tr>
									<td>Username <?php echo form_error('username') ?></td>
									<td><input type="username" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" /></td>
								</tr>
								<tr>
									<td>Email <?php echo form_error('email') ?></td>
									<td><input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td>
								</tr>
								<tr>
									<td>No Hp <?php echo form_error('no_hp') ?></td>
									<td><input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" /></td>
								</tr>
								<tr>
									<td>Jenis Kelamin <?php echo form_error('jk_kelamin') ?></td>
									<td><select name="jk_kelamin" class="form-control theSelect" value="<?= $jk_kelamin ?>">
											<option value="">-- Pilih --</option>
											<option value="Laki Laki" <?php echo $jk_kelamin == 'Laki Laki' ? 'selected' : 'null' ?>>Laki Laki</option>
											<option value="Perempuan" <?php echo $jk_kelamin == 'Perempuan' ? 'selected' : 'null' ?>>Perempuan</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Alamat <?php echo form_error('alamat') ?></td>
									<td> <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea></td>
								</tr>

								<?php if ($this->uri->segment(2) == "create" || $this->uri->segment(2) == "create_action") { ?>
									<tr>
										<td>Saldo Akun <?php echo form_error('saldo_akun') ?></td>
										<td><input type="number" readonly class="form-control" name="saldo_akun" id="saldo_akun" placeholder="saldo_akun" value="0" /></td>
									</tr>
								<?php } else { ?>
									<tr>
										<td>Saldo Akun <?php echo form_error('saldo_akun') ?></td>
										<td><input type="number" readonly class="form-control" name="saldo_akun" id="saldo_akun" placeholder="saldo_akun" value="<?php echo $saldo_akun; ?>" /></td>
									</tr>
								<?php } ?>


								<tr>
									<td>Is Aktif <?php echo form_error('is_aktif') ?></td>
									<td><select name="is_aktif" class="form-control theSelect" value="<?= $is_aktif ?>">
											<option value="">-- Pilih --</option>
											<option value="Aktif" <?php echo $is_aktif == 'Aktif' ? 'selected' : 'null' ?>>Aktif</option>
											<option value="Non Aktif" <?php echo $is_aktif == 'Non Aktif' ? 'selected' : 'null' ?>>Non Aktif</option>
										</select>
									</td>
								</tr>

								<?php if ($this->uri->segment(2) == "create" || $this->uri->segment(2) == "create_action") { ?>
									<tr>
										<td>Password <?php echo form_error('password') ?></td>
										<td><input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" /></td>
									</tr>
								<?php } else { ?>
									<tr>
										<td>Password <?php echo form_error('password') ?></td>
										<td><input type="password" class="form-control" name="password" id="password" placeholder="Password" value="" />
											<small style="color: red">(Biarkan kosong jika tidak diganti)</small>
										</td>
									</tr>
								<?php } ?>
								<tr>
									<td></td>
									<td><input type="hidden" name="member_id" value="<?php echo $member_id; ?>" />
										<button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> <?php echo $button ?></button>
										<a href="<?php echo site_url('member') ?>" class="btn btn-info"><i class="fa fa-undo"></i> Kembali</a>
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
		var inputFile = document.getElementById('photo');
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
