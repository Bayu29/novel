<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Nasabah</li>
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
					<h4 class="panel-title">Data Nasabah Aktif</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="box-body">
									<div class='row'>
										<div class='col-md-9'>
											<div style="padding-bottom: 10px;">
												<?php echo anchor(site_url('nasabah/create'), '<i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm tambah_data"'); ?>
											</div>
										</div>
									</div>
									<div class="box-body" style="overflow-x: scroll; ">
										<table id="data-table" class="table table-bordered table-hover table-td-valign-middle">
											<thead>
												<tr>
													<th>No</th>
													<th>Photo Diri</th>
													<th>No Ktp</th>
													<th>Nama Nasabah</th>
													<th>Jenis Kelamin</th>
													<th>No Hp</th>
													<th>Email</th>
													<th>Nama Bank</th>
													<th>No Rekening</th>

													<th>Action</th>
												</tr>
											</thead>
											<tbody><?php $no = 1;
													foreach ($nasabah_data as $nasabah) {
													?>
													<tr>
														<td><?= $no++ ?></td>
														<td>
															<?php if ($nasabah->photo_diri == '' || $nasabah->photo_diri == null) { ?>
																<img src="<?= base_url() ?>temp/nasabah/default.jpg" width="60px" height="auto" />
															<?php } else { ?>
																<img src="<?= base_url() ?>temp/nasabah/<?php echo $nasabah->photo_diri ?>" width="60px" height="auto" />
															<?php } ?>
														</td>
														<td><?php echo $nasabah->no_ktp ?></td>
														<td><?php echo $nasabah->nama_nasabah ?></td>
														<td><?php echo $nasabah->jenis_kelamin ?></td>
														<td><?php echo $nasabah->no_hp ?></td>
														<td><?php echo $nasabah->email ?></td>
														<td><?php echo $nasabah->nama_bank ?></td>
														<td><?php echo $nasabah->no_rekening ?></td>
														<td style="text-align:center" width="130px">
															<?php
															// echo anchor(site_url('nasabah/read/' . encrypt_url($nasabah->nasabah_id)), '<i class="fa fa-eye" aria-hidden="true"></i>', 'class="btn btn-success btn-sm read_data"');
															// echo '  ';
															echo anchor(site_url('nasabah/update/' . encrypt_url($nasabah->nasabah_id)), '<i class="fa fa-pencil" aria-hidden="true"></i>', 'class="btn btn-primary btn-sm update_data"');
															echo '  ';
															echo anchor(site_url('nasabah/delete/' . encrypt_url($nasabah->nasabah_id)), '<i class="fa fa-trash" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm delete_data" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
															?>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
