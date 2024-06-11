<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM appointments WHERE id='$id'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Janji Temu</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Tipe Layanan</td>
                  <td><input class="form-control" type="text" name="service_type" required value="<?= $row['service_type'] ?>"></td>
                </tr>
                <tr>
                  <td>Nama Lengkap</td>
                  <td><input class="form-control" type="text" name="full_name" size="20" required value="<?= $row['full_name'] ?>"></td>
                </tr>
                <tr>
                  <td>NIK</td>
                  <td><input class="form-control" type="text" name="nik" size="20" required value="<?= $row['nik'] ?>"></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input class="form-control" type="email" name="email" required value="<?= $row['email'] ?>"></td>
                </tr>
                <tr>
                  <td>Nomor Telepon</td>
                  <td><input class="form-control" type="text" name="phone_number" required value="<?= $row['phone_number'] ?>"></td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td><input class="form-control" type="text" name="date_of_birth" required value="<?= $row['date_of_birth'] ?>"></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>
                    <select class="form-control" name="gender" id="gender" required>
                      <option value="Laki-laki" <?php if ($row['gender'] == "Laki-laki") {
                                                    echo "selected";
                                                  } ?>>Laki-laki</option>
                      <option value="Perempuan" <?php if ($row['gender'] == "Perempuan") {
                                                    echo "selected";
                                                  } ?>>Perempuan</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Dokter</td>
                  <td><input class="form-control" type="text" name="doctor" required value="<?= $row['doctor'] ?>"></td>
                </tr>
                <tr>
                  <td>Tanggal Janji Temu</td>
                  <td><input class="form-control" type="text" name="appointment_date" required value="<?= $row['appointment_date'] ?>"></td>
                </tr>
                <tr>
                  <td>Waktu Janji Temu</td>
                  <td><input class="form-control" type="text" name="appointment_time" required value="<?= $row['appointment_time'] ?>"></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><textarea class="form-control" name="address" required><?= $row['address'] ?></textarea></td>
                </tr>
                <tr>
                  <td>Keluhan</td>
                  <td><textarea class="form-control" name="complaint" required><?= $row['complaint'] ?></textarea></td>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  </td>
                </tr>
              </table>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
