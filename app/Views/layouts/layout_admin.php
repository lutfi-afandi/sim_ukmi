<!DOCTYPE html>
<html lang="en">

<head>
	<title>AR-RAHMAN TEKNOKRAT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="" />
	<link rel="icon" href="<?php echo base_url(); ?>gambar/Logo_UKMI.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>

<script>
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		if (prevScrollpos > currentScrollPos) {
			document.getElementById("header").classList.remove('show');
		} else {
			document.getElementById("header").classList.add('show');
		}
		prevScrollpos = currentScrollPos;
	}
</script>

<body class="" style="background-color:#319FC4">
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div ">
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="<?php echo base_url(); ?>gambar/logo.png" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details"><?php echo session()->get('nama'); ?> <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">

						<ul class="list-unstyled">
							<li class="list-group-item">
								<a href="<?php echo base_url(); ?>administrator/user"><i class="feather icon-settings m-r-5"></i>User</a>
							</li>
							<li class="list-group-item">
								<a href="<?php echo base_url(); ?>administrator/login/logout" onClick="return confirm('Apakah anda yakin ingin keluar ?')"><i class="feather icon-log-out m-r-5"></i>Keluar</a>
							</li>
						</ul>
					</div>
				</div>

				<!--//Ini side bar dimulai dari navigasi-->
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigasi</label>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>halaman_admin" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span>
						</a>
					</li>

					<?php $level = session()->get('level');
					error_reporting(0);
					if ($level == 1) {
					?>

						<!--jika level user 1 UNTUK PENGURUS INTI menunya ini-->
						<li class="nav-item pcoded-menu-caption">
							<label>Master Data</label>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/anggota" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Anggota</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/progja" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">Buat Program Kerja</span>
							</a>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Monitoring</label>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/registrasi_kegiatan" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-check"></i></span><span class="pcoded-mtext">Konfirmasi Peserta</span> <span class="badge badge-danger">
									<?php
									include "belakang/koneksi.php";
									$connect = mysqli_connect($host, $user, $password);
									if ($connect) {
										mysqli_select_db($connect, $db);
									}
									?>

									<?php
									$no = 1;
									$sql = mysqli_query($connect, "SELECT count(id_registrasi_kegiatan) as jml from registrasi_kegiatan where status='P'");
									while ($dt = mysqli_fetch_assoc($sql)) {
										echo $dt['jml'];
									}
									?>
								</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url(); ?>ketua_umum/evaluasi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-bar-chart"></i></span><span class="pcoded-edit"> Monitoring Anggota</span>
							</a>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Tambah Informasi</label>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/informasi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-info"></i></span><span class="pcoded-mtext">Informasi</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/prestasi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Prestasi Anggota</span>
							</a>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Laporan</label>
						</li>

						<li class="nav-item pcoded-hasmenu">
							<a href="#!" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-printer"></i></span><span class="pcoded-mtext">Cetak Laporan</span>
							</a>
							<ul class="pcoded-submenu">
								<li><a href="<?php echo base_url(); ?>administrator/laporan"> Program Kerja</a></li>
								<li><a href="<?php echo base_url(); ?>administrator/laporan_kegiatan"> Kegiatan</a></li>
								<li><a href="<?php echo base_url(); ?>administrator/laporan_keaktifan"> Keaktifan Anggota</a></li>
								<li><a href="<?php echo base_url(); ?>/administrator/laporan_prestasi/cetak" target="_blank"> Prestasi Anggota</a></li>
							</ul>
						</li>

						<!--ini kalau user level 2 untuk Ketua Umum-->
					<?php  } else if ($level == 2) {
					?>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>ketua_umum/anggota" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Anggota</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url(); ?>ketua_umum/progja" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">Program Kerja</span>
							</a>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Informasi</label>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>anggota/informasi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-info"></i></span><span class="pcoded-mtext">Informasi</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url(); ?>anggota/prestasi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Prestasi Kader</span>
							</a>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Konfirmasi & hasil</label>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url(); ?>ketua_umum/konfirmasi_progja" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">Konfirmasi Progja</span>
								<span class="badge badge-danger">
									<?php
									include "belakang/koneksi.php";
									$connect = mysqli_connect($host, $user, $password);
									if ($connect) {
										mysqli_select_db($connect, $db);
									}
									?>

									<?php
									$no = 1;
									$sql = mysqli_query($connect, "SELECT count(id_progja) as jml from progja where status='P'");
									while ($dt = mysqli_fetch_assoc($sql)) {
										echo $dt['jml'];
									}
									?>

								</span>
							</a>
						</li>

						<li class="nav-item pcoded-hasmenu">
							<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-edit"></i></span><span class="pcoded-mtext">Evaluasi Monitoring</span></a>
							<ul class="pcoded-submenu">
								<li><a href="<?php echo base_url(); ?>ketua_umum/evaluasi">Evaluasi Keaktifan</a></li>
								<li><a href="<?php echo base_url(); ?>ketua_umum/evaluasi/progres_progja">Evaluasi Progja</a></li>
							</ul>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Laporan</label>
						</li>
						<a href="<?php echo base_url(); ?>administrator/laporan" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-printer"></i></span><span class="pcoded-mtext"> Cetak Program Kerja</span>
						</a>

						<!--jika user level 3 untuk pembina-->
					<?php  } else 
				if ($level == 3) {
					?>

						<li class="nav-item pcoded-menu-caption">
							<label>Lihat</label>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>ketua_umum/progja" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">Program Kerja UKMI</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url(); ?>anggota/informasi" class="nav-link "><span class="pcoded-micon">
									<i class="feather icon-info"></i></span><span class="pcoded-mtext">Informasi</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url(); ?>anggota/prestasi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Prestasi Anggota</span>
							</a>
						</li>

						<li class="nav-item pcoded-hasmenu">
							<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-edit">Evaluasi Monitoring</span></a>
							<ul class="pcoded-submenu">
								<li><a href="<?php echo base_url(); ?>ketua_umum/evaluasi">Evaluasi Keaktifan</a></li>
								<li><a href="<?php echo base_url(); ?>ketua_umum/evaluasi/progres_progja">Evaluasi Progja</a></li>
							</ul>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Laporan</label>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-printer"></i></span><span class="pcoded-mtext">Cetak Laporan</span></a>
							<ul class="pcoded-submenu">
								<li><a href="<?php echo base_url(); ?>administrator/laporan"> Program Kerja</a></li>
								<li><a href="<?php echo base_url(); ?>administrator/laporan_kegiatan"> Kegiatan</a></li>
								<li><a href="<?php echo base_url(); ?>administrator/laporan_keaktifan"> Keaktifan Anggota</a></li>
								<li><a href="<?php echo base_url(); ?>/administrator/laporan_prestasi/cetak" target="_blank"> Prestasi Anggota</a></li>
							</ul>
						</li>

						<!--kalau usernya level 4 cuy untuk anggota-->
					<?php  } else 
				if ($level == 4) {
					?>
						<li class="nav-item pcoded-menu-caption">
							<label>Informasi</label>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>anggota/informasi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-info"></i></span><span class="pcoded-mtext">Informasi</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url(); ?>anggota/prestasi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Prestasi</span>
							</a>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Program Kerja</label>
						</li>
						<!--<li class="nav-item">
					<a href="<?php echo base_url(); ?>anggota/progja" class="nav-link ">
						<span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">Lihat Program Kerja</span>
					</a>
				</li>-->
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>anggota/registrasi_kegiatan" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-check"></i></span><span class="pcoded-mtext">Ikuti Kegiatan UKMI</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>anggota/riwayat_kegiatan" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Riwayat Kegiatan</span>
							</a>
						</li>

						<!--UNTUK USER LEVEL 5 UNTUK SUPERADMIN-->
					<?php  } else 
				if ($level == 5) {
					?>
						<li class="nav-item pcoded-menu-caption">
							<label>Master Data</label>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/devisi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Divisi</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/anggota" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Anggota</span>
							</a>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Program Kerja</label>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/priode" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Periode Kepengurusan</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/progja" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">Buat Program Kerja</span>
							</a>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Konfirmasi & hasil</label>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>ketua_umum/konfirmasi_progja" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">Konfirmasi Progja</span>
								<span class="badge badge-danger">
									<?php
									$connect = \Config\Database::connect();

									$no = 1;
									$sql = $connect->query("SELECT count(id_progja) as jml from progja where status='P'")->getResultArray();
									foreach ($sql as $dt) {
										echo $dt['jml'];
									}

									?>
								</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/registrasi_kegiatan" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-check"></i></span>
								<span class="pcoded-mtext">Konfirmasi Peserta</span> <span class="badge badge-danger">
									<?php

									$no = 1;
									$sql = $connect->query("SELECT count(id_registrasi_kegiatan) as jml from registrasi_kegiatan where status='P'")->getResultArray();
									foreach ($sql as $dt) {
										echo $dt['jml'];
									}
									?>
								</span>
							</a>
						</li>

						<li class="nav-item pcoded-hasmenu">
							<a href="#!" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-edit"></i></span><span class="pcoded-mtext">Evaluasi Monitoring</span>
							</a>
							<ul class="pcoded-submenu">
								<li><a href="<?php echo base_url(); ?>ketua_umum/evaluasi">Evaluasi Keaktifan</a></li>
								<li><a href="<?php echo base_url(); ?>ketua_umum/evaluasi/progres_progja">Evaluasi Progja</a></li>
							</ul>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Tambah Informasi</label>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/informasi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-info"></i></span><span class="pcoded-mtext">Informasi</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>administrator/prestasi" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Prestasi Kader</span>
							</a>
						</li>

						<li class="nav-item pcoded-menu-caption">
							<label>Laporan</label>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="#!" class="nav-link ">
								<span class="pcoded-micon"><i class="feather icon-printer"></i></span><span class="pcoded-mtext">Cetak Laporan</span>
							</a>
							<ul class="pcoded-submenu">
								<li><a href="<?php echo base_url(); ?>administrator/laporan"> Program Kerja</a></li>
								<li><a href="<?php echo base_url(); ?>administrator/laporan_kegiatan"> Kegiatan</a></li>
								<li><a href="<?php echo base_url(); ?>administrator/laporan_keaktifan"> Keaktifan Anggota</a></li>
								<li><a href="<?php echo base_url(); ?>/administrator/laporan_prestasi/cetak" target="_blank"> Prestasi Anggota</a></li>
							</ul>
						</li>
					<?php  } ?>
				</ul>

				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-box f-40"></i>
						<h6 class="mt-3">AR-RAHMAN</h6>
						<p>Version 1.2022</p>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- INI ADALAH HEADER WEBSITE -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light " style="background-color:#319FC4;position: sticky; position: -webkit-sticky; top: 0px; transition: top .3s ease">
		<!-- ini untuk header agar mengikuti ketika scroll bawah/atas tambahkan ke CSSS ;position: sticky; position: -webkit-sticky; top: 0px; transition: top .3s ease;-->
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			<a href="#!" class="b-brand">
				<img src="<?php echo base_url(); ?>gambar/Logo_UKMI.png" alt="" class="logo" style="width:40px; margin-left:-20px">
				<strong style="font-size:15px; color:#FFFFFF "> AR-RAHMAN TEKNOKRAT</strong>
				<img src="<?php echo base_url(); ?>gambar/Logo_UKMI.png" style="width:40px" alt="" class="logo-thumb">
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				<li>
					<div class="dropdown">
						<div class="dropdown-menu dropdown-menu-right notification">
							<div class="noti-head">
								<h6 class="d-inline-block m-b-0">Pemberitahuan</h6>
							</div>
							<ul class="noti-body">
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
										</div>
									</div>
								</li>
							</ul>
							<div class="noti-footer">
							</div>
						</div>
					</div>
				</li>

				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="feather icon-user"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<img src="<?php echo base_url(); ?>gambar/logo.png" class="img-radius" alt="User-Profile-Image">
								<span><?php echo session()->get('nama'); ?></span>
								<a href="<?php echo base_url(); ?>administrator/login/logout" class="dud-logout" title="Logout">
									<i class="feather icon-log-out"></i>
								</a>
							</div>

							<ul class="pro-body">
								<?php $level = session()->get('level');
								if ($level == 1 || $level == 2) {
								?>
									<li>
										<a href="<?php echo base_url(); ?>administrator/user" class="dropdown-item"><i class="feather icon-mail"></i> User</a>
									</li>

								<?php } else if ($level == 3 || $level == 4) { ?>
									<!--<li><a href="<?php echo base_url(); ?>administrator/user/anggota" class="dropdown-item"><i class="feather icon-mail"></i> User</a></li>-->
								<?php } ?>

								<li>
									<a href="<?php echo base_url(); ?>administrator/login/logout" class="dropdown-item" onClick="return confirm('Apakah anda yakin ingin keluar ?')">
										<i class="feather icon-lock"></i> Keluar</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>
	<!-- AKHIR HEADER -->

	<!--notifikasi BUAT KADER YANG BELUM AKTIF KEGIATAN-->
	<?php


	$id_anggota = session()->get('id_anggota');
	$sqlprogja = $connect->query("SELECT count(id_progja) as jmlprogja from progja");

	while ($dtprogja = mysqli_fetch_assoc($sqlprogja)) {
		$jmlprogja = $dtprogja['jmlprogja'] . "<br> ";
		$id_progja2 = $dtprogja['id_progja'];
		$sqli2 = $connect->query("SELECT
	count(DISTINCT(registrasi_kegiatan.id_progja)) as jmlikutprogja
	, registrasi_kegiatan.tanggal
	, registrasi_kegiatan.id_anggota
	, registrasi_kegiatan.status
	, registrasi_kegiatan.id_progja
	, anggota.id_devisi
	FROM
	anggota
	INNER JOIN registrasi_kegiatan 
	ON (anggota.id_anggota = registrasi_kegiatan.id_anggota) where  registrasi_kegiatan.id_anggota='$id_anggota' and registrasi_kegiatan.status='Y'");
		while ($d2 = mysqli_fetch_assoc($sqli2)) {
			$total = ($d2['jmlikutprogja'] / $jmlprogja) * 100;
			if ($total > 0 and $total < 50) {
				echo "<span class='badge badge-danger'>Tidak Aktif</span>";
			} else
	if ($total >= 50 and $total < 60) {
				echo "<span class='badge badge-warning'>Kurang Aktif</span>";
			} else
	if ($total >= 60) {
				echo "<span class='badge badge-success'>Aktif</span>";
			} else { //echo "<span class='badge badge-danger'>Tidak Aktif</span>";
				if ($level == 4) {
					if ($judul == "Dashboard") {
	?>

						<a href="<?php echo base_url(); ?>anggota/registrasi_kegiatan">
							<div style="position:absolute;top:40px;right: 20px; color:#000000">
								<div class="toast hide toast-right" role="alert" aria-live="assertive" data-delay="5000" aria-atomic="true">
									<div class="toast-header">
										<img src="assets/images/favicon.ico" alt="" class="img-fluid m-r-5" style="width:20px;">
										<strong class="mr-auto">Pengingat Buat Kamu</strong>
										<small class="text-muted"><?php echo date('H:i:s'); ?></small>
										<button type="button" class="m-l-5 mb-1 mt-1 close" data-dismiss="toast" aria-label="Close">
											<span>&times;</span>
										</button>
									</div>
									<div class="toast-body">
										Semangat Kader Tangguh, yuk berproses kembali dengan mengikuti kegiatan-kegiatan bermanfaat UKMI Ar-Rahman :)
									</div>
								</div>
							</div>
						</a>

	<?php
					} else {
						"";
					}
				} else {
					"";
				}
			}
		}
	}
	?>
	<!--end notifikasi KADERMU-->

	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container ">
		<div class="pcoded-content ">
			<div class="page-header ">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10"><?= $this->renderSection('judul'); ?></h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>halaman_admin"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboard </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<?= $this->renderSection('content'); ?>

		</div>
	</div>


	<!-- Required Js -->
	<script src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/js/vendor-all.min.js"></script>
	<script src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/js/ripple.js"></script>
	<script src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/js/pcoded.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/js/plugins/apexcharts.min.js"></script>
	<script src="<?php echo base_url(); ?>tamplate_admin/template/dist/assets/js/pages/dashboard-main.js"></script> -->
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>
	<script>
		$('.toast-right').toast('show');
	</script>


</body>

</html>