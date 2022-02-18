<?php include 'layouts/header.php'; ?>

<div class="container">

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
                        <button type="button" name="" class="btn btn-warning text-white">Ubah Harga</button>
                        <a href="pelanggan.php" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<?php include 'layouts/footer.php'; ?>