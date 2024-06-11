<?php
session_start();
require_once 'php/config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Menggunakan prepared statement untuk keamanan
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        $_SESSION['Email'] = $user_data['Email'];
        $_SESSION['Nama'] = $user_data['nama_lengkap'];
        // Redirect ke halaman profile atau dashboard
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid email or password';
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik - Clinic Website Template</title>
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #0463FA;">
                <div class="featured-image mb-3">
                    <img src="img/pukesmas buru.jpeg" class="img-fluid rounded-2" style="width: 350px;">
                </div>
                <h1 class="m-0 text-white p-2"><i class="far fa-hospital me-3"></i>Pukesmas Buru</h1>
                <small class="text-white text-wrap text-center">Lebih baik mencegah daripada mengobati. Mulailah menjaga kesehatan sejak dini.</small>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <a class="btn-lg" href="index.php"><i class="fas fa-home"></i></a>
                    <div class="header-text mb-4">
                        <h2>Halo, Salam Sehat </h2>
                        <p>Investasi terbaik yang bisa Anda lakukan adalah pada kesehatan Anda sendiri.</p>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password" required>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" name="login">Login</button>
                        </div>
                        <?php if (isset($error)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                    </form>
                    <div class="row">
                        <small>Don't have account? <a href="register.php">Sign Up</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
