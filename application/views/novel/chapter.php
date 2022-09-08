<div id="content" class="content">
	<div class="row">
		<div class="col-md-4 ui-sortable">
			<div class="panel panel-inverse" data-sortable-id="index-1">
				<div class="panel-heading">
					<h4 class="panel-title">Detail Novel</h4>
				</div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<td style="width: 30%;"><img src="<?= base_url() ?>template/assets/img/novel/<?php echo $thumbnail ?>" width="150px" height="auto" /></td>
							<td>
								<p> <b>Title :</b> <?php echo $title ?></p>
								<p><b>Status :</b> <?php echo $status ?></p>
								<?php $genre = $this->db->query("SELECT * From novel_genre join genre on genre.genre_id=novel_genre.genre_id where novel_id='$novel_id'")->result(); ?>

								<p><b>Genre :</b> <?php foreach ($genre as $rows) {
														echo '<span class="badge bg-danger">' . $rows->nama_genre . '</span>';
													} ?> </p>
								<p><b>Tgl Released :</b> <?php echo $tgl_released ?></p>
								<p><b>Total Chap :</b> <?php echo $total_chapter ?></p>
								<p><b>Author :</b> <?php echo $author ?></p>
								<p><b>Rating :</b> <i style="color: orange;" class="fa fa-star" aria-hidden="true"></i> <?php echo $rating ?></p>
								<p><b>Type :</b> <?php echo $nama_type ?></p>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<b>Sinopsis</b> <br> <br>
								<p style="text-align: justify;"><?php echo $sinopsis ?></p>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-8 ui-sortable">
			<div class="panel panel-inverse" data-sortable-id="index-1">
				<div class="panel-heading">
					<h4 class="panel-title">Daftar Chapter</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="box-body">
									<div class='row'>
										<div class='col-md-9'>
											<div style="padding-bottom: 10px;">
												<a href="<?= base_url() ?>novel_chapter/create_chapter/<?= encrypt_url($novel_id); ?>" class="btn btn-danger btn-sm tambah_data"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Chap</a>
											</div>
										</div>
									</div>
									<div class="box-body" style="overflow-x: scroll; ">
										<table id="data-table" class="table table-bordered table-hover table-td-valign-middle">
											<thead>
												<tr>
													<th>No</th>
													<th>Chapter</th>
													<th>Harga</th>
													<th>Isi Chapter</th>
													<th>Tanggal</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1; ?>
												<?php foreach ($novel_chapter as $data) : ?> 
												<tr>
													<td><?= $no++ ?></td>
													<td><button class="btn btn-success btn-sm" style="margin-bottom: 5px;width: 120px;"><i class="fa fa-wpforms" aria-hidden="true"></i> <?= $data->nama_chapter ?></button></td>
													<td>Rp. <?= number_format($data->harga,0, '.', '.'); ?></td>
													<td><?php echo strip_tags(substr($data->isi_chapter, 0, 100)) . '...' ?></td>
													<td><?= date('Y-m-d', strtotime($data->created_at)) ?></td>
													<td>
														<a href="<?= base_url() ?>novel_chapter/update/<?= encrypt_url($data->id) ?>" class="btn btn-primary btn-sm update_data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
														<a href="<?= base_url() ?>novel_chapter/delete/<?= encrypt_url($data->id)?>/<?=encrypt_url($data->novel_id)?>" class="btn btn-danger btn-sm delete_data" delete=""><i class="fa fa-trash" aria-hidden="true"></i></a>
													</td>
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
		</div>
	</div>
</div>
