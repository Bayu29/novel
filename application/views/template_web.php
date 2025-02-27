<!doctype html>
<html lang="en">

<head>
	<title><?= ucfirst($this->fungsi->sett_website()->nama_website) ?> - <?= $this->fungsi->sett_website()->deskripsi ?></title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="icon" href="<?= base_url() ?>template/web/assets/images/favicon.png" type="image/gif" sizes="20x20">

	<!-- fancybox -->
	<link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/jquery.fancybox.min.css">
	<!-- bootstarp icon -->
	<link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/dropzone.min.css">
	<!-- bootstarp icon -->
	<link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/bootstrap-icons.css">
	<!-- animate Css -->
	<link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/animate.css">
	<!-- Swiper bundle Css -->
	<link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/swiper-bundle.min.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/bootstrap.min.css">
	<!-- FontAwesome -->
	<!-- <link rel="stylesheet" href="<?= base_url() ?>template\web\assets\fontawesome-free-6.2.0\css\all.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Toaster JS -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<!-- Datatables -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<!-- Select2 -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/responsive.css">
	<link rel="stylesheet" href="<?= base_url() ?>template/web/assets/css/custom.css">

	<!-- jquery latest -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<!-- Select2 -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/ui-lightness/jquery-ui.min.css" integrity="sha512-b2Vnu4ARgWtz47cxvNMnJtelWzsIHnwLf8YlVWa5+kSPbUnWzr+jg6xHcG2ah0amx2nZ94C9cwz/+R06fFzl6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php if ($this->uri->segment(1) == "web" && $this->uri->segment(2) == "read") { ?>

	<body class="theme-dark-active">
	<?php } else { ?>

		<body class="theme-dark-active">
		<?php } ?>
		<!-- mobil__searchbar style -->
		<!-- <div class="mobil__searchbar" id="mobilSearch">
			<div class="input__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="pb-3 d-flex align-items-center justify-content-between">
								<h5>What are you looking for?</h5> <span class="close__search" id="closeSearch">Close</span>
							</div>
							<form action="<?= base_url() ?>web/daftar_novel" method="get">
								<div class="d-flex">
									<input type="text" placeholder="Cari Novel" name="search" value="<?= isset($search) ? (!empty($search) ? $search : '') : '' ?>" id="title">
									<button class="submit-v1 ml-2">Search</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- ===============  header area start =============== -->
		<header>
			<div class="header-area header-defult header_style__one bg-body">
				<div class="nav-container">
					<div class="row justify-content-between">
						<div class="col-xl-4 col-lg-4 col-2 align-items-center d-flex">
							<div class="nav-logo logo-switch d-flex justify-content-between align-items-center">
								<a class="logo-dark" href="<?= base_url() ?>"><img src="<?php echo base_url(); ?>template/assets/img/website/<?= $this->fungsi->sett_website()->logo ?>" alt="logo" style="width:230px"></a>
								<a class="logo-light" href="<?= base_url() ?>"><img src="<?php echo base_url(); ?>template/assets/img/website/<?= $this->fungsi->sett_website()->logo ?>" alt="logo" style="width:230px"></a>
							</div>
							<!-- <div class="nav-search-style-one w-100 d-xl-block d-none">
								<form action="<?= base_url() ?>web/daftar_novel" method="get">
									<span class="search__icon">
										<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8.26847 16.0378C12.2827 16.0378 15.5369 12.7834 15.5369 8.7689C15.5369 4.7544 12.2827 1.5 8.26847 1.5C4.2542 1.5 1 4.7544 1 8.7689C1 12.7834 4.2542 16.0378 8.26847 16.0378Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M17.0002 17.5L13.4023 13.9025" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									<input style="width: 250px;" type="text" placeholder="Cari Novel" name="search" value="<?= isset($search) ? (!empty($search) ? $search : '') : '' ?>" id="title2">
								</form>
							</div> -->
						</div>
						<div class="col-xxl-8 col-lg-8 col-10  d-flex justify-content-end">
							<nav class="main-nav mr-2">
								<div class="inner-logo d-xl-none text-center pt-4">
									<a href="#" class="for-dark"><img src="<?php echo base_url(); ?>template/assets/img/website/<?= $this->fungsi->sett_website()->logo ?>" alt=""></a>
									<a href="#" class="for-light"><img src="<?php echo base_url(); ?>template/assets/img/website/<?= $this->fungsi->sett_website()->logo ?>" alt=""></a>
								</div>
								<ul>
									<li><a href="<?= base_url() ?>">Home</a></li>
									<li><a href="<?= base_url() ?>web/daftar_novel">Daftar Novel</a></li>
									<li><a href="<?= base_url() ?>web/apk">APK</a></li>
									<!-- <li><a href="<?= base_url() ?>web/kontak">Kontak</a></li> -->
									<?php $user = is_login_member(); ?>
									<?php if (!$user) { ?>
										<li><a href="<?= base_url() ?>web/register">Daftar</a></li>
										<li><a href="<?= base_url() ?>web/login">Login</a></li>
									<?php } else { ?>
										<li class="has-child-menu">
											<a href="javascript:void(0)">Hello, <?= $user->nama ?></a>
											<i class="fl flaticon-plus">+</i>
											<ul class="sub-menu">
												<?php $user = $this->db->where('member_id', $user->member_id)->get('member')->row(); ?>
												<li><a href="#">Saldo : Rp. <?= number_format($user->saldo_akun, 0, '.', '.') ?> </a></li>
												<li><a href="<?= base_url() ?>user_profile">Profile</a></li>
												<li><a href="<?= base_url() ?>auth_member/logout">Logout</a></li>

											</ul>
										</li>
									<?php } ?>
								</ul>
							</nav>
							<div class="nav-actions d-flex align-items-center">
								<?php if (is_login_member()) { ?>
									<div class="profile-switch-one mr-2">
										<div class="profile-switch-avater">
											<a href="<?= base_url() ?>user_profile"><img src="https://xsgames.co/randomusers/avatar.php?g=pixel" alt="" style="border-radius: 50%;"></a>
										</div>
									</div>
								<?php }  ?>

								<!-- switch -->
								<label class="theme-switch-one style__one mr-2">
									<input type="checkbox" id="slider" class="check-status">
									<span class="slider round"></span>
								</label>
								<!-- <button type="button" class="nav_search__icon mr-2 d-block d-xl-none mr-2 style__two" id="navSearch">
									<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.26847 16.0378C12.2827 16.0378 15.5369 12.7834 15.5369 8.7689C15.5369 4.7544 12.2827 1.5 8.26847 1.5C4.2542 1.5 1 4.7544 1 8.7689C1 12.7834 4.2542 16.0378 8.26847 16.0378Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M17.0002 17.5L13.4023 13.9025" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</button> -->
								<div class="d-flex align-items-center ml-2">
									<div class="mobile-menu d-flex ">
										<a href="javascript:void(0)" class="hamburger d-block d-xl-none">
											<span class="h-top"></span>
											<span class="h-middle"></span>
											<span class="h-bottom"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- ===============  header area end =============== -->
		<?php echo $contents ?>
		<div class="footer_style__one varient-2 bg-body section_gap_y_top__1">
			<div class="container">
				<div class="row footer__copyright">
					<div class="col-lg-12">
						<p class="text-center">Copyright©2022. Created with love by <a href="<?= base_url() ?>">bacanovelbl.xyz</a></p>
					</div>
				</div>
			</div>
		</div>


		<!-- latest bootstarp bundle -->
		<script src="<?= base_url() ?>template/web/assets/js/bootstrap.bundle.min.js"></script>
		<!-- swiper bundle -->
		<script src="<?= base_url() ?>template/web/assets/js/swiper-bundle.min.js"></script>
		<!-- wow js -->
		<script src="<?= base_url() ?>template/web/assets/js/wow.min.js"></script>
		<!-- nice select -->
		<script src="<?= base_url() ?>template/web/assets/js/jquery.nice-select.min.js"></script>
		<!-- jquery countdown -->
		<script src="<?= base_url() ?>template/web/assets/js/jquery.countdown.js"></script>
		<!-- dropzone js -->
		<script src="<?= base_url() ?>template/web/assets/js/dropzone.min.js"></script>
		<!-- fancybox -->
		<script src="<?= base_url() ?>template/web/assets/js/jquery.fancybox.min.js"></script>
		<!--Toaster JS-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<!-- FontAwesome -->
		<script src="<?= base_url() ?>template\web\assets\fontawesome-free-6.2.0\js\all.min.js"></script>
		<!-- Datatables -->
		<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
		<!-- Sweetalert 2 -->
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<!-- Custom JavaScript -->
		<script async src="<?= base_url() ?>template/web/assets/js/main.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$("#title").autocomplete({
					source: "<?php echo site_url('web/get_autocomplete/?'); ?>"
				});
			});
		</script>

		<script>
			toastr.options = {
				closeDuration: 400,
				closeButton: true,
				progressBar: true,
				fadeOut: 5,
				positionClass: "toast-top-right"
			};

			<?php if ($this->session->flashdata('success')) { ?>
				toastr.success("<?php echo $this->session->flashdata('success'); ?>");
			<?php } else if ($this->session->flashdata('error')) {  ?>
				toastr.error("<?php echo $this->session->flashdata('error'); ?>");
			<?php } else if ($this->session->flashdata('warning')) {  ?>
				toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
			<?php } else if ($this->session->flashdata('info')) {  ?>
				toastr.info("<?php echo $this->session->flashdata('info'); ?>");
			<?php } ?>

			var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
			var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
				return new bootstrap.Tooltip(tooltipTriggerEl)
			})
		</script>


		</body>

</html>
