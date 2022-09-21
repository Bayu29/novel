<!-- ===============  breadcrumb style start =============== -->
<div class="breadcrumb_style__two bg-body-2">
	<div class="container">
		<div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
			<a href="<?= site_url() ?>" class="back__btn">
				<svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11 6.5H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
					<path d="M6 11.5L1 6.5L6 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
				</svg>
				<span>Back to home</span>
			</a>

			<ul class="d-flex page__list">
				<li><a href="<?= site_url() ?>">Home</a></li>
				<li><a href="<?= base_url() ?>web/detail/<?= encrypt_url($novel_chapter->novel_id) ?>"><?= $novel_chapter->title ?></a></li>
				<li><a href="<?= base_url() ?>web/read/<?= encrypt_url($novel_chapter->novel_chapter_id) ?>"><?= $novel_chapter->nama_chapter ?></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- ===============  breadcrumb style end =============== -->

<div class="nft_details__style pt-60 bg-body-2 section_gap_y_bottom__1">
	<div class="container">
		<div class="row gx-7 gy-4 position-relative justify-content-between">
			<div class="chapter-novel-content" style="text-align: justify;">
				<?= $novel_chapter->isi_chapter ?>
			</div>
		</div>
	</div>
</div>
