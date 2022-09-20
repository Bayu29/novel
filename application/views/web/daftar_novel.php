<div class="breadcrumb_style__one bg-body-2 ">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<h2 class="page__title">Daftar Novel</h2>
				<ul class="d-flex justify-content-center page__list">
					<li><a href="<?= base_url() ?>">Home</a></li>
					<li>Daftar Novel</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="marketplace_style_one bg-body-2 section_gap_y_bottom__1 ">
	<div class="container">
		<div class="row pt-40 gy-4">
			<div class="col-lg-3">

				<!-- sidebar searchbar -->
				<form action="<?= base_url() ?>web/daftar_novel" method="get" id="form-search">
					<div class="sidebar__searchbar">
						<form action="<?= base_url() ?>web/daftar_novel" method="get">
							<div class="sidebar__searchbar">
								<input type="text" name="search" placeholder="Cari Novel" id="title" value="<?= isset($search) ? (!empty($search) ? $search : '') : '' ?>">
								<button type="submit" class="submit__btn">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.35992 13.7206C10.8724 13.7206 13.7198 10.873 13.7198 7.36029C13.7198 3.8476 10.8724 1 7.35992 1C3.84743 1 1 3.8476 1 7.36029C1 10.873 3.84743 13.7206 7.35992 13.7206Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M14.9997 15L11.8516 11.8522" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>									
								</button>							
							</div>
						</form>


						<?php if ($status) { ?>
							<input type="hidden" name="status" value="<?= $status ?>">
						<?php } ?>
						<?php if ($from_price) { ?>
							<input type="hidden" name="from_price" value="<?= $from_price ?>">
						<?php } ?>
						<?php if ($to_price) { ?>
							<input type="hidden" name="to_price" value="<?= $to_price ?>">
						<?php } ?>
						<?php if (!empty($genre)) { ?>
							<input type="hidden" name="genre" value="<?= json_encode($genre) ?>">
						<?php } ?>
						<!-- <button type="submit" class="submit__btn">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.35992 13.7206C10.8724 13.7206 13.7198 10.873 13.7198 7.36029C13.7198 3.8476 10.8724 1 7.35992 1C3.84743 1 1 3.8476 1 7.36029C1 10.873 3.84743 13.7206 7.35992 13.7206Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M14.9997 15L11.8516 11.8522" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</button> -->
					</div>
				</form>

				<!-- sidebar status filter -->
				<div class="accordion-item sidebar_status__filter sidebar__filter ">
					<h2 class="accordion-header sidebar__header" id="filterHeadingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapseOne" aria-expanded="true" aria-controls="filter-collapseOne">
							Status
						</button>
					</h2>
					<div id="filter-collapseOne" class="accordion-collapse collapse show" aria-labelledby="filterHeadingOne">
						<div class="accordion-body sidebar__body">
							<form id="form-filter-status" action="<?= base_url() ?>web/daftar_novel" method="get">
								<?php if ($from_price) { ?>
									<input type="hidden" name="from_price" value="<?= $from_price ?>">
								<?php } ?>
								<?php if ($to_price) { ?>
									<input type="hidden" name="to_price" value="<?= $to_price ?>">
								<?php } ?>
								<?php if (!empty($genre)) { ?>
									<input type="hidden" name="genre" value="<?= json_encode($genre) ?>">
								<?php } ?>
								<?php if ($search) { ?>
									<input type="hidden" name="search" value="<?= $search ?>">
								<?php } ?>
								<div class="single__status">
									<label for="status1">
										<input type="radio" value="ongoing" <?= $status ? ($status == 'ongoing' ? 'checked' : '') : '' ?> name="status" id="status1">
										<span></span>
										Ongoing
									</label>
								</div>

								<div class="single__status mt-1">
									<label for="status2">
										<input type="radio" value="completed" <?= $status ? ($status == 'completed' ? 'checked' : '') : '' ?> name="status" id="status2">
										<span></span>
										Completed
									</label>
								</div>

								<button type="submit" class="filter__apply">Apply</button>
							</form>
						</div>
					</div>
				</div>

				<!-- sidebar price filter -->
				<div class="accordion-item sidebar_price__filter sidebar__filter ">
					<h2 class="accordion-header sidebar__header" id="filterHeadingTwo">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapseTwo" aria-expanded="true" aria-controls="filter-collapseTwo">
							Harga per chapter
						</button>
					</h2>
					<div id="filter-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="filterHeadingTwo">
						<div class="accordion-body sidebar__body">
							<form action="<?= base_url() ?>web/daftar_novel" method="get">
								<?php if ($status) { ?>
									<input type="hidden" name="status" value="<?= $status ?>">
								<?php } ?>
								<?php if ($search) { ?>
									<input type="hidden" name="search" value="<?= $search ?>">
								<?php } ?>
								<?php if (!empty($genre)) { ?>
									<input type="hidden" name="genre" value="<?= json_encode($genre) ?>">
								<?php } ?>
							
								<div class="price__range">
									<input type="number" value="<?= $from_price ? $from_price : 0 ?>" name="from_price" min="500" step="5">
									<span>To</span>
									<input type="number" value="<?= $to_price ? $to_price : 0 ?>" name="to_price" min="500" step="5">
								</div>

								<button type="submit" class="filter__apply">Apply</button>
							</form>
						</div>
					</div>
				</div>

				<!-- sidebar category filter -->
				<div class="accordion-item sidebar_collections__filter sidebar__filter ">
					<h2 class="accordion-header sidebar__header" id="filterHeadingFour">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapseFour" aria-expanded="true" aria-controls="filter-collapseFour">
							Genre
						</button>
					</h2>
					<div id="filter-collapseFour" class="accordion-collapse collapse show" aria-labelledby="filterHeadingFour">
						<div class="accordion-body sidebar__body">
							<form action="<?= base_url() ?>web/daftar_novel" method="get">
								<?php if ($from_price) { ?>
									<input type="hidden" name="from_price" value="<?= $from_price ?>">
								<?php } ?>
								<?php if ($to_price) { ?>
									<input type="hidden" name="to_price" value="<?= $to_price ?>">
								<?php } ?>
								<?php if ($search) { ?>
									<input type="hidden" name="search" value="<?= $search ?>">
								<?php } ?>
								<?php if ($status) { ?>
									<input type="hidden" name="status" value="<?= $status ?>">
								<?php } ?>
								<ul>
									<?php foreach ($genres as $i => $data) : ?>
										<li class="single__col">
											<label>
												<span class="col__right">
													<span class="cate_icon">
														<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M7.49907 17.0003H9.42618C10.1603 17.0003 10.6345 16.4803 10.4968 15.8455L10.1833 14.4614H6.742L6.42845 15.8455C6.2908 16.442 6.81082 17.0003 7.49907 17.0003Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M10.1834 14.4537L11.5064 13.276C12.2482 12.6183 12.2788 12.1595 11.6899 11.4177L9.35751 8.45822C8.86809 7.8388 8.06512 7.8388 7.5757 8.45822L5.24328 11.4177C4.65444 12.1595 4.65444 12.6413 5.42681 13.276L6.74979 14.4537" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M8.46289 8.29736V10.2321" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M7.80551 3.76259L7.20902 3.16608C6.8496 2.80665 6.8496 2.2255 7.20902 1.86608L7.80551 1.26957C8.16493 0.910145 8.74612 0.910145 9.10554 1.26957L9.70203 1.86608C10.0614 2.2255 10.0614 2.80665 9.70203 3.16608L9.10554 3.76259C8.74612 4.12201 8.16493 4.12201 7.80551 3.76259Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M14.154 7.29541H14.9952C15.4999 7.29541 15.9129 7.70837 15.9129 8.21309V9.05427C15.9129 9.55899 15.4999 9.972 14.9952 9.972H14.154C13.6493 9.972 13.2363 9.55899 13.2363 9.05427V8.21309C13.2363 7.70837 13.6493 7.29541 14.154 7.29541Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M2.75888 7.29541H1.91767C1.41295 7.29541 1 7.70837 1 8.21309V9.05427C1 9.55899 1.41295 9.972 1.91767 9.972H2.75888C3.2636 9.972 3.67655 9.55899 3.67655 9.05427V8.21309C3.67655 7.70837 3.2636 7.29541 2.75888 7.29541Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M13.4564 7.5174L9.40332 3.46436" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M3.45508 7.5174L7.50814 3.46436" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</span>
													<ins class="col__name"><?= $data->nama_genre ?></ins>
												</span>

												<input type="checkbox" name="genre[]" <?= !empty($genre)  ? (genre_check($genre, $data->genre_id) == true ? 'checked' : '') : '' ?> value="<?= $data->genre_id ?>">
												<span class="check__circle"></span>
											</label>
										</li>
									<?php endforeach;  ?>
								</ul>
								<button type="submit" class="filter__apply">Apply</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-9">
				<div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
					<?php foreach ($novels as $novel) : ?>
						<div class="col pt-lg-0 pt-3">
							<div class="auction_card_style__two">
								<div class="auction_card__thumb">
									<a href="<?= base_url() ?>web/detail/<?= encrypt_url($novel->novel_id) ?>">
										<img src="<?= base_url() ?>template/assets/img/novel/<?= $novel->thumbnail ?>" alt="">
									</a>
								</div>
								<div class="nft__disc">
									<a href="#" class="nft__creator">Author : <?= $novel->author ?><img src="<?= base_url() ?>assets/images/icons/tick-blue.svg" alt=""></a>

									<div class="nft__title" style="height: 60px;">
										<h5><a href="<?= base_url() ?>web/detail/<?= encrypt_url($novel->novel_id) ?>"><?= $novel->title ?></a></h5>
										<ins class="current-price"><span><?= $novel->status ?></span></ins>
									</div>

									<div class="nft__bottom">
										<ul class="nft__actions d-flex">
											<li>
												<i class="fa fa-star" style="color: orange;" aria-hidden="true"></i>
												<span><?= $novel->rating ?></span>
											</li>
										</ul>
										<div class="nft__countdown"><?= date('d M Y', strtotime($novel->tgl_released)) ?></div>
									</div>
								</div>

							</div>
						</div>
					<?php endforeach; ?>
				</div>

				<div class="d-flex justify-content-center more-load-wrap text-center mt-50">
					<?= $this->pagination->create_links(); ?>
				</div>
			</div>

		</div>
	</div>
</div>
