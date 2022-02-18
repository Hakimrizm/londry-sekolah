<?php include 'layouts/header.php';

$id = $_GET["id"];
$p = query("SELECT * FROM pelanggan WHERE pelanggan_id = $id");

if( isset($_POST["edit"]) ) {
    if( edit($_POST) > 0 ) {
        $_SESSION["pesan"] = "ubah!";
        header("Location: index.php");
    }
}

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-3 mb-3">
                <div class="card-header text-center p-3 bg-warning text-white">
                    <h4>Edit data pelanggan</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="pelanggan_id" value="<?= $p[0]["pelanggan_id"]; ?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" name="pelanggan_nama" value="<?= $p[0]["pelanggan_nama"]; ?>" class="form-control" id="nama" autocomplete="off" placeholder="Nama ..">
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="form-label">No hp:</label>
                            <input type="text" class="form-control" name="pelanggan_hp" value="<?= $p[0]["pelanggan_hp"]; ?>" id="nohp" autocomplete="off" placeholder="No Hp ..">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat:</label>
                            <input type="text" class="form-control" name="pelanggan_alamat" value="<?= $p[0]["pelanggan_alamat"] ?>" id="alamat" autocomplete="off" placeholder="Alamat ..">
                        </div>
                        <div class="mb-3 justify-content-be">
                            <button type="submit" class="btn btn-warning text-white" name="edit">Edit pelanggan</button>
                            <a href="pelanggan.php" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>