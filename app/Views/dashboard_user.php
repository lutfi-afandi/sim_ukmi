<?= $this->extend('layouts/layout_user'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<!--INI BAGIAN FOTO BANNER DEPAN-->
				<img class="w-100" src="<?php echo base_url();  ?>gambar/bgukmi.jpg" alt="Image" />
				<div class="carousel-caption">
					<div class="container">
						<div class="row" align="center">
							<div class="col-12 col-lg-12">
								<h1 class="display-3  mb-4 animated slideInDown" style="color:#FFFFFF">
									Rekrutmen, Pembinaan, dan Pengontrolan
								</h1>
								<p class="fs-5  mb-5" style="color:#FFFFFF">
									Mengoptimalkan Fungsi Rekrutmen, Pembinaan, dan Pengontrolan UKMI Ar-Rahman Teknokrat. Ikuti seluruh kegiatan dan jadilah kader tangguh
								</p>
								<a href="<?php echo base_url(); ?>/login" class="btn btn-primary py-3 px-5" style="color:#FFFFFF" ;>LOGIN</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<img class="w-100" src="<?php echo base_url();  ?>gambar/IMG_6669.JPG" alt="Image" />
				<div class="carousel-caption">
					<div class="container">
						<div class="row" align="center">
							<div class="col-12 col-lg-12">
								<h1 class="display-3  mb-4 animated slideInDown" style="color:#FFFFFF">
									Hati Yang Saling Bertaut Dengan Iman
								</h1>
								<p class="fs-5  mb-5" style="color:#FFFFFF">
									Bersinergi dan Berkolaborasi Kader UKMI Ar-Rahman Teknokrat dengan Organisasi Universitas Teknokrat Indonesia, serta Lembaga Dakwah Kampus (LDK) Lainnya.
								</p>
								<!--<a href="https://arrahmanteknokrat.or.id" target="_blank" class="btn btn-primary py-3 px-5" style="color:#FFFFFF">Lihat Profile</a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>

<!-- About Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-5">
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
				<div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px">
					<img class="position-absolute w-100 h-100" src="<?php echo base_url();  ?>gambar/SAVE_20220911_142334-768x519.jpg" alt="" style="object-fit: cover" />
					<div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3" style="width: 200px; height: 200px">
						<div class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3">
							<h1 class="text-white mb-0">12</h1>
							<h2 class="text-white">Oktober</h2>
							<h5 class="text-white mb-0">2003</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="h-100">
					<h1 class="display-6 mb-5">
						UKMI Ar-Rahman Teknokrat
					</h1>
					<p class="fs-5 text-primary mb-4">
						UKMI Ar-Rahman Teknokrat didirikan di Bandar Lampung pada tanggal 12 Oktober 2003 atau bertepatan dengan 16 Sya'ban 1434 H dan berkedudukan di Universitas Teknokrat Indonesia
					</p>

					<p class="mb-4">
						Menjadi Lembaga Dakwah Kampus yang Kokoh, Berprestasi, Kontributif dan Menginpirasi Menuju Teknokrat Madani
					</p>
					<div class="border-top mt-4 pt-4">
						<div class="d-flex align-items-center">
							<img class="flex-shrink-0 rounded-circle me-3" src="<?php echo base_url();  ?>gambar/ketum-150x150.jpg" style="width:30px" alt="" />
							<h5 class="mb-0">Contact: +62856-6422-2324</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About End -->

<!-- Facts Start -->
<div class="container-fluid overflow-hidden my-5 px-lg-0">
	<div class="container facts px-lg-0">
		<div class="row g-0 mx-lg-0">
			<div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
				<div class="h-100 px-4 ps-lg-0">
					<h1 class="text-white mb-4">Membentuk kader yang tangguh dan totalitas dalam berdakwah</h1>
					<p class="text-light mb-5">
						Dengan Visi Menjadikan UKMI Ar-Rahman sebagai opinion leader di Universitas Teknokrat Indonesia
					</p>
				</div>
			</div>
			<div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
				<div class="h-100 px-4 pe-lg-0">
					<div class="row g-5" style="text-align:center">
						<div class="col-sm-6">
							<p class="fs-5 text-primary">Lebih dari</p>
							<h1 class="display-5" data-toggle="counter-up">100</h1>
							<p class="fs-5 text-primary">Anggota</p>
						</div>
						<div class="col-sm-6">
							<p class="fs-5 text-primary">Lebih dari</p>
							<h1 class="display-5" data-toggle="counter-up">20</h1>
							<p class="fs-5 text-primary">Program Kerja</p>
						</div>
						<div class="col-sm-6">
							<p class="fs-5 text-primary">Terdapat</p>
							<h1 class="display-5" data-toggle="counter-up">8</h1>
							<p class="fs-5 text-primary">Bidang dan Biro </p>
						</div>
						<div class="col-sm-6">
							<p class="fs-5 text-primary">Lebih dari</p>
							<h1 class="display-5" data-toggle="counter-up">50</h1>
							<p class="fs-5 text-primary">Agenda</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Facts End -->

<!-- Informasi -->
<div class="row">
	<div class="col-12">
		<div class="text-center mx-auto" style="max-width: 500px">
			<h1 class="display-6 mb-5">
				Informasi
			</h1>
		</div>
	</div>
</div>

<div class="col-xl-12">
	<div class="row" style="margin:50px">
		<?php
		$no = 1;
		foreach ($data->getResultArray() as $t) {
		?>
			<div class="col-lg-3" style="margin-top:10px">
				<div class="card" style="height:380px">
					<img class="img-fluid card-img-top" src="<?php echo base_url(); ?>/gambar/<?php echo $t['gambar']; ?>" alt="Card image cap" style="height:200px">
					<div class="card-body">
						<h5 class="card-title"><?php echo $t['nama']; ?>
							<br />
							<span class="badge badge-success" style="font-size:9px"><?php echo $t['tanggal']; ?></span>
						</h5>

						<a class="btn  btn-danger" href="<?php echo base_url(); ?>/administrator/informasi/detail_user/<?php echo $t['id_informasi']; ?>">
							<i class="feather icon-zoom-in"></i> Lihat
						</a>
					</div>
				</div>

				<div class="modal fade bd-example-modal-lg<?php echo $t['id_informasi']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title h4" id="myLargeModalLabel"><?php echo $t['nama']; ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="img-fluid card-img-top" style="height:200px; background-image:url(<?php echo base_url(); ?>/gambar/<?php echo $t['gambar']; ?>); ">
								</div>
								<div class="card-body">
									<?php echo $t['isi']; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
			$no++;
		} ?>
	</div>
</div>
</div>


<!-- Appointment Start -->
<div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container py-5">
		<div class="row g-5">
			<div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
				<h1 class="display-6 text-white mb-5">
					UKMI AR-Rahman Teknokat
				</h1>
				<p class="text-white mb-5" style="font-size:26px; text-align:justify">
					UKMI AR-Rahman Teknokat adalah sebuah unit kegiatan mahasiswa di Universitas Teknokrat Indonesia, kampusnya sang juara yang bergerak dibidang keagamaan khususnya agama Islam. Disini kamu bakal belajar banyak hal tentang dakwah kampus, manajerial, berbagai macam softskill, dan banyak lagi. kami mengajak kamu, bergabung menjadi keluarga Besar UKMI Ar-Rahman Teknokrat
					</br>
					</br>
					<u>
						<a href="http://daftar.arrahmanteknokrat.or.id" target="_blank" style="color:#FFFFFF"> Daftar UKMI yuk :D</a>
					</u>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- Appointment End -->

<?= $this->endSection('content'); ?>