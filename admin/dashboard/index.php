<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

// Menghitung total data pada tabel appointments
$total_appointments = mysqli_query($connection, "SELECT COUNT(*) FROM appointments");
$total_doctors = mysqli_query($connection, "SELECT COUNT(DISTINCT doctor) FROM appointments");
$total_services = mysqli_query($connection, "SELECT COUNT(DISTINCT service_type) FROM appointments");
$total_patients = mysqli_query($connection, "SELECT COUNT(DISTINCT nik) FROM appointments");

$total_appointments_count = mysqli_fetch_array($total_appointments)[0];
$total_doctors_count = mysqli_fetch_array($total_doctors)[0];
$total_services_count = mysqli_fetch_array($total_services)[0];
$total_patients_count = mysqli_fetch_array($total_patients)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="column">
    <div class="row">
      <!-- Card untuk Total Janji Temu -->
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-calendar-check"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Janji Temu</h4>
            </div>
            <div class="card-body">
              <?= $total_appointments_count ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Card untuk Total Dokter -->
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-user-md"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Dokter</h4>
            </div>
            <div class="card-body">
              <?= $total_doctors_count ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Card untuk Total Jenis Layanan -->
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-briefcase-medical"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Jenis Layanan</h4>
            </div>
            <div class="card-body">
              <?= $total_services_count ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Card untuk Total Pasien -->
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="far fa-user-injured"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pasien</h4>
            </div>
            <div class="card-body">
              <?= $total_patients_count ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
