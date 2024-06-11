<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Janji Temu</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>Tipe Layanan</td>
                <td><input class="form-control" type="text" name="service_type" required></td>
              </tr>

              <tr>
                <td>Nama Lengkap</td>
                <td><input class="form-control" type="text" name="full_name" required></td>
              </tr>

              <tr>
                <td>NIK</td>
                <td><input class="form-control" type="text" name="nik" required></td>
              </tr>

              <tr>
                <td>Email</td>
                <td><input class="form-control" type="email" name="email" required></td>
              </tr>

              <tr>
                <td>Nomor Telepon</td>
                <td><input class="form-control" type="text" name="phone_number" required></td>
              </tr>

              <tr>
                <td>Tanggal Lahir</td>
                <td><input class="form-control" type="text" name="date_of_birth" required></td>
              </tr>

              <tr>
                <td>Jenis Kelamin</td>
                <td>
                  <select class="form-control" name="gender" id="gender" required>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Dokter</td>
                <td><input class="form-control" type="text" name="doctor" required></td>
              </tr>

              <tr>
                <td>Tanggal Janji Temu</td>
                <td><input class="form-control" type="text" name="appointment_date" required></td>
              </tr>

              <tr>
                <td>Waktu Janji Temu</td>
                <td><input class="form-control" type="text" name="appointment_time" required></td>
              </tr>

              <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" name="address" required></textarea></td>
              </tr>

              <tr>
                <td>Keluhan</td>
                <td><textarea class="form-control" name="complaint" required></textarea></td>
              </tr>
              
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
              </tr>

            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
