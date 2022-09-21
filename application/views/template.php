<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title><?= ucfirst($this->fungsi->sett_website()->nama_website) ?> - <?= $this->fungsi->sett_website()->deskripsi ?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?= base_url() ?>template/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>template/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>template/assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>template/assets/css/style.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>template/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>template/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<link href="<?= base_url() ?>template/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>template/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- Toaster JS -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script src="<?= base_url() ?>template/assets/plugins/pace/pace.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
</head>

<body>
	<div class="modal fade" id="modal-dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Update Password</h4>
				</div>
				<form action="<?= base_url() ?>user/ganti_password/<?= $this->fungsi->user_login()->user_id  ?>" method="post" class="form">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Password</label>
							<input id="password" class="form-control" name="password" type="password" pattern="^\S{5,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 6 Karakter' : ''); if(this.checkValidity()) form.passcon.pattern = this.value;" required value="<?= set_value('password') ?>">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Confirmasi Password</label>
							<input class="form-control" id="passcon" name="passcon" type="password" pattern="^\S{5,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Masukkan Password Yang Sama' : '');" required value="<?= set_value('passcon') ?>">
						</div>
					</div>
					<div class="modal-footer">
						<a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
						<button type="submit" class="btn btn-sm btn-success">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- begin #page-loader -->
	<!-- <div id="page-loader" class="fade in"><span class="spinner"></span></div> -->
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					 <a href="<?= base_url() ?>dashboard" class="navbar-brand"><i class="fa fa-book"></i> <?= ucfirst($this->fungsi->sett_website()->nama_website) ?></a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
						<a href="<?= base_url() ?>" target="_blank">
						<img src="<?= base_url() ?>template/assets/web.png" alt="Halaman Website" height="25px">
							Halaman Website
						</a>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?= base_url() ?>template/assets/img/user/admins.png" alt="" />
							<span class="hidden-xs"><?= ucfirst($this->fungsi->user_login()->nama_lengkap) ?></span>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="#modal-dialog" data-toggle="modal">Ganti Password</a></li>
							<li><a href="<?= base_url() ?>auth/logout" onclick="return confirm('Anda Yakin Logout ?')">Log Out</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div id="sidebar" class="sidebar">
			<div data-scrollbar="true" data-height="100%">
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="<?= base_url() ?>template/assets/img/user/admins.png" alt="" /></a>
						</div>
						<div class="info">
							<?= ucfirst($this->fungsi->user_login()->nama_lengkap) ?>
						</div>
					</li>
				</ul>

				<ul class="nav">
					<li class="nav-header">Main Menu</li>
					<li><a href="<?= base_url() ?>dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret pull-right"></b>
							<i class="fa fa-book"></i>
							<span>Data Novel</span>
						</a>
						<ul class="sub-menu">
							<li><a href="<?= base_url() ?>novel">List Novel</a></li>
							<li><a href="<?= base_url() ?>genre">Genre Novel</a></li>
							<li><a href="<?= base_url() ?>type">Type Novel</a></li>
						</ul>
					</li>
					<li><a href="<?= base_url() ?>member"><i class="fa fa-users"></i> <span>Member</span></a></li>
					<li><a href="<?= base_url() ?>pembelian_chapter"><i class="fa fa-money"></i> <span>Transaksi Pembelian Chap</span></a></li>
					<li><a href="<?= base_url() ?>deposit"><i class="fa fa-money"></i> <span>Transaksi Deposit</span></a></li>
					<li><a href="<?= base_url() ?>setting_web/update/Umhxc2ZDeHlpc1JpYWNIUVdzNG1sZz09"><i class="fa fa-globe"></i> <span>Setting Website</span></a></li>
					<?php if ($this->fungsi->user_login()->level_id == 1) { ?>
						<li class="has-sub">
							<a href="javascript:;">
								<b class="caret pull-right"></b>
								<i class="fa fa-cogs"></i>
								<span>Setting</span>
							</a>
							<ul class="sub-menu">
								<li><a href="<?= base_url() ?>user">Data User</a></li>
								<li><a href="<?= base_url() ?>history_login">History Login</a></li>
								<li><a href="<?= base_url() ?>backup">Backup Database</a></li>
							</ul>
						</li>
					<?php } ?>
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="sidebar-bg"></div>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
		<?php if ($this->session->flashdata('message')) : ?>
		<?php endif; ?>

		<div class="flash-data2" data-flashdata2="<?= $this->session->flashdata('error'); ?>"></div>
		<?php if ($this->session->flashdata('error')) : ?>
		<?php endif; ?>
		<?php echo $contents ?>
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>


	</div>

	<script src="<?= base_url() ?>template/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?= base_url() ?>template/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>template/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?= base_url() ?>template/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/assets/js/sweetalert.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/assets/js/sweetalert.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="<?= base_url(); ?>template/assets/js/dataflash.js"></script>
	<script src="<?= base_url() ?>template/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?= base_url() ?>template/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?= base_url() ?>template/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url() ?>template/assets/js/table-manage-default.demo.min.js"></script>
	<script src="<?= base_url() ?>template/assets/js/apps.min.js"></script>
	<!--Toaster JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script>
		$(document).ready(function() {
			App.init();
			TableManageDefault.init();
		});

		<?php if($this->session->flashdata('success')){ ?>
			toastr.success("<?php echo $this->session->flashdata('success'); ?>");
		<?php }else if($this->session->flashdata('error')){  ?>
			toastr.error("<?php echo $this->session->flashdata('error'); ?>");
		<?php }else if($this->session->flashdata('warning')){  ?>
			toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php }else if($this->session->flashdata('info')){  ?>
			toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php } ?>
	</script>
</body>

</html>
