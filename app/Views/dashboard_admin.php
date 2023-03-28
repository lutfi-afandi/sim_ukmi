<?= $this->extend('layouts/layout_admin'); ?>
<?= $this->section('content'); ?>
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<?php
$db = \Config\Database::connect();
$jumlahkader = $db->table('anggota')->countAllResults();
$jumlahdivisi = $db->table('devisi')->countAllResults();
$jumlahinformasi = $db->table('informasi')->countAllResults();
$jumlahprestasi = $db->table('prestasi')->countAllResults();
// dd($jumlahinformasi);
?>


<div class="data">

    <!--INI TUH BUAT CARD DI DASHBOARD bawah-->
    <br />
    <div>
        <h4 class="badge badge-success">Statistik UKMI Ar-Rahman Teknokrat</h4>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card support-bar overflow-hidden">
                        <div class="card-body pb-0" style="">
                            <h2 class="m-0" style="color:#0066FF"><?php echo $jumlahkader . " Kader"; ?>
                            </h2>

                            <span class="text-c-green" style="color:#999999"><b>Tangguh Siap Berkontribusi</b></span>
                            <br /><br />
                        </div>
                        <div class="card-footer bg-primary text-white">
                            <div class="row text-center">
                                <div class="col">
                                    <h6 class="m-0 text-center text"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card support-bar overflow-hidden">
                        <div class="card-body pb-0">
                            <h2 class="m-0" style="color:#00CC66"><?= $jumlahdivisi . " Divisi"; ?>
                            </h2>

                            <span class="text-c-green" style="color:#999999"><b>Organisasi yang Handal</b></span>
                            <br /><br />
                        </div>
                        <div class="card-footer bg-success text-white">
                            <div class="row text-center">
                                <div class="col">
                                    <h6 class="m-0 text-white"></h6>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" style="height:100px">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-yellow"><?= $jumlahinformasi; ?>
                                    </h4>
                                    <h6 class="text-muted m-b-0">
                                        <a href="<?php echo base_url(); ?>index.php/anggota/informasi" style="color:#999999">Informasi Penting</a>
                                    </h6>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="<?php echo base_url(); ?>index.php/anggota/informasi"><i class="feather icon-info f-28" style="color:#999999"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-c-yellow">
                            <div class="row align-items-center">
                                <!--<div class="col-9">
								<p class="text-white m-b-0">Lihat</p>
							</div>
						<div class="col-3 text-right">
							<i class="feather icon-trending-up text-white f-16"></i>
						</div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" style="height:100px">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-green">
                                        <?= $jumlahprestasi; ?>
                                    </h4>
                                    <h6 class="text-muted m-b-0">
                                        <a href="<?php echo base_url(); ?>index.php/anggota/prestasi" style="color:#999999">Prestasi Anggota</a>
                                    </h6>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="<?php echo base_url(); ?>index.php/anggota/prestasi"><i class="feather icon-file-text f-28" style="color:#999999"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-c-green">
                            <div class="row align-items-center">
                                <!--<div class="col-9">
								<p class="text-white m-b-0">Lihat</p>
							</div>
							<div class="col-3 text-right">
								<i class="feather icon-trending-up text-white f-16"></i>
							</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="kalender">
    <!--INI TUH BUAT CARD DI DASHBOARD-->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card support-bar overflow-hidden">
                        <div class="card-body" style="">
                            <h2 class="m-0" style=" text-align:center">
                                <span class="text-c-green"><b>Kalender Agenda</b></span>
                            </h2>
                        </div>

                        <div class="card-footer bg-success text-white">
                            <div class="row text-center">
                                <div class="col">
                                    <h6 class="m-0 text-center text"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--INI TUH BUAT CARD DI DASHBOARD-->

        <!--INI BUAT NAMPILIN PLUGIN KALENDER COY KALAU HOSTING JANGAN LUPA SET KONEKSI DATABASENYA LAGI YA-->
        <div class="col-lg-12">
            <div class="card" style="padding:50px">
                <div id="calendar"></div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    events: [
                        <?php
                        //melakukan looping
                        foreach ($kalender_progja as $d) {
                        ?> {
                                title: '<?php echo $d['nama_kegiatan']; ?>', //menampilkan title dari tabel
                                start: '<?php echo $d['tanggal']; ?>', //menampilkan tgl mulai dari tabel
                                url: '<?= base_url(); ?>administrator/detail_agenda/detail/<?= $d['id_waktu']; ?>'
                            },
                        <?php } ?>
                    ],
                    selectOverlap: function(event) {
                        return event.rendering === 'background';
                    }
                });

                calendar.render();
            });
        </script>
    </div>
</div>
<?= $this->endSection('content'); ?>