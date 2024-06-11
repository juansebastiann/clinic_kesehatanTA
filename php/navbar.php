<?php
session_start(); // Pastikan sesi dimulai
?>
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="row gx-0 d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                        <small class="fa fa-map-marker-alt text-primary me-2"></small>
                        <small>Jl. Lancang Kuning Kec. Buru, Kabupaten Karimun </small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-3">
                        <small class="far fa-clock text-primary me-2"></small>
                        <small>Senin - Sabtu : 08.00 - 15.00 WIB</small>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                        <a class="fa fa-phone-alt text-primary me-2" href="https://wa.me/082284219858"></a>
                        <a href="https://wa.me/082284219858">+6828884219858</a>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center">
                        <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Pukesmas Buru</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/clinic_kesehatan/index.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="/clinic_kesehatan/about.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">Tentang</a>
            <a href="/clinic_kesehatan/service.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'service.php' ? 'active' : '' ?>">Jenis Pelayanan</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="/clinic_kesehatan/feature.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'feature.php' ? 'active' : '' ?>">Feature</a>
                    <a href="/clinic_kesehatan/team.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'team.php' ? 'active' : '' ?>">Our Doctor</a>
                    <a href="/clinic_kesehatan/appointment.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'appointment.php' ? 'active' : '' ?>">Appointment</a>
                    <a href="/clinic_kesehatan/testimonial.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'testimonial.php' ? 'active' : '' ?>">Testimonial</a>
                    <a href="/clinic_kesehatan/404.php" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == '404.php' ? 'active' : '' ?>">404 Page</a>
                </div>
            </div>
            <a href="/clinic_kesehatan/contact.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Kontak Kami</a>
        </div>
        <?php
        if (isset($_SESSION['Email']) && isset($_SESSION['Nama'])) {
            echo '<a href="profileuser.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"> Hi, ' . htmlspecialchars($_SESSION['Nama']) . '</a>';
        } else {
            echo '<a href="login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"> Login<i class="fa fa-arrow-right ms-3"></i></a>';
        }
        ?>
    </div>
</nav>

