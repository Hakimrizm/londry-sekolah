<?php include 'layouts/header.php';

if( isset($_POST["simpan"]) ) {
  if( tambahT($_POST) > 0 ) {
    $_SESSION["pesanT"] = 'Tambah transaksi berhasil ditambahkan';
    header("Location: transaksi.php");
  }else {
    echo "Gagal!";
  }
}

?>

<div class="container">
  <div class="panel mb-3 mt-3 p-4 bg-light">
    <div class="panel-heading">
      <h4>Transaksi</h4>
    </div>
    <div class="panel-body">
      <div class="col-md-8 col-md-offset-2">
        <form action="" method="post">
          <div class="mb-3">
            <label for="pilih" class="form-label">Pilih Pelanggan</label>
            <select name="pelanggan" id="pilih" class="form-select">
              <option value="" selected>Pilih Pelanggan</option>
              <?php foreach( $pelanggan as $row ): ?>
                <option value="<?= $row["pelanggan_id"]; ?>"><?= $row["pelanggan_nama"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="berat" class="form-label">Berat</label>
            <input type="number" name="transaksi_berat" class="form-control" placeholder="Masukan berat cucian .." id="berat" required>
          </div>
          <div class="mb-3">
            <label for="tgl" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" name="transaksi_tgl_selesai" placeholder="Masukan tanggal selesai .." id="tgl" required>
          </div>
          <table class="table table-bordered table-striped">
            <tr>
              <th>Jenis Pakaian</th>
              <th width="20%">Jumlah</th>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
              <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
              <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
              <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
              <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
              <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
              <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
              <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
              <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
            </tr>
          </table>

          <div class="mb-3">
              <button type="submit" class="btn btn-success text-white" name="simpan">Simpan</button>
              <a href="transaksi.php" class="btn btn-primary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'layouts/footer.php'; ?>