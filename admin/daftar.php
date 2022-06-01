<?php require_once 'views/hal/host.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        Pendaftaran PSB
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
</head>

<body class="">
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboard.html">
                PSB Bakti Amal
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                            href="../pages/dashboard.html">
                            <i class="fa fa-chart-pie opacity-6  me-1"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="../pages/profile.html">
                            <i class="fa fa-user opacity-6  me-1"></i>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="../pages/sign-up.html">
                            <i class="fas fa-user-circle opacity-6  me-1"></i>
                            Sign Up
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="../pages/sign-in.html">
                            <i class="fas fa-key opacity-6  me-1"></i>
                            Sign In
                        </a>
                    </li> -->
                </ul>
                <ul class="navbar-nav d-lg-block d-none">
                    <li class="nav-item">
                        <a href="<?= $base_url?>/psb/admin" class="btn btn-sm mb-0 me-1 bg-gradient-warning">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-warning opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                        <h3 class="text-white mb-2 ">Pendaftaran PSB Bakti Amal</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-12 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Daftar PSB</h5>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controllers/siswaController.php">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">NISN :</label>
                                    <input type="number" class="form-control" name="nisn" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama :</label>
                                    <input type="text" class="form-control" name="nama" id="recipient-name" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="recipient-name" class="col-form-label">Jenis Kelamin :</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" type="radio" name="jk" value="P"
                                                    id="customRadio1">
                                                <label class="custom-control-label" for="customRadio1">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" type="radio" name="jk" value="L"
                                                    id="customRadio2">
                                                <label class="custom-control-label" for="customRadio2">Laki-laki</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="recipient-name" class="col-form-label">Mendaftar :</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" type="radio" name="jenjang" value="SMP"
                                                    id="customRadio1">
                                                <label class="custom-control-label" for="customRadio1">SMP</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" type="radio" name="jenjang" value="SMA"
                                                    id="customRadio2">
                                                <label class="custom-control-label" for="customRadio2">SMA</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Asal Sekolah :</label>
                                    <textarea name="asal_sekolah" class="form-control" id="message-text"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Tempat Lahir :</label>
                                    <input type="text" class="form-control" name="tmp_lahir" id="recipient-name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Tgl Lahir :</label>
                                    <input type="date" class="form-control" name="tgl_lahir" id="recipient-name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nohp :</label>
                                    <input type="text" class="form-control" name="no_hp" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Alamat :</label>
                                    <textarea name="alamat" class="form-control" id="message-text" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Foto :</label>
                                    <input type="text" class="form-control" name="foto" id="recipient-name" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="proses" value="daftar"
                                        class="btn bg-gradient-warning w-100 my-4 mb-2">Daftar</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Already have an account? <a href="<?= $base_url?>/psb/admin"
                                        class="text-warning font-weight-bolder">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Company
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        About Us
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Team
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Products
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Blog
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Pricing
                    </a>
                </div>
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-dribbble"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright © <script>
                        document.write(new Date().getFullYear())
                        </script> Soft by Creative Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>

</html>