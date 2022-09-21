<!-- ===============  tranding auction style start =============== -->
<div class="live_auction_style__one bg-body section_gap_y_top__2">
	<div class="container">
		<div class="row pb-30">
			<div class="col-lg-12 d-flex align-items-center justify-content-between gap-18 flex-wrap flex-lg-nowrap ">
				<h2 class="section_title__1 fw-bold">
					<span class="text-nowrap">Hot Novel Update</span>
				</h2>
				<div class="section__line d-lg-block d-none"></div>
				<div class="section__actions d-flex gap-4">
					<div class="slider__navigation d-flex gap-2">
						<div class="live_auction__prev navigation__btn btn__prev">
							<svg width="8" height="14" viewBox="0 0 8 14" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M6.75 13.1677L1.81066 8.22739C1.22734 7.64395 1.22734 6.68924 1.81066 6.1058L6.75 1.16553"
									stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
						</div>
						<div class="live_auction__next navigation__btn btn__next">
							<svg width="7" fill="none" height="14" viewBox="0 0 7 14"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M0.75 13.1677L5.68934 8.22739C6.27266 7.64395 6.27266 6.68924 5.68934 6.1058L0.75 1.16553"
									stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
						</div>
					</div>
					<a href="<?= base_url() ?>web/daftar_novel" class="btn-rounded-v1 varient-2">
						<span class="text-nowrap">View all</span>
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M1.25 6H11.25" stroke-width="1.2" stroke-linecap="round"
								stroke-linejoin="round" />
							<path d="M6.25 1L11.25 6L6.25 11" stroke-width="1.2" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
					</a>
				</div>
			</div>
		</div>
		<div class="swiper live_auction_slider__one">
			<div class="swiper-wrapper">
				<?php foreach ($novel as $data) : ?>
				<div class="swiper-slide">
					<div class="auction_card_style__one">
						<div class="auction_card__thumb">
							<a href="<?= base_url() ?>web/detail/<?= encrypt_url($data->novel_id) ?>"><img style="height:180px ;" src="<?= base_url() ?>template/assets/img/novel/<?= $data->thumbnail ?>" alt=""></a>
						</div>
						<div class="nft__info">
							<span class="nft__title" >
								<a href="<?= base_url() ?>web/detail/<?= encrypt_url($data->novel_id) ?>"><?= strlen($data->title) > 20 ? substr($data->title, 0, 20) . '...' : $data->title ?></a>
							</span>
							<div class="current__bid">
								<?php $last_chapter = $this->db->where('novel_id', $data->novel_id)->order_by('novel_chapter_id', 'desc')->limit(1)->get('novel_chapter')->row(); ?>
								<span><?= $last_chapter ? $last_chapter->kode_chapter : 'belum ada chapter' ?></span>
							</div>

							<div class="card_countdown">
								<i class="fa fa-star" style="color: orange;" aria-hidden="true"></i>
								<span>
									<?= $data->rating ?>
								</span>
							</div>
						</div>
						<!-- <div class="auction_card__bottom">
							
						</div> -->
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<!-- ===============  tranding auction style end =============== -->

