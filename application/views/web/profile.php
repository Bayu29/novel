<div class="author_profiler__wrapper bg-body-2 section_gap_y_bottom__1">
        <div class="author_profile__cover"></div>
        <div class="container">

            <div class="author_profiler__details">
                <div class="ap__header d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="author_image">
                        <img src="<?= base_url() ?>template/web/assets/images/nft/author__xxl.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row pt-40 gy-4">
                <div class="col-lg-3">
                    <div class="author_detail__info">
                    
                        <h3 class="author__name"><?= $user->nama_lengkap ?></h3>
                        <h6 class="author__username"><?= $user->email ?></h6>

                        <div class="followers__wrap">
                            <div class="single__flw">
                                <h5>Saldo User</h5>
                                <span>Rp. <?= number_format($user->saldo,0, '.', '.') ?></span> <br>

								 <a type="button" data-bs-toggle="modal" href="#exampleModal" role="button" class="submit-v2 mt-20">
									Deposit
								</a>
                            </div>
                        </div>

                        <div class="join__date">
                            <strong>Bergabung</strong>
                            <span><?= date('d M Y', strtotime($user->created_at)) ?></span>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="nft_grid__header row mb-40">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills pills-default" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-tab-one" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Deposit</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-tab-two" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">Mutasi</button>
                                </li>
								<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-tab-three" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false">Riwayat Pembelian Chapter</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-tab-one">
                            <div class="row">
                               <table class="table table-dark table-hover" id="DataTables">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Deposit Reference</th>
											<th scope="col">Nominal</th>
											<th scope="col">Metode Pembayaran</th>
											<th scope="col">Status</th>
											<th scope="col">Tanggal Kadaluarsa</th>
											<th scope="col">Tanggal Request</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach($deposit as $data) : ?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td><?= $data->deposit_reference ?></td>
											<td>Rp. <?= number_format($data->nominal,0, '.', '.') ?></td>
											<td><?= $data->metode_pembayaran ?></td>
											<td>
												<?php if ($data->status == 'pending') { ?>
													<label class="label label-warning"><?= $data->status ?></label>
												<?php } elseif ($data->status == 'success') { ?>
													<label class="label label-success"><?= $data->status ?></label> 
												<?php } elseif ($data->status == 'failed' || $data->status == 'expired') {?>
													<label class="label label-danger"><?= $data->status ?></label>
												<?php }?>
											</td>
											<td><?= date('d M Y H:i:s', strtotime($data->expired_at)) ?></td>
											<td><?= date('d M Y H:i:s', strtotime($data->created_at)) ?></td>	
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-tab-two">
                            <div class="row">
                                <table class="table table-dark table-hover" id="DataTables2">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Nominal</th>
											<th scope="col">Saldo</th>
											<th scope="col">Type</th>
											<th scope="col">Catatan</th>
											<th scope="col">Tanggal</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach($mutasi as $data_mutasi) : ?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td>Rp. <?= number_format($data_mutasi->nominal,0, '.', '.') ?></td>
											<td>Rp. <?= number_format($data_mutasi->saldo,0, '.', '.') ?></td>
											<td>
												<?php if ($data->type == 'credit') { ?>
													<label class="label label-success">Credit</label> 
												<?php } elseif ($data->type == 'debit') {?>
													<label class="label label-danger">Debit</label>
												<?php }?>
											</td>
											<td><?= $data_mutasi->note ?></td>
											<td><?= date('d M Y H:i:s', strtotime($data_mutasi->created_at)) ?></td>	
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
                            </div>
                        </div>
						<div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-tab-three">
                            <div class="row">
                                <table class="table table-dark table-hover" id="DataTables3">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Kode Pembelian</th>
											<th scope="col">Novel</th>
											<th scope="col">Novel Chapter</th>
											<th scope="col">Harga</th>
											<th scope="col">Tanggal</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach($pembelian_chapter as $data_pembelian) : ?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td></td>
											<td></td>
											<td></td>
											<td>Rp. <?= number_format($data_pembelian->harga, 0, '.', '.') ?></td>
											<td><?= date('d M Y H:i:s', strtotime($data_pembelian->tanggal_pembelian)) ?></td>	
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deposit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-deposit" action="<?= base_url() ?>user_profile/deposit" method="post">
			<div class="form-group">
				<input type="text" name="nominal" class="form-control" id="nominal" placeholder="Masukkan Nominal">
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="btn-submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?=$this->fungsi->sett_website()->client_key_midtrans?>"></script>

<script>
$(document).ready(function() {
	$('#DataTables').DataTable();
	$('#DataTables2').DataTable();
	$('#DataTables3').DataTable();
});
$('#btn-submit').click(function(){
	$('.btn-close').trigger('click');
	// let mymodal = document.getElementById('exampleModal');
	
	// const modal = new bootstrap.Modal(mymodal);
	
	// mymodal.hide()

	snap.show();
	let nominal = $('#nominal').val();
	let base_url = <?php echo "'" . site_url('/') . "'" ?>;
	$.ajax({
		type:'post',
		url:`${base_url}user_profile/deposit`,
		data: {
			nominal: nominal	
		},
		success:function(result){
			let res = JSON.parse(result);
			snap.hide();
			snap.pay(res.token, {
				onSuccess: function(result){console.log('success');console.log(result);},
				onPending: function(result){console.log('pending');console.log(result);},
				onError: function(result){console.log('error');console.log(result);},
				onClose: function(){console.log('customer closed the popup without finishing the payment');}
			});
		}
	});
});
</script>
