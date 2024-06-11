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
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Dashboard</h2>
                        <p>Welcome, <?php echo htmlspecialchars($user_data['nama_lengkap']); ?>!</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Profile</h5>
                            <ul>
                                <li>NIK: <?php echo htmlspecialchars($user_data['NIK']); ?></li>
                                <li>Email: <?php echo htmlspecialchars($user_data['Email']); ?></li>
                                <li>Phone Number: <?php echo htmlspecialchars($user_data['Nomor_Handphone']); ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5>Actions</h5>
                            <ul>
                                <li><a href="#">Book an appointment</a></li>
                                <li><a href="#">View medical records</a></li>
                                <li><a href="php/logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
