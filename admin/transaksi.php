<?php include 'layouts/header.php'; ?>

<div class="container">

<div class="card bg-light mb-3 mt-3 shadow-sm">
  <div class="card-body">
    <h4 class="card-title">Daftar Transaksi Laundry</h4>
    <a href="transaksi_tambah.php" class="btn btn-primary text-white mb-3">Tambah Transaksi</a>

    <!-- Menampilkan Pesan -->
    <?php if( isset($_SESSION["pesanT"]) ): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong>, <?= $_SESSION["pesanT"]; ?>!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php unset($_SESSION["pesanT"]); ?>
    <?php endif; ?>
    <!-- Akhir Menampilkan Pesan -->

    <table class="table table-bordered table-striped">
      <tr>
        <th width="1%">No</th>
        <th>Invoice</th>
        <th>Tanggal</th>
        <th>Pelanggan</th>
        <th>Berat (Kg)</th>
        <th>Tgl. Selesai</th>
        <th>Harga</th>
        <th>Status</th>
        <th width="20%">OPSI</th>
      </tr>
      <?php $result = query("SELECT * FROM pelanggan,transaksi WHERE transaksi_pelanggan = pelanggan_id ORDER BY transaksi_id DESC"); $i = 1; ?>
      <?php foreach( $result as $data ): ?>
        <tr>
          <td><?= $i; ?></td>
          <td>INVOICE-<?= $data["transaksi_id"]; ?></td>
          <td><?= $data["transaksi_tgl"]; ?></td>
          <td><?= $data["pelanggan_nama"]; ?></td>
          <td><?= $data["transaksi_berat"]; ?>Kg</td>
          <td><?= $data["transaksi_tgl_selesai"]; ?></td>
          <td>Rp. <?= number_format($data["transaksi_harga"]); ?></td>
          <td>
            <?php
              if( $data["transaksi_status"] == "0" ) {
                echo "<div class='badge bg-warning'>PROSES</div>";
              }else if( $data["transaksi_status"] == "1" ) {
                echo "<div class='badge bg-info'>DICUCI</div>";
              }else if( $data["transaksi_status"] == "2" ) {
                echo "<div class='badge bg-success'>SELESAI</div>";
              }
            ?>
          </td>
          <td>
            <a href="transaksi_invoice.php?id=<?= $data["transaksi_id"]; ?>" class="btn btn-info text-white btn-sm" target="_blank">Invoice</a>
            <a href="transaksi_edit.php?id=<?= $data["transaksi_id"]; ?>" class="btn btn-primary btn-sm">Edit</a>
            <a href="transaksi_hapus.php?id=<?= $data["transaksi_id"]; ?>" class="btn btn-danger btn-sm">Batalkan</a>
          </td>
        </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>
</div>

</div>

<?php include 'layouts/footer.php'; ?>