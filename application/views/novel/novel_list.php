<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Novel</li>
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
					<h4 class="panel-title">Data Novel</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="box-body">
									<div class='row'>
										<div class='col-md-9'>
											<div style="padding-bottom: 10px;">
												<?php echo anchor(site_url('novel/create'), '<i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm tambah_data"'); ?>
											</div>
										</div>
									</div>
									<div class="box-body" style="overflow-x: scroll; ">
										<table id="data-table" class="table table-bordered table-hover table-td-valign-middle">
											<thead>
												<tr>
													<th>No</th>
													<th>Thumbnail</th>
													<th>Status</th>
													<th>Genre</th>
													<th>Title</th>
													<th>Tgl Released</th>
													<th>Total Chapter</th>
													<th>Author</th>
													<th>Sinopsis</th>
													<th>Rating</th>
													<th>Type</th>
													<th>Update On</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody><?php $no = 1;
													foreach ($novel_data as $novel) {
													?>
													<tr>
														<td><?= $no++ ?></td>
														<td>
															<?php if ($novel->thumbnail == '' || $novel->thumbnail == null) { ?>
																<img src="<?= base_url() ?>template/assets/img/novel/default.png" width="60px" height="auto" />
															<?php } else { ?>
																<img src="<?= base_url() ?>template/assets/img/novel/<?php echo $novel->thumbnail ?>" width="60px" height="auto" />
															<?php } ?>
														</td>
														<td>
															<?php if ($novel->status == 'Completed') { ?>
																<button href="" class="btn btn-success btn-sm " delete=""> Completed</button>
															<?php } else { ?>
																<button href="" class="btn btn-warning btn-sm " delete=""> Ongoing</button>
															<?php } ?>
														</td>
														<td>
															<?php $genre = $this->db->query("SELECT * From novel_genre join genre on genre.genre_id=novel_genre.genre_id where novel_id='$novel->novel_id'")->result();
															foreach ($genre as $rows) {
																echo '<span class="badge bg-danger">' . $rows->nama_genre . '</span>';
															}
															?>
														</td>
														<td><?php echo $novel->title ?></td>
														<td><?php echo $novel->tgl_released ?></td>
														<td><?php echo $novel->total_chapter ?> Chapter</td>
														<td><?php echo $novel->author ?></td>
														<td><?php echo substr($novel->sinopsis,0,100) ?> ....</td>
														<td><i style="color: orange;" class="fa fa-star" aria-hidden="true"></i> <?php echo $novel->rating ?></td>
														<td><?php echo $novel->nama_type ?></td>
														<td><?php echo $novel->update_on ?></td>

														<td style="text-align:center" width="120px">
															<a href="<?= base_url() ?>novel/chapter/<?= encrypt_url($novel->novel_id) ?>" class="btn btn-success btn-sm " delete=""><i class="fa fa-eye" aria-hidden="true"></i></a>
															<?php
															echo anchor(site_url('novel/update/' . encrypt_url($novel->novel_id)), '<i class="fa fa-pencil" aria-hidden="true"></i>', 'class="btn btn-primary btn-sm update_data"');
															echo '  ';
															echo anchor(site_url('novel/delete/' . encrypt_url($novel->novel_id)), '<i class="fa fa-trash" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm delete_data" Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
