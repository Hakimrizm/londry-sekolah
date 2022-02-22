<?php include 'layouts/header.php';

if( isset($_POST["ubahHarga"]) ) {
    if( ubahHarga($_POST) > 0 ) {
        echo "<script>alert('Harga berhasil diubah!')</script>";
    }else {
        echo "<script>alert('Harga gagal diubah!')</script>";
    }
}

?>

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-3 mb-3">
                <div class="card-header">
                    <h4>Pengaturan harga Laundry</h4>
                </div>
                <div class="card-body">
                    <?php $harga = query("SELECT harga_per_kilo FROM harga"); ?>
                    <?php foreach( $harga as $x ): ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga per kilo</label>
                                <input type="number" class="form-control" name="harga_per_kilo" value="<?= $x["harga_per_kilo"]; ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="ubahHarga" class="btn btn-primary">Ubah Harga</button>
                                <a href="pelanggan.php" class="btn btn-info text-white">Kembali</a>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'layouts/footer.php'; ?>