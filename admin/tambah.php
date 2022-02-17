<?php include 'layouts/header.php';

// include '../function/functions.php';

if( isset($_POST["tambah"]) ) {
    if( tambah($_POST) > 0 ) {
        // echo "<script>alert('Pelanggan baru berhasil ditambahkan!');
        //     document.location.href = 'index.php';
        // </script>";
        // session('diubah');
        $_SESSION["pesan"] = 'diubah';
        header("Location: index.php");
    }else {
        echo "<script>alert('Pelanggan baru gagal ditambahkan!');</script>";
        header("Location: index.php");
        exit;
    }
}

?>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mb-3">
                <div class="card-header text-center text-white bg-warning p-3">
                    <h4>Tambah Pelanggan</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nama:</label>
                            <input type="text" name="pelanggan_nama" class="form-control" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">No Hp:</label>
                            <input type="text" class="form-control" name="pelanggan_hp" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat:</label>
                            <input type="text" class="form-control" name="pelanggan_alamat" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="tambah" class="btn btn-warning text-white">Tambah</button>
                            <a href="pelanggan.php" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>