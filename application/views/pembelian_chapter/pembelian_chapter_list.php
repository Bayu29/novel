<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Pembelian_chapter</li>
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
					<h4 class="panel-title">Data Pembelian_chapter</h4>
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
													<th>Kode Pembelian</th>
													<th>Nama Member</th>
													<th>Novel</th>
													<th>Chapter</th>
													<th>Harga</th>
													<th>Tanggal Pembelian</th>
												</tr>
											</thead>
											<tbody><?php $no = 1;
													foreach ($pembelian_chapter_data as $pembelian_chapter) {
													?>
													<tr>
														<td><?= $no++ ?></td>
														<td><?php echo $pembelian_chapter->kode_pembelian ?></td>
														<td><?php echo $pembelian_chapter->nama ?></td>
														<td><?php echo $pembelian_chapter->title ?></td>
														<td>Chapter <?php echo $pembelian_chapter->chapter ?> </td>
														<td><?php echo $pembelian_chapter->harga ?></td>
														<td><?php echo $pembelian_chapter->tanggal_pembelian ?></td>
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
