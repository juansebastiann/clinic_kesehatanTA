<?php
session_start();
require_once 'config.php';

// Cek apakah pengguna sudah login
if (!isset($_SESSION['Email']) || !isset($_SESSION['Nama'])) {
    echo "Anda harus login terlebih dahulu untuk membuat janji temu.";
    exit();
}

// Ambil data form dan sanitasi input
$service_type = $conn->real_escape_string($_POST['service_type']);
$full_name = $conn->real_escape_string($_POST['full_name']);
$nik = $conn->real_escape_string($_POST['nik']);
$email = $conn->real_escape_string($_POST['email']);
$phone_number = $conn->real_escape_string($_POST['phone_number']);
$date_of_birth = $conn->real_escape_string($_POST['date_of_birth']);
$gender = $conn->real_escape_string($_POST['gender']);
$doctor = $conn->real_escape_string($_POST['doctor']);
$appointment_date = $conn->real_escape_string($_POST['appointment_date']);
$appointment_time = $conn->real_escape_string($_POST['appointment_time']);
$address = $conn->real_escape_string($_POST['address']);
$complaint = $conn->real_escape_string($_POST['complaint']);

// Set zona waktu yang diharapkan
date_default_timezone_set('Asia/Jakarta');

// Konversi format tanggal ke Y-m-d
$date_of_birth = DateTime::createFromFormat('d/m/Y', $date_of_birth);
if (!$date_of_birth) {
    echo "Format tanggal lahir tidak valid.";
    exit();
}
$date_of_birth->setTime(0, 0, 0); // Atur waktu menjadi 00:00:00 untuk menghindari perbedaan waktu
$date_of_birth = $date_of_birth->format('Y-m-d');

$appointment_date = DateTime::createFromFormat('d/m/Y', $appointment_date);
if (!$appointment_date) {
    echo "Format tanggal janji temu tidak valid.";
    exit();
}
$appointment_date->setTime(0, 0, 0); // Atur waktu menjadi 00:00:00 untuk menghindari perbedaan waktu
$appointment_date = $appointment_date->format('Y-m-d');

// Insert data ke database menggunakan prepared statement
$stmt = $conn->prepare("INSERT INTO appointments (service_type, full_name, nik, email, phone_number, date_of_birth, gender, doctor, appointment_date, appointment_time, address, complaint) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssss", $service_type, $full_name, $nik, $email, $phone_number, $date_of_birth, $gender, $doctor, $appointment_date, $appointment_time, $address, $complaint);


if ($stmt->execute()) {
    // Janji temu berhasil dijadwalkan
    $_SESSION['message'] = "Janji temu berhasil dijadwalkan.";
    $_SESSION['message_type'] = "success";
    header('Location: ../appointment.php');
} else {
    // Jika terjadi error
    $_SESSION['message'] = "Error: " . $stmt->error;
    $_SESSION['message_type'] = "error";
    header('Location: ../appointment.php');
}


$stmt->close();
$conn->close();
?>
