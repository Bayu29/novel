<div id="content" class="content">
	<div class="row">
		<center>
			<script type="text/javascript">
				//fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
				function tampilkanwaktu() {
					//buat object date berdasarkan waktu saat ini
					var waktu = new Date();
					//ambil nilai jam, 
					//tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
					var sh = waktu.getHours() + "";
					//ambil nilai menit
					var sm = waktu.getMinutes() + "";
					//ambil nilai detik
					var ss = waktu.getSeconds() + "";
					//tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
					document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
				}
			</script>

			<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
				<center>
					<h1>
						<span id="clock"></span>
					</h1>
				</center>
				<?php
				$hari = date('l');
				/*$new = date('l, F d, Y', strtotime($Today));*/
				if ($hari == "Sunday") {
					echo "Minggu";
				} elseif ($hari == "Monday") {
					echo "Senin";
				} elseif ($hari == "Tuesday") {
					echo "Selasa";
				} elseif ($hari == "Wednesday") {
					echo "Rabu";
				} elseif ($hari == "Thursday") {
					echo ("Kamis");
				} elseif ($hari == "Friday") {
					echo "Jum'at";
				} elseif ($hari == "Saturday") {
					echo "Sabtu";
				}
				?>,
				<?php
				$tgl = date('d');
				echo $tgl;
				$bulan = date('F');
				if ($bulan == "January") {
					echo " Januari ";
				} elseif ($bulan == "February") {
					echo " Februari ";
				} elseif ($bulan == "March") {
					echo " Maret ";
				} elseif ($bulan == "April") {
					echo " April ";
				} elseif ($bulan == "May") {
					echo " Mei ";
				} elseif ($bulan == "June") {
					echo " Juni ";
				} elseif ($bulan == "July") {
					echo " Juli ";
				} elseif ($bulan == "August") {
					echo " Agustus ";
				} elseif ($bulan == "September") {
					echo " September ";
				} elseif ($bulan == "October") {
					echo " Oktober ";
				} elseif ($bulan == "November") {
					echo " November ";
				} elseif ($bulan == "December") {
					echo " Desember ";
				}
				$tahun = date('Y');
				echo $tahun;
				?>
		</center>
		<br>

		<div class="col-md-3 col-sm-6">
			<div class="widget widget-stats bg-green">
				<div class="stats-icon"><i class="fa fa-book"></i></div>
				<div class="stats-info">
					<h4>DATA NOVEL</h4>
					<?php
					$novel = $this->db->get('novel')->num_rows();
					?>
					<p><?= $novel ?> Data</p>
				</div>
				<div class="stats-link">
					<a href="<?= base_url() ?>novel">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="widget widget-stats bg-red">
				<div class="stats-icon"><i class="fa fa-list"></i></div>
				<div class="stats-info">
					<h4>DATA GENRE</h4>
					<?php
					$genre = $this->db->get('genre')->num_rows();
					?>
					<p><?= $genre ?> Data</p>
				</div>
				<div class="stats-link">
					<a href="<?= base_url() ?>genre">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="widget widget-stats bg-blue">
				<div class="stats-icon"><i class="fa fa-users"></i></div>
				<div class="stats-info">
					<h4>DATA MEMBER</h4>
					<?php
					$member = $this->db->get('member')->num_rows();
					?>
					<p><?= $member ?> Data</p>
				</div>
				<div class="stats-link">

					<a href="<?= base_url() ?>member">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>

				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="widget widget-stats bg-black">
				<div class="stats-icon"><i class="fa fa-user"></i></div>
				<div class="stats-info">
					<h4>DATA USER</h4>
					<?php
					$user = $this->db->get('user')->num_rows();
					?>
					<p><?= $user ?> Data</p>
				</div>
				<div class="stats-link">

					<a href="<?= base_url() ?>user">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>

				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<!-- begin col-12 -->
		<div class="col-12 ui-sortable">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-stuff-5">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Data Statistik</h4>
				</div>
				<div class="panel-body">

					<div class="col-md-12 col-sm-12" style="margin-bottom: 20px;">
						<form class="form-inline" action="/" method="POST">
							<div class="form-group m-r-10">
								<input type="date" class="form-control" id="exampleInputEmail2" placeholder="">
							</div>
							<div class="form-group m-r-10">
								<input type="date" class="form-control" id="exampleInputPassword2" placeholder="">
							</div>
							<button type="submit" class="btn btn-sm btn-primary m-r-5">Filter</button>
							<button type="submit" class="btn btn-sm btn-warning">Reset</button>
						</form>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="note note-success">
							<h4>Topup Saldo : <?= $jumlah_deposit ?> Transakasi </h4>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="note note-success">
							<h4>Pembelian : <?= $jumlah_pembelian_chapter ?> Transaksi </h4>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="note note-success">
							<h4>Margin Keuntungan : <?= rupiah($margin_keuntungan->harga) ?> </h4>
						</div>
					</div>

					<div class="col-md-12 col-sm-12">
						<script src="https://code.highcharts.com/highcharts.js"></script>
						<figure class="highcharts-figure">
							<br>
							<div id="container"></div>
						</figure>
					</div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
	</div>
</div>

<script>
	// Create the chart
	Highcharts.chart('container', {
		chart: {
			type: 'column'
		},
		title: {
			align: 'center',
			text: 'Top 7 Novel Terlaris'
		},
		accessibility: {
			announceNewData: {
				enabled: true
			}
		},
		xAxis: {
			type: 'category'
		},
		yAxis: {
			title: {
				text: 'Jumlah Terbeli'
			}

		},
		legend: {
			enabled: true
		},
		plotOptions: {
			series: {
				borderWidth: 0,
				dataLabels: {
					enabled: true,
					format: '{point.y:.0f} Terbeli'
				}
			}
		},

		tooltip: {
			headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f} Terbeli</b><br/>'
		},

		series: [{
			name: "Novel",
			colorByPoint: true,
			data: [
				<?php foreach ($novel_terlaris as $i => $data) { ?>
					{
						name : '<?php echo $data['judul'] ?>',
						y : <?php echo $data['jumlah'] ?>
					},
				<?php } ?>
			]
		}],
	});
</script>
