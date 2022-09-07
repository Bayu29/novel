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
</div>
