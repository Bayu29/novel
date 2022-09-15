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
		<div class="row nft_grid__header px-0">
			<div class="col-lg-7">
				<ul class="grid__tabs">
					<li><a href="marketplace-1.html" class="active_nft__grid">Daftar Novel</a></li>
				</ul>
			</div>
		</div>
		<div class="row pt-40 gy-4">
			<div class="col-lg-3">

				<!-- sidebar searchbar -->
				<form action="<?= base_url() ?>web/daftar_novel" method="get">
					<div class="sidebar__searchbar">
						<input type="text" placeholder="Search here" name="search" value="<?= $search ? $search : '' ?>">
						<button type="submit" class="submit__btn">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.35992 13.7206C10.8724 13.7206 13.7198 10.873 13.7198 7.36029C13.7198 3.8476 10.8724 1 7.35992 1C3.84743 1 1 3.8476 1 7.36029C1 10.873 3.84743 13.7206 7.35992 13.7206Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M14.9997 15L11.8516 11.8522" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</button>
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
								<span class="currency"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.13867 11.1503C7.13867 12.0641 7.83992 12.8008 8.71117 12.8008H10.4891C11.247 12.8008 11.8633 12.1562 11.8633 11.3628C11.8633 10.4987 11.4878 10.1941 10.9283 9.99576L8.07367 9.0041C7.51409 8.80576 7.13867 8.50118 7.13867 7.63701C7.13867 6.84368 7.75492 6.1991 8.51284 6.1991H10.2908C11.162 6.1991 11.8633 6.93576 11.8633 7.84951" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M9.49707 5.25V13.75" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M9.5 18C14.1944 18 18 14.1944 18 9.5C18 4.80558 14.1944 1 9.5 1C4.80558 1 1 4.80558 1 9.5C1 14.1944 4.80558 18 9.5 18Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
									Rp</span>

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
								<ul>
									<?php foreach($genres as $i => $data):?>
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
											<input type="checkbox" name="genre[]" <?= $genre[$i] == $data->genre_id ? 'checked' : ''  ?> value="<?= $data->genre_id ?>">
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
					<?php foreach($novels as $novel) : ?>
						<div class="col pt-lg-0 pt-3">
							<div class="auction_card_style__two">
								<div class="auction_card__thumb">
									<a href="nft-details.html">
										<img src="<?= base_url() ?>template/assets/img/novel/<?= $novel->thumbnail ?>" alt="">
									</a>
								</div>
								<div class="nft__disc">
									<a href="author-profile.html" class="nft__creator"><?= $novel->author ?><img src="<?= base_url() ?>assets/images/icons/tick-blue.svg" alt=""></a>
		
									<div class="nft__title">
										<h5><a href="<?= base_url() ?>web/detail/<?= encrypt_url($novel->novel_id) ?>"><?= $novel->title ?></a></h5>
										<ins class="current-price"><span><?= $novel->status ?></span></ins>
									</div>
		
									<div class="nft__bottom">
										<ul class="nft__actions d-flex">
											<li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0.0732541 11.2132L6.47058 0.254439C6.65303 -0.0648577 7.10917 -0.0876645 7.32584 0.208825L9.10477 2.59215C9.61793 3.27636 9.65217 4.20003 9.20743 4.92986L5.39865 11.0307C5.02234 11.6351 4.36096 12 3.64254 12H0.518006C0.118885 11.9886 -0.132008 11.5553 0.0732541 11.2132Z" fill="currentColor"></path>
												<path d="M10.5415 7.55271L8.35206 11.2018C8.1468 11.5439 8.39769 11.9887 8.79681 11.9887H13.1757C13.5748 11.9887 13.8257 11.5553 13.6205 11.2018L11.431 7.55271C11.2372 7.22201 10.7468 7.22201 10.5415 7.55271Z" fill="currentColor"></path>
												</svg></li>
											<li><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92067 1.62177C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69977 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42345 10.66 7.1915 11.297 6.99824 11.3948C6.80115 11.2956 5.58162 10.6685 4.25227 9.67217C2.8336 8.60887 1.38875 7.19728 0.835985 5.63289C0.154691 3.69818 0.922552 1.34972 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
												</svg> <span>3</span>
												</li>
										</ul>
										<div class="nft__countdown"><?= date('d M Y', strtotime($novel->tgl_released)) ?></div>
									</div>
								</div>
								
							</div>
						</div>
					<?php endforeach; ?>
				</div>

				<div class="more-load-wrap text-center mt-50">
					<a href="#" class="load-more-btn varient-2">
						<svg width="18" height="19" fill="none" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.775 3.61794C11.0224 3.39694 10.192 3.25244 9.27502 3.25244C5.13143 3.25244 1.77502 6.55046 1.77502 10.622C1.77502 14.702 5.13143 18 9.27502 18C13.4186 18 16.775 14.702 16.775 10.6305C16.775 9.11747 16.3079 7.70646 15.512 6.53346" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M12.848 3.82201L10.348 1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M12.8478 3.82202L9.93256 5.91303" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
						View all items</a>
				</div>
			</div>
		</div>
	</div>
</div>
