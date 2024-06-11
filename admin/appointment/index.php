<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM appointments");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Janji Temu</h1>
    <a href="./create.php" class="btn btn-primary">Tambah Janji Temu</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tipe Layanan</th>
                  <th>Nama</th>
                  <th>NIK</th>
                  <th>Email</th>
                  <th>Nomor Telepon</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Dokter</th>
                  <th>Tanggal Janji Temu</th>
                  <th>Waktu Janji Temu</th>
                  <th>Alamat</th>
                  <th>Keluhan</th>
                  <th style="width: 150px;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['service_type'] ?></td>
                    <td><?= $data['full_name'] ?></td>
                    <td><?= $data['nik'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['phone_number'] ?></td>
                    <td><?= $data['date_of_birth'] ?></td>
                    <td><?= $data['gender'] ?></td>
                    <td><?= $data['doctor'] ?></td>
                    <td><?= $data['appointment_date'] ?></td>
                    <td><?= $data['appointment_time'] ?></td>
                    <td><?= $data['address'] ?></td>
                    <td><?= $data['complaint'] ?></td>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?id=<?= $data['id'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="edit.php?id=<?= $data['id'] ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                    </td>
                  </tr>

                <?php
                endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>
