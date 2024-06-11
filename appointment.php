<?php
include 'php/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Include Tempus Dominus (or Bootstrap 4 DateTime Picker) CSS and JS files -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>


    <style>
        .popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
}

.popup.success {
    border-color: #4CAF50;
    background-color: #E9F6EF;
}

.popup.error {
    border-color: #FF0000;
    background-color: #F6E9E9;
}

    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->

    <!-- Topbar End -->


    <!-- Navbar Start -->

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Appointment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
                    <h1 class="mb-4">Buat Janji Temu untuk Kunjungi Dokter Kami</h1>
                    <p class="mb-4">Deskripsi klinik atau informasi lainnya yang relevan...</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Hubungi Kami Sekarang</p>
                            <h5 class="mb-0">+012 345 6789</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Email Kami Sekarang</p>
                            <h5 class="mb-0">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form id="appointmentForm" action="/clinic_kesehatan/php/process_appointment.php" method="post"
                            onsubmit="return checkLogin()">
                            <div class="row g-3">
                                <div class="col-12">
                                    <select name="service_type" class="form-select border-0" style="height: 55px;">
                                        <option selected>Pilih jenis pelayanan ---</option>
                                        <option value="Pelayanan Pemeriksaan Umum">Pelayanan Pemeriksaan Umum</option>
                                        <option value="2">Pelayanan Gawat Darurat</option>
                                        <option value="3">Pelayanan Kesehatan Gigi dan Mulut</option>
                                        <option value="4">Pelayanan Kesehatan lanjut usia yang bersifat UKP</option>
                                        <option value="5">Pelayanan Manajemen Terpadu Balita Sakit (MTBS)</option>
                                        <option value="6">Pelayanan kesehatan reproduksi remaja (PKRR) yang bersifat UKP
                                        </option>
                                        <option value="7">Pelayanan Rujukan</option>
                                        <option value="8">Pelayanan Imunisasi</option>
                                        <option value="10">Pelayanan Pojok TB DOTS</option>
                                        <option value="11">Pelayanan VCT/IMS</option>
                                        <option value="12">Pelayanan Kefarmasian</option>
                                        <option value="13">Pelayanan Laboratorium</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="full_name" class="form-control border-0"
                                        placeholder="Nama Lengkap" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="nik" class="form-control border-0" placeholder="NIK"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control border-0" placeholder="Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="phone_number" class="form-control border-0"
                                        placeholder="Nomor Telephone" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="gender" class="form-select border-0" style="height: 55px;">
                                        <option selected>Jenis Kelamin ---</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                        <option value="3">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group date" id="datelahir" data-target-input="nearest">
                                        <input type="text" name="date_of_birth"
                                            class="form-control datetimepicker-input" placeholder="Tanggal Lahir"
                                                data-target="#datelahir" style="height: 55px;" />
                                            <div class="input-group-append m-2" data-target="#datelahir"
                                                data-toggle="datetimepicker">
                                            <div class="input-group-text" style="height: 40px;"><i
                                            class="fas fa-calendar-alt"></i></div>
                                        </div>
                                     </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="doctor" class="form-select border-0" style="height: 55px;">
                                        <option selected>Pilih Dokter</option>
                                        <option value="dr Boyke">dr Boyke</option>
                                        <option value="2">dr Sudirma</option>
                                        <option value="3">Dokter 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group date" id="datekonsul" data-target-input="nearest">
                                        <input type="text" name="appointment_date"
                                            class="form-control datetimepicker-input" placeholder="Pilih Tanggal"
                                            data-target="#datekonsul" style="height: 55px;" />
                                        <div class="input-group-append m-2" data-target="#datekonsul"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text" style="height: 40px;"><i
                                                    class="fas fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="timepicker">
                                        <input type="text" name="appointment_time"
                                            class="form-control datetimepicker-input" placeholder="Pilih Jam"
                                            data-target="#timepicker" data-toggle="datetimepicker"
                                            style="height: 55px;" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea name="address" class="form-control border-0" rows="2"
                                        placeholder="Alamat"></textarea>
                                </div>
                                <div class="col-12">
                                    <textarea name="complaint" class="form-control border-0" rows="5"
                                        placeholder="Jelaskan Keluhan Anda"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Buat Janji Temu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->



    <!-- Footer Start -->
    <?php
    include 'php/footer.php';
    ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
     <!-- Letakkan ini di dalam bagian <head> atau sebelum penutup tag </body> -->
     <script>
// Pastikan halaman telah dimuat sepenuhnya sebelum menampilkan popup
document.addEventListener('DOMContentLoaded', function() {
    <?php
    // Periksa apakah ada pesan yang disimpan dalam session
    if(isset($_SESSION['message'])) {
        // Jika ada, tampilkan popup berdasarkan jenis pesan
        $message_type = $_SESSION['message_type'];
        $message = $_SESSION['message'];
        unset($_SESSION['message']); // Hapus pesan dari session setelah digunakan
        unset($_SESSION['message_type']);
        ?>
        // Tampilkan popup berdasarkan jenis pesan
        var popup = document.createElement('div');
        popup.className = 'popup <?php echo $message_type; ?>';
        
        // Tambahkan pesan
        var text = document.createTextNode('<?php echo $message; ?>');
        popup.appendChild(text);

        // Tambahkan popup ke dalam body dokumen
        document.body.appendChild(popup);

        // Atur timeout untuk menghapus popup setelah beberapa detik (misalnya 5 detik)
        setTimeout(function() {
            popup.style.display = 'none';
        }, 3000); // Waktu dalam milidetik (misalnya 5000 ms = 5 detik)
    <?php } ?>
});

// <script type="text/javascript">
//     $(function () {
//         $('#datelahir').datetimepicker({
//             format: 'YYYY/MM/DD',
//             icons: {
//                 time: 'fas fa-clock',
//                 date: 'fas fa-calendar-alt',
//                 up: 'fas fa-chevron-up',
//                 down: 'fas fa-chevron-down',
//                 previous: 'fas fa-chevron-left',
//                 next: 'fas fa-chevron-right',
//                 today: 'fas fa-calendar-check',
//                 clear: 'fas fa-trash',
//                 close: 'fas fa-times'
//             }
//         });
//     });
// </script>

</script>

    <script>
        function checkLogin() {
            // Periksa apakah pengguna sudah login
            <?php if (!isset($_SESSION['Email']) || !isset($_SESSION['Nama'])) { ?>
                // Tampilkan notifikasi
                alert("Anda harus login terlebih dahulu untuk membuat janji temu.");
                // Redirect ke halaman login
                window.location.href = 'login.php';
                return false; // Mencegah form dari pengiriman
            <?php } ?>
            return true; // Izinkan pengiriman form jika sudah login
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>