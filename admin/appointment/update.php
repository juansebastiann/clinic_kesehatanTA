<?php
session_start();
require_once '../helper/connection.php';

// Ambil data dari form
$id = $_POST['id'];
$service_type = $_POST['service_type'];
$full_name = $_POST['full_name'];
$nik = $_POST['nik'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$doctor = $_POST['doctor'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];
$address = $_POST['address'];
$complaint = $_POST['complaint'];

// Lakukan operasi UPDATE pada database
$query = mysqli_query($connection, "UPDATE appointments SET 
                                    service_type = '$service_type', 
                                    full_name = '$full_name', 
                                    nik = '$nik', 
                                    email = '$email', 
                                    phone_number = '$phone_number', 
                                    date_of_birth = '$date_of_birth', 
                                    gender = '$gender', 
                                    doctor = '$doctor', 
                                    appointment_date = '$appointment_date', 
                                    appointment_time = '$appointment_time', 
                                    address = '$address', 
                                    complaint = '$complaint' 
                                    WHERE id = '$id'");

// Periksa apakah proses UPDATE berhasil atau tidak
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
?>