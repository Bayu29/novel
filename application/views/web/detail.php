<!-- ===============  breadcrumb style start =============== -->
<div class="breadcrumb_style__two bg-body-2">
	<div class="container">
		<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
			<a href="index.html" class="back__btn">
				<svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11 6.5H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
					<path d="M6 11.5L1 6.5L6 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
				</svg>
				<span>Back to home</span>
			</a>

			<ul class="d-flex page__list">
				<li><a href="index.html">Home</a></li>
				<li>Product Details</li>
			</ul>
		</div>
	</div>
</div>
<!-- ===============  breadcrumb style end =============== -->

<div class="nft_details__style pt-60 bg-body-2 section_gap_y_bottom__1">
	<div class="container">
		<div class="row gx-7 gy-4 position-relative justify-content-between">
			<div class="col-lg-7 col-sm-10 col-12">
				<div class="nft_details__img">
					<img src="<?= base_url() ?>template/assets/img/novel/<?= $novel->thumbnail ?>" alt="">
				</div>
			</div>
			<div class="col-lg-5">
				<div class="nft__details">
					<div class="nd__header">
						<div class="nd__title">
							<span><?= $novel->author ?></span>
							<h3 class="nft__title"><?= $novel->title ?><span><?= $novel->status ?></span></h3>
						</div>
						<ul class="nd_header__actions">
							<li class="like__btn">
								<button><svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.6985 1.99765L6.99742 2.1692L7.2962 1.99743C7.50862 1.8753 7.71506 1.74828 7.92068 1.62176C8.31313 1.38029 8.70258 1.14066 9.12479 0.940522C9.75536 0.641607 10.2727 0.531212 10.6931 0.653546C13.0724 1.35159 13.8419 3.69978 13.1616 5.63257L13.1605 5.63569C12.6276 7.17674 11.1864 8.58658 9.76123 9.65606C8.42346 10.66 7.1915 11.297 6.99824 11.3948C6.80116 11.2956 5.58162 10.6685 4.25227 9.67217C2.83358 8.60886 1.38872 7.19725 0.835968 5.63284C0.154704 3.69814 0.922572 1.34971 3.29816 0.653425L3.29875 0.653253C3.73433 0.525103 4.24488 0.633423 4.86272 0.928388C5.27058 1.1231 5.64246 1.35367 6.02504 1.59088C6.24316 1.72612 6.46476 1.86351 6.6985 1.99765Z" stroke="currentColor" stroke-width="1.2"></path>
									</svg> <span>52</span></button>
							</li>
							<li>
								<button><svg width="14" height="4" viewBox="0 0 14 4" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7 2.25C7.34518 2.25 7.625 1.97018 7.625 1.625C7.625 1.27982 7.34518 1 7 1C6.65482 1 6.375 1.27982 6.375 1.625C6.375 1.97018 6.65482 2.25 7 2.25Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M12.375 2.25C12.7202 2.25 13 1.97018 13 1.625C13 1.27982 12.7202 1 12.375 1C12.0298 1 11.75 1.27982 11.75 1.625C11.75 1.97018 12.0298 2.25 12.375 2.25Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M1.625 2.25C1.97018 2.25 2.25 1.97018 2.25 1.625C2.25 1.27982 1.97018 1 1.625 1C1.27982 1 1 1.27982 1 1.625C1 1.97018 1.27982 2.25 1.625 2.25Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</button>
							</li>
						</ul>
					</div>
					<ul class="collections">
						<li class="creator">
							<div class="thumb">
								<img src="<?= base_url() ?>template/web/assets/images/nft/avater-sm-one.png" alt="">
							</div>
							<div class="disc">
								<span>Creator</span>
								<h5><?= $novel->author ?></h5>
							</div>
						</li>
						
					</ul>

					<div class="nd_disc__text">
						<p><?= $novel->sinopsis ?></p>
					</div>
					<div class="nd__status">

						<!-- <div class="nft__price">
							<span>Current Bid</span>
							<div class="d-flex align-items-center">
								<span class="eth__icon">
									<img src="<?= base_url() ?>template/web/assets/images/icons/tri-flash-blue.svg" alt="">
								</span>
								<h4>2.40ETH <span>/ $4769.88</span></h4>
							</div>
						</div> -->

						<div class="nft__countdown text-end">
							<span>Tanggal rilis</span> <br>
							<div class="count__down"><span><?= date('d M Y', strtotime($novel->tgl_released)) ?></span></div>
						</div>
					</div>
					<!-- <div class="bid__btn pt-20">
						<a href="#" class="btn-rounded-v6">Place a Bid</a>
					</div> -->

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
								<?php if (count($novel_chapter) > 0) {?>
									<?php foreach($novel_chapter as $data_chapter) : ?>
									<div class="bidder__history">
										<div class="bidder__disc">
											<h5><?= $data_chapter->nama_chapter ?></h5>
											<p><?= date('d M Y H:is', strtotime($data_chapter->created_at)) ?></p>
										</div>
									</div>
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