<!-- ===============  nft gird style one start =============== -->
<div class="nft_grid_style__one bg-body section_gap_y_top__3 overflow-hidden">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="nft_tab_1" role="tabpanel"
						aria-labelledby="nft_pill_1">
						<div class="row">
							<?php foreach($list_novel as $data_novel): ?>
							<?php 
							$chapter = $this->db->where('novel_id', $data_novel->novel_id)->get('novel_chapter')->result();
							?>
							<div class="col-lg-5 col-sm-6" style="margin-top: 15px;">
								<div class="d-flex">
									<a href="<?= base_url() ?>web/detail/<?= encrypt_url($data_novel->novel_id) ?>">
										<img style="height: 150px; width:110px;" src="<?= base_url() ?>template/assets/img/novel/<?= $data_novel->thumbnail ?>"
										alt="">
									</a>
									<div>
										<h5 class="nft-title novel-title" style="height: 50px;"><a href="<?= base_url() ?>web/detail/<?= encrypt_url($data_novel->novel_id) ?>"><?php echo strlen($data_novel->title) > 20 ? substr($data_novel->title, 0, 20) . '...' : $data_novel->title ?></a></h5>

										<ul class="nav-chapter-list">
											<?php $chapters = $this->db->where('novel_id', $data_novel->novel_id)->get('novel_chapter', 5)->result(); ?>
											<?php if (count($chapters) > 0) { ?>
												<?php foreach ($chapters as $chapter) : ?>
												<li class="list-chapter">
													<a class="list-chapter-link" href="<?= base_url() ?>web/read/<?= encrypt_url($chapter->novel_chapter_id) ?>"><?= $chapter->kode_chapter ?></a>
													<span class="chapter-released"><?= time_elapsed_string($chapter->created_at) ?></span>
												</li>
												<?php endforeach; ?>
											<?php } else { ?>
												<li class="list-chapter">
													<a class="list-chapter-link">Belum ada chapter</a>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="more-load-wrap text-center mt-50">
						<a href="<?= base_url() ?>web/daftar_novel" class="load-more-btn">
							<svg width="18" height="19" fill="none" viewBox="0 0 18 19"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M11.775 3.61794C11.0224 3.39694 10.192 3.25244 9.27502 3.25244C5.13143 3.25244 1.77502 6.55046 1.77502 10.622C1.77502 14.702 5.13143 18 9.27502 18C13.4186 18 16.775 14.702 16.775 10.6305C16.775 9.11747 16.3079 7.70646 15.512 6.53346"
									stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M12.848 3.82201L10.348 1" stroke-width="1.8" stroke-linecap="round"
									stroke-linejoin="round" />
								<path d="M12.8478 3.82202L9.93256 5.91303" stroke-width="1.8" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
							View all items
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
			<div class="accordion-item sidebar_status__filter sidebar__filter ">
                        <h2 class="accordion-header sidebar__header" id="filterHeadingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapseOne" aria-expanded="true" aria-controls="filter-collapseOne">
                            Grup Telegram
                          </button>
                        </h2>
                        <div id="filter-collapseOne" class="accordion-collapse collapse show" aria-labelledby="filterHeadingOne">
                          <div class="accordion-body sidebar__body">
							     <a href="https://t.me/bacanovelblbype" target="_blank"><img src="<?= base_url() ?>template/web/assets/images/tele.png" alt=""></a>         
                          </div>
                        </div>
                    </div>

				<!-- sidebar category filter -->
				<div class="accordion-item sidebar_collections__filter sidebar__filter ">
					<h2 class="accordion-header sidebar__header" id="filterHeadingFour">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#filter-collapseFour" aria-expanded="true"
							aria-controls="filter-collapseFour">
							Genre
						</button>
					</h2>
					<div id="filter-collapseFour" class="accordion-collapse collapse show"
						aria-labelledby="filterHeadingFour">
						<div class="accordion-body sidebar__body">
							<ul>
								<?php foreach($genre as $data_genre) : ?>
								<li class="single__col">
									<label>
										<span class="col__right">
											<span class="cate_icon">
												<svg width="17" height="18" viewBox="0 0 17 18" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M7.49907 17.0003H9.42618C10.1603 17.0003 10.6345 16.4803 10.4968 15.8455L10.1833 14.4614H6.742L6.42845 15.8455C6.2908 16.442 6.81082 17.0003 7.49907 17.0003Z"
														stroke="currentColor" stroke-linecap="round"
														stroke-linejoin="round"></path>
													<path
														d="M10.1834 14.4537L11.5064 13.276C12.2482 12.6183 12.2788 12.1595 11.6899 11.4177L9.35751 8.45822C8.86809 7.8388 8.06512 7.8388 7.5757 8.45822L5.24328 11.4177C4.65444 12.1595 4.65444 12.6413 5.42681 13.276L6.74979 14.4537"
														stroke="currentColor" stroke-linecap="round"
														stroke-linejoin="round"></path>
													<path d="M8.46289 8.29736V10.2321" stroke="currentColor"
														stroke-linecap="round" stroke-linejoin="round"></path>
													<path
														d="M7.80551 3.76259L7.20902 3.16608C6.8496 2.80665 6.8496 2.2255 7.20902 1.86608L7.80551 1.26957C8.16493 0.910145 8.74612 0.910145 9.10554 1.26957L9.70203 1.86608C10.0614 2.2255 10.0614 2.80665 9.70203 3.16608L9.10554 3.76259C8.74612 4.12201 8.16493 4.12201 7.80551 3.76259Z"
														stroke="currentColor" stroke-linecap="round"
														stroke-linejoin="round"></path>
													<path
														d="M14.154 7.29541H14.9952C15.4999 7.29541 15.9129 7.70837 15.9129 8.21309V9.05427C15.9129 9.55899 15.4999 9.972 14.9952 9.972H14.154C13.6493 9.972 13.2363 9.55899 13.2363 9.05427V8.21309C13.2363 7.70837 13.6493 7.29541 14.154 7.29541Z"
														stroke="currentColor" stroke-linecap="round"
														stroke-linejoin="round"></path>
													<path
														d="M2.75888 7.29541H1.91767C1.41295 7.29541 1 7.70837 1 8.21309V9.05427C1 9.55899 1.41295 9.972 1.91767 9.972H2.75888C3.2636 9.972 3.67655 9.55899 3.67655 9.05427V8.21309C3.67655 7.70837 3.2636 7.29541 2.75888 7.29541Z"
														stroke="currentColor" stroke-linecap="round"
														stroke-linejoin="round"></path>
													<path d="M13.4564 7.5174L9.40332 3.46436" stroke="currentColor"
														stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M3.45508 7.5174L7.50814 3.46436" stroke="currentColor"
														stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>

											</span>
											<ins class="col__name">
												<form action="<?= base_url() ?>web/daftar_novel" method="get">
													<input type="hidden" name="genre[]" value="<?= $data_genre->genre_id ?>">
													<button class="btn-genre" type="submit">
													<?= $data_genre->nama_genre ?></button>
												</form> 
											</ins>
										</span>
										<!-- <input type="checkbox"> -->
										<!-- <span class="check__circle"></span> -->
									</label>
								</li> 
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ===============  nft gird style one end =============== -->
