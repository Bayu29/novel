<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Deposit</li>
	</ol>
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
					<h4 class="panel-title">Data Deposit</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class='row'>
								<div class='col-md-9'>
									<div style="padding-bottom: 10px;">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><i class="fa fa-money" style="margin-right:5px;"></i> Ubah Status Deposit</button>
									</div>
								</div>
							</div>
							<div class="x_panel">
								<div class="box-body">
									<div class="box-body" style="overflow-x: scroll; ">
										<table class="table">
											<tr>
												<th>Deposit : </th>
												<td><?= $deposit->deposit_id ?></td>
											</tr>
											<tr>
												<th>No Referensi : </th>
												<td> <?= $deposit->deposit_reference ?></td>
											</tr>
											<tr>
												<th>User : </th>
												<td> <?= $deposit->nama_lengkap ?></td>
											</tr>
											<tr>
												<th>Nominal : </th>
												<td>Rp. <?= number_format($deposit->nominal,0, '.', '.') ?></td>
											</tr>
											<tr>
												<th>Metode Pembayaran : </th>
												<td><?= $deposit->metode_pembayaran ?></td>
											</tr>
											<tr>
												<th>Kode Bayar</th>
												<td><?= $deposit->kode_bayar ? $deposit->kode_bayar : '-' ?></td>
											</tr>
											<tr>
												<th>Status</th>
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
											</tr>
											<tr>
												<th>Tgl Kadaluarsa</th>
												<td><?= date('d M Y H:i:s', strtotime($deposit->expired_at)) ?></td>
											</tr>
											<tr>
												<th>Tgl Bayar</th>
												<td><?= date('d M Y H:i:s', strtotime($deposit->payed_at)) ?></td>
											</tr>
											<tr>
												<th>Tgl Deposit</th>
												<td><?= date('d M Y H:i:s', strtotime($deposit->created_at)) ?></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Ubah Status</h4>
                            </div>
                            <div class="modal-body" style="text-align:center;">
								<form id="formStatus" action="<?= base_url() ?>Deposit/change_status/<?= $deposit->deposit_id ?>" method="post">
									<div id="body">
										<div class="row">
											<div class="col-md-6 col-md-offset-3">
												<div class="form-group">
													<label>Status</label>
													<select class="form-control" name="status" id="status">
														<option>Pilih Status</option>
														<option value="success">Dibayar</option>
														<option value="failed">Gagal</option>
														<option value="canceled">Dibatalkan</option>
														<option value="refunded">Refund</option>
													</select>
												</div>
												<div class="form-group">
													<label>Catatan</label>
													<textarea id="note" class="form-control" name="note" placeholder="Catatan"></textarea>
												</div>
											</div>
										</div>
									</div>
								</form>
                            </div>
                            <div class="modal-footer" style="text-align:center;">
                                <button type="button" class="btn btn-primary" id="proses_ubahstatus">Ubah Status</button>
                            </div>
                        </div>
                     </div>
                </div>

<script>
	$('#proses_ubahstatus').click(function(){
		$('#formStatus').submit();
	})
</script>
