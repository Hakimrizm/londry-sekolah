<?php include 'layouts/header.php';

$id = $_GET["id"];

$transaksi_edit = query("SELECT * FROM transaksi WHERE transaksi_id = $id");

if( isset($_POST["edit_transaksi"]) ) {
    if( editTransaksi($_POST) > 0 ) {
        $_SESSION["pesanT"] = "Data transaksi berhasil diubah";
        header("Location: transaksi.php");
    }else {
        $_SESSION["pesanT"] = "Data transaksi gagal diubah!";
        header("Location: transaksi.php");
    }
}

?>
<div class="container">
    
    <div class="panel mb-3 mt-3 p-4 bg-light">
        <div class="panel-heading">
            <h4>Edit Transaksi</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
                <?php foreach( $transaksi_edit as $data ): ?>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $data["transaksi_id"]; ?>">
                        <div class="mb-3">
                            <label for="pilih" class="form-label">Pilih Pelanggan</label>
                            <select name="pelanggan" id="pilih" class="form-select">
                                <option value="">Pilih Pelanggan</option>
                                <?php foreach($pelanggan as $row): ?>
                                    <option <?= ($row["pelanggan_id"] === $data["transaksi_pelanggan"] ? "selected='selected'" : "");?> value="<?= $row["pelanggan_id"]; ?>"><?= $row["pelanggan_nama"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat</label>
                            <input type="number" class="form-control" name="transaksi_berat" placeholder="" value="<?= $data["transaksi_berat"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tgls" class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" name="transaksi_tgl_selesai" value="<?= $data["transaksi_tgl_selesai"]; ?>">
                        </div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Jenis Pakaian</th>
                                <th width="20%">Jumlah</th>
                            </tr>
                            
                            <?php $id_transaksi = $data["transaksi_id"]; 
                                $pakaian = query("SELECT * FROM pakaian WHERE pakaian_transaksi=$id_transaksi");
                            ?>

                            <?php foreach( $pakaian as $p ): ?>
                                <tr>
                                    <td><input type="text" class="from-control" name="pakaian_jenis[]" value="<?= $p["pakaian_jenis"]; ?>"></td>
                                    <td><input type="number" class="form-control" name="pakaian_jumlah[]" value="<?= $p["pakaian_jumlah"]; ?>"></td>
                                </tr>
                            <?php endforeach; ?>
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
                        <div class="mb-3 alert alert-info">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option <?= ($data["transaksi_status"] === "0" ? "selected" : "") ?> value="0">PROSES</option>
                                <option <?= ($data["transaksi_status"] === "1" ? "selected" : "") ?> value="1">DICUCI</option>
                                <option <?= ($data["transaksi_status"] === "2" ? "selected" : "") ?> value="2">SELESAI</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="edit_transaksi" class="btn btn-warning text-white">Simpan</button>
                            <a href="transaksi.php" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
        
</div>
<?php include 'layouts/footer.php'; ?>