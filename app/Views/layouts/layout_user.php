<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>AR-RAHMAN TEKNOKRAT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <link href="<?php echo base_url();  ?>tamplate_user/img/favicon.ico" rel="icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url();  ?>tamplate_user/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>tamplate_user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url();  ?>tamplate_user/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="<?php echo base_url();  ?>tamplate_user/css/style.css" rel="stylesheet" />
    <link rel="icon" href="<?php echo base_url(); ?>gambar/Logo_UKMI.png" type="image/x-icon">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>(0721) 702022</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>arahmanteknokrat@gmail.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-map me-2"></small>
                    <small>Jl. ZA. Pagar Alam No.9 -11, Kedaton</small>
                </div>
            </div>

            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-square me-1" target="_blank" href="https://www.instagram.com/arrahmanteknokrat/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="btn btn-square me-1" target="_blank" href="https://facebook.com/ukm.arrahmanteknokrat">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-square me-1" target="_blank" href="https://www.youtube.com/c/LDKArRahmanTeknokrat">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="btn btn-square me-0" target="_blank" href="https://arrahmanteknokrat.or.id">
                        <i class="fab fa-chrome"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="<?php echo base_url();  ?>/halaman_user" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">
                <img class="img-fluid me-3" src="<?php echo base_url();  ?>gambar/Logo_UKMI.png" alt="" />
                <span style="font-size:24px">AR-RAHMAN TEKNOKRAT</span>
            </h1>
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <a href="<?php echo base_url();  ?>/halaman_user" class="nav-item nav-link">Beranda</a>
                <a href="<?php echo base_url();  ?>/tentang" class="nav-item nav-link">Tentang</a>
                <a href="<?php echo base_url();  ?>/informasi" class="nav-item nav-link">Informasi</a>
                <a href="<?php echo base_url();  ?>/prestasi" class="nav-item nav-link">Prestasi</a>
                <a href="<?php echo base_url();  ?>/progja" class="nav-item nav-link">Program Kerja</a>
    </nav>
    <!-- Navbar End -->

    <?= $this->renderSection('content');
    ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h1 class="text-white mb-4">
                        <img class="img-fluid me-3" src="<?php echo base_url();  ?>gambar/Logo_UKMI.png" style="width:60px" alt="" />
                        <span style="font-size:20px">AR-RAHMAN </span>
                    </h1>
                    <p>
                        UKMI AR-Rahman Teknokat adalah sebuah unit kegiatan mahasiswa yang bergerak di bidang keagamaan khusus di bidang agama Islam
                    </p>

                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-light mb-4">Alamat</h5>
                    <p>
                        <i class="fa fa-map-marker-alt me-3"></i>Jl. ZA. Pagar Alam No.9 -11, Kedaton
                    </p>
                    <p><i class="fa fa-phone-alt me-3"></i>+62856-6422-2324</p>
                    <p><i class="fa fa-envelope me-3"></i>ukmi@teknokrat.ac.id</p>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Ikuti Kami</h5>
                    <p>Ikuti update informasi terabaru kami...</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" target="_blank" href="https://www.instagram.com/arrahmanteknokrat/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-square me-1" target="_blank" href="https://facebook.com/ukm.arrahmanteknokrat">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-square me-1" target="_blank" href="https://www.youtube.com/c/LDKArRahmanTeknokrat">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="btn btn-square me-0" target="_blank" href="https://arrahmanteknokrat.or.id">
                            <i class="fab fa-chrome"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy;2023 <a href="#">UKMI Ar-rahman Teknokrat</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By Kader Cupu
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Button Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();  ?>tamplate_user/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url();  ?>tamplate_user/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url();  ?>tamplate_user/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url();  ?>tamplate_user/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();  ?>tamplate_user/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url();  ?>tamplate_user/js/main.js"></script>
</body>

</html>