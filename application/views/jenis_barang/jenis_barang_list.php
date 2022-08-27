<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Jenis_barang</li>
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
					<h4 class="panel-title">Data Jenis_barang</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="box-body">
									<div class='row'>
										<div class='col-md-9'>
											<div style="padding-bottom: 10px;">
												<?php echo anchor(site_url('jenis_barang/create'), '<i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm tambah_data"'); ?>
											</div>
										</div>
									</div>
									<div class="box-body" style="overflow-x: scroll; ">
										<table id="data-table" class="table table-bordered table-hover table-td-valign-middle">
											<thead>
												<tr>
													<th>No</th>
													<th>Kode Jenis Barang</th>
													<th>Nama Jenis Barang</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody><?php $no = 1;
													foreach ($jenis_barang_data as $jenis_barang) {
													?>
													<tr>
														<td><?= $no++ ?></td>
														<td><?php echo $jenis_barang->kode_jenis_barang ?></td>
														<td><?php echo $jenis_barang->nama_jenis_barang ?></td>
														<td style="text-align:center">
															<?php
															echo anchor(site_url('jenis_barang/update/' . encrypt_url($jenis_barang->jenis_barang_id)), '<i class="fa fa-pencil" aria-hidden="true"></i>', 'class="btn btn-primary btn-sm update_data"');
															echo '  ';
															echo anchor(site_url('jenis_barang/delete/' . encrypt_url($jenis_barang->jenis_barang_id)), '<i class="fa fa-trash" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm delete_data" Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
