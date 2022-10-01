<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Deposit</li>
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
					<h4 class="panel-title">Data Deposit</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="box-body">
									<div class="box-body" style="overflow-x: scroll; ">
										<table id="data-table" class="table table-bordered table-hover table-td-valign-middle">
											<thead>
												<tr>
													<th>No</th>
													<th>No Referensi</th>
													<th>User</th>
													<th>Nominal</th>
													<th>Metode Pembayaran</th>
													<th>Kode Bayar</th>
													<th>Status</th>
													<th>Log response callback</th>
													<th>Dibayar pada</th>
													<th>Tgl kadaluarsa</th>
													<th>Tgl Deposit</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody><?php $no = 1;
													foreach ($deposits as $deposit) {
													?>
													<tr>
														<td><?= $no++ ?></td>
														<td><?= $deposit->deposit_reference ?></td>
														<td><?= $deposit->nama ?></td>
														<td><?= number_format($deposit->nominal, 0, '.', '.') ?></td>
														<td><?= $deposit->metode_pembayaran ?></td>
														<td><?= $deposit->kode_bayar ?></td>
														<td>
															<?php if ($deposit->status == 'pending') {?>
																<label class="label label-warning" >Belum Dibayar</label>	
															<?php } elseif ($deposit->status == 'success') { ?>
																<label class="label label-success" >Dibayar</label>
															<?php } elseif($deposit->status == 'failed') { ?>
																<label class="label label-danger">Failed</label>
															<?php } elseif($deposit->status == 'canceled') {?>
																<label class="label label-danger">Canceled</label>
															<?php } elseif($deposit->status == 'refunded') { ?>
																<label class="label label-primary">Canceled</label>
															<?php } ?>
														</td>
														<td><?= $deposit->log_response_callback ?></td>
														<td><?= date('d M Y H:i:s', strtotime($deposit->payed_at)) ?></td>
														<td><?= date('d M Y H:i:s', strtotime($deposit->expired_at)) ?></td>
														<td><?= date('d M Y H:i:s', strtotime($deposit->created_at)) ?></td>

														<td style="text-align:center" width="120px">
															<a class="btn btn-success" href="<?= base_url() ?>deposit/detail/<?= $deposit->deposit_id ?>"><i class="fa fa-eye"></i></a>
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
