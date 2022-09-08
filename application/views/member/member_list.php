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
					<h4 class="panel-title">Data Member</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="box-body">
									<div class='row'>
										<div class='col-md-9'>
											<div style="padding-bottom: 10px;">
												<?php echo anchor(site_url('member/create'), '<i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm tambah_data"'); ?>
											</div>
										</div>
									</div>
									<div class="box-body" style="overflow-x: scroll; ">
										<table id="data-table" class="table table-bordered table-hover table-td-valign-middle">
											<thead>
												<tr>
													<th>No</th>
													<th>Photo</th>
													<th>Nama</th>
													<th>Email</th>
													<th>No Hp</th>
													<th>Jk Kelamin</th>
													<th>Alamat</th>
													<th>Saldo Akun</th>
													<th>Is Aktif</th>
													<th>History Pembelian</th>
													<th>History Topup</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody><?php $no = 1;
													foreach ($member_data as $member) {
													?>
													<tr>
														<td><?= $no++ ?></td>
														<td>
															<?php if ($member->photo == '' || $member->photo == null) { ?>
																<img src="<?= base_url() ?>template/assets/img/member/default.png" width="60px" height="auto"  />
															<?php } else { ?>
																<img src="<?= base_url() ?>template/assets/img/member/<?php echo $member->photo ?>" width="60px" height="auto"  />
															<?php } ?>
															</a>
														</td>
														<td><?php echo $member->nama ?></td>
														<td><?php echo $member->email ?></td>
														<td><?php echo $member->no_hp ?></td>
														<td><?php echo $member->jk_kelamin ?></td>
														<td><?php echo $member->alamat ?></td>
														<td><?php echo rupiah($member->saldo_akun) ?></td>
														<td><?php echo $member->is_aktif ?></td>
														<td><a href="" class="btn btn-success btn-sm " delete=""><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
														<td><a href="" class="btn btn-success btn-sm " delete=""><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
														
														<td style="text-align:center" width="100px">
															<?php
															echo anchor(site_url('member/update/' . encrypt_url($member->member_id)), '<i class="fa fa-pencil" aria-hidden="true"></i>', 'class="btn btn-primary btn-sm update_data"');
															echo '  ';
															echo anchor(site_url('member/delete/' . encrypt_url($member->member_id)), '<i class="fa fa-trash" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm delete_data" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
