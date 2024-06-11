<?php
require_once 'php/config.php';

// Register functionality
if (isset($_POST['register'])) {
    $nik = $_POST['nik'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $Nomor_Handphone = $_POST['Nomor_Handphone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {
        $error = 'Passwords do not match';
    } else {
        $query = "INSERT INTO users (nik, nama_lengkap, email, Nomor_Handphone, password) VALUES ('$nik', '$nama_lengkap', '$email', '$Nomor_Handphone', '$password')";
        $result = $conn->query($query);

        if ($result) {
            // Registration successful, redirect to login
            header('Location: login.php');
            exit;
        } else {
            $error = 'Registration failed';
        }
    }
}

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
    <link href="css/login.css" rel="stylesheet">
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #0463FA;">
                <div class="featured-image mb-3">
                    <img src="img/pukesmas buru.jpeg" class="img-fluid rounded-2" style="width: 350px;">
                </div>
                <h1 class="m-0 text-white p-2"><i class="far fa-hospital me-3"></i>Pukesmas Buru</h1>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">
                </p>
                <small class="text-white text-wrap text-center">Lebih baik mencegah daripada mengobati. Mulailah menjaga
                    kesehatan sejak dini.</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>register </h2>
                        <p>Investasi terbaik yang bisa Anda lakukan adalah pada kesehatan Anda sendiri.</p>
                    </div>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="NIK"
                                name="nik" id="nikInput" pattern="\d{16}" maxlength="16"
                                title="NIK harus terdiri dari 16 angka" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Full Name" name="nama_lengkap" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Email Address" name="email" required>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-select form-select-lg bg-light fs-6" id="countryCode"
                                aria-label="Country Code">
                                <option value="+62">Indonesia (+62)</option>
                                <option value="+1">United States (+1)</option>
                                <option value="+44">United Kingdom (+44)</option>
                                <option value="+91">India (+91)</option>
                                <!-- Add more country codes here -->
                            </select>
                            <input type="tel" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Phone Number" name="Nomor_Handphone" id="phoneNumber" maxlength="15" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Password" name="password" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Confirm Password" name="confirm_password" required>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" name="register">Register</button>
                        </div>
                        <?php if (isset($error)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                    </form>

                    <div class="row">
                        <small>Already have an account? <a href="login.php">Login</a></small>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        input:invalid {
            border: 2px solid red;
        }

        input:valid {
            border: 2px solid green;
        }

        .input-group {
            display: flex;
            align-items: center;
        }

        .form-select {
            max-width: 150px;
            /* Sesuaikan dengan kebutuhan */
            margin-right: 10px;
        }
    </style>

    <script>
        document.getElementById('nikInput').addEventListener('input', function (e) {
            let value = e.target.value;

            // Menghapus karakter non-digit
            value = value.replace(/\D/g, '');

            // Membatasi panjang maksimal 16 karakter
            if (value.length > 16) {
                value = value.substring(0, 16);
            }

            e.target.value = value;
        });

        document.getElementById('nikInput').addEventListener('blur', function (e) {
            if (e.target.value.length !== 16) {
                alert('NIK harus terdiri dari 16 angka.');
                // Menggunakan setTimeout untuk menunda pemindahan fokus sehingga terjadi setelah alert ditutup
                setTimeout(function () {
                    e.target.focus();
                }, 0);
            }
        });
    </script>

    <script>
        // Fungsi untuk menambahkan validasi input nomor telepon
        document.getElementById('phoneNumber').addEventListener('input', function (e) {
            // Menghapus karakter non-digit
            e.target.value = e.target.value.replace(/\D/g, '');
        });

        document.getElementById('phoneNumber').addEventListener('blur', function (e) {
            // Validasi panjang nomor handphone yang umumnya 10-15 digit
            if (e.target.value.length < 10 || e.target.value.length > 15) {
                alert('Nomor handphone harus terdiri dari 10 hingga 15 angka.');
                // Menggunakan setTimeout untuk menunda pemindahan fokus sehingga terjadi setelah alert ditutup
                setTimeout(function () {
                    e.target.focus();
                }, 0);
            }
        });
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
</body>

</html>