<?php include 'layouts/header.php'; ?>

<div class="container">

  <!-- Judul -->
  <div class="row">
    <div class="col">
      <h3 class="mt-3 mb-3">Data Pelanggan</h3>
    </div>
  </div>
  <!-- Akhir Judul -->

  <!-- Opsi Tambah dan Cari -->
  <div class="card mb-3">
    <div class="card-body">
      <div class="row">
        <div class="col-6">
            <form action="" method="post">
              <input type="text" placeholder="Cari" class="form-control" id="keyword">
            </form>
        </div>
        <div class="col-6">
          <div class="d-flex flex-row-reverse">
            <a href="tambah.php" class="btn btn-primary">
            Tambah
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Opsi -->

  <!-- Jika Berhasil -->
  <?php if( isset($_SESSION['pesan']) ): ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong><?= $_SESSION['pesan']; ?></strong> Data berhasil diubah!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php unset($_SESSION['pesan']); ?>
  <?php endif; ?>
  <!-- Berhasil -->

  <div class="card mt-3 mb-3 shadow-sm">
    <div class="card-body search">
      <table class="table table-stiped table-hover">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Hp</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach( $pelanggan as $row ): ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $row["pelanggan_nama"]; ?></td>
              <td><?= $row["pelanggan_hp"]; ?></td>
              <td><?= $row["pelanggan_alamat"]; ?></td>
              <td>
                <a href="edit.php?id=<?= $row["pelanggan_id"]; ?>" class="btn btn-sm text-white" style="background-color: rgb(96,165,170);">Edit</a> |
                <a href="hapus.php?id=<?= $row["pelanggan_id"]; ?>" class="btn btn-sm btn-info text-white"onclick="return confirm('Apakah anda yakin?');">Hapus</a>
              </td>
            </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="../public/js/search.js"></script>

<?php include 'layouts/footer.php'; ?>