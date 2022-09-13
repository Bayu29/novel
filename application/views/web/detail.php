<div class="author_profiler__wrapper bg-body-2 section_gap_y_bottom__1">
	<div class="breadcrumb_style__two bg-body-2">
		<div class="container">
			<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
				<a href="<?= base_url() ?>/" class="back__btn">
					<svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11 6.5H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M6 11.5L1 6.5L6 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
					<span>Back to home</span>
				</a>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row pt-40 gy-4">
			<div class="offset-lg-1 col-lg-4">
				<div>
					<img src="<?= base_url() ?>template/assets/img/novel/<?= $novel->thumbnail ?>" alt="" style="width: 100%; height:550px;border-radius:5%;">
				</div>
			</div>

			<div class="col-lg-6">
				<div class="nft__details">
					<div class="nd__header">
						<div class="nd__title">
							<span>Author : <?= $novel->author ?></span>
							<h3 class="nft__title"><?= $novel->title ?> <span><?= $novel->status ?></span></h3>
						</div>
						<ul class="nd_header__actions">
							<li class="like__btn">
								<button><i class="fa fa-star" style="color: orange;" aria-hidden="true"></i> <span><?= $novel->rating ?></span></button>
							</li>
						</ul>
					</div>
					<ul class="collections">
						<li class="creator">
							<div class="disc">
								<span>Tanggal Released</span>
								<h5><?= $novel->tgl_released ?></h5>
							</div>
						</li>
						<li class="creator">
							<div class="disc">
								<span>Total Chapter</span>
								<h5><?= $novel->total_chapter ?> Chapter</h5>
							</div>
						</li>
					</ul>

					<div class="nd_disc__text">
						<p style="text-align: justify;"><?= $novel->sinopsis ?></p>
					</div>

					<div class="accordion-item nd_single__block author__details mt-40">
						<h2 class="accordion-header sidebar__header" id="blockHeadingTwo">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#block-collapseTwo" aria-expanded="true">
								<svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.16992 1H16.0032" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M5.16992 6H16.0032" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M5.16992 11H16.0032" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M1 1H1.01111" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M1 6H1.01111" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M1 11H1.01111" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
								<span>Chapter</span>
							</button>
						</h2>
						<div id="block-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="blockHeadingTwo">
							<div class="accordion-body sidebar__body">
								<?php if (count($novel_chapter) > 0) { ?>
									<?php foreach ($novel_chapter as $data_chapter) : ?>

										<?php
										$user_id = $this->session->userdata('userid');
										$this->db->where('member_id', $user_id);
										$check_chapter = $this->db->where('novel_chapter_id', $data_chapter->novel_chapter_id)->get('pembelian_chapter')->row();
										?>

										<?php if ($check_chapter) { ?>
											<div class="bidder__history">
												<a href="<?= base_url() ?>web/read/<?= encrypt_url($data_chapter->novel_chapter_id) ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Baca chapter">
													<div class="bidder__disc">
														<h5><?= $data_chapter->nama_chapter ?></h5>
														<p><?= date('d M Y H:i:s', strtotime($data_chapter->created_at)) ?></p>
													</div>
												</a>
											</div>
										<?php } else { ?>
											<div class="bidder__history locked-chapter">
												<a class="locked-chapter-link" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Unlock chapter" disabled>
													<div class="bidder__disc mr-3">
														<h5><button type="button" onclick="unlock('<?= $data_chapter->novel_chapter_id ?>', '<?= $data_chapter->nama_chapter ?>')" class="btn btn-secondary ml-3"><i class="fa-solid fa-unlock"></i></button> <?= $data_chapter->nama_chapter ?></h5>
														<p><?= date('d M Y H:i:s', strtotime($data_chapter->created_at)) ?></p>
													</div>
												</a>
											</div>
										<?php } ?>

									<?php endforeach; ?>
								<?php  } else { ?>
									<div class="bidder__history">
										<div class="bidder__disc">
											<h5>Belum Ada chapter untuk novel ini</h5>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>

<script>
	function unlock(id, chapter_name) {
		let payload = {
			chapter_id: id
		}
		let base_url = <?php echo "'" . site_url('/') . "'" ?>;
		let url = base_url + 'web/unlock_chapter/' + id;
		Swal.fire({
			title: "<h5 style='color:black'>Apakah anda yakin?</h5>",
			color: '#000',
			text: `Membeli chapter ${chapter_name}`,
			type: "warning",
			customClass: 'text-warp',
			confirmButtonColor: "#0bd915",
			showCancelButton: true,
			confirmButtonText: "Beli",
			showLoaderOnConfirm: true,
			preConfirm: login => {
				return $.ajax({
					type: "post",
					data: payload,
					url: url,
				}).then(response => {
					if (response.success) {
						Swal.fire({
							toast: true,
							title: 'Success',
							text: `Berhasil melakukan pembelian chapter.`,
							type: "success",
							animation: true,
							timer: 4000,
							timerProgressBar: true,
						}).then(res => {
							window.location.reload()
						})
					} else {
						Swal.fire({
							toast: true,
							title: 'Error!',
							text: `Gagal melakukan pembelian chapter.`,
							type: "error",
							animation: true,
							timer: 4000,
							timerProgressBar: true,
						});
					}
				})
			}
		}).then(result => {
			if (result.value) {
				Swal.fire({
					toast: true,
					title: "Success",
					text: "Berhasil melakukan pembelian chapter.",
					type: 'success'
				}).then(res => {
					window.location.reload();
				})
			}
		})
	}
</script>
