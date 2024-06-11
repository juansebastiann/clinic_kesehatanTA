<?php
session_start();
require_once 'php/config.php';

if (!isset($_SESSION['Email'])) {
    // Jika session belum diatur, arahkan ke halaman login
    header('Location: login.php');
    exit;
}

// Menggunakan prepared statement untuk menghindari SQL Injection
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $_SESSION['Email']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="path_to_profile_image.jpg" class="img-fluid rounded-circle mb-3" alt="Profile Picture">
                        <h4 class="card-title">Nama Lengkap</h4>
                        <p class="card-text">NIK: <?php echo htmlspecialchars($user_data['NIK']); ?></p>
                        <p class="card-text">Email: <?php echo htmlspecialchars($user_data['Email']); ?></p>
                        <p class="card-text">Phone Number: <?php echo htmlspecialchars($user_data['Nomor_Handphone']); ?></p>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-primary">Book an appointment</a>
                        <a href="#" class="btn btn-secondary">View medical records</a>
                        <a href="php/logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
