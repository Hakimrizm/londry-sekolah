<?php include 'layouts/header.php';

if( isset($_POST["ganti"]) ) {
  if( gantiPass($_POST) > 0 ) {
    echo "<script>alert('Password berhasil diubah!');</script>";
  }else {
    echo "<script>alert('Password gagal diubah!');</script>";
  }
}

?>

<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card mb-3">
        <div class="card-header text-center text-white" style="background-color: #6fb3b8;">
            <h4>Ganti Password</h4>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" name="username" value="<?= $_SESSION["username"]; ?>">
            <div class="mb-3">
              <label for="pwl" class="form-label">Password Lama:</label>
              <input type="password" id="pwl" name="password" class="form-control" placeholder="Masukan password lama ..">
            </div>
            <div class="mb-3">
              <label for="pwl2" class="form-label">Password Baru:</label>
              <input type="password" id="pwl2" name="passwordBaru" class="form-control" placeholder="Masukan password baru ..">
            </div>
            <div class="mb-3">
              <label for="pwl" class="form-label">Konfirmasi Password:</label>
              <input type="password" id="pwl" name="password2" class="form-control" placeholder="Konfirmasi password ..">
            </div>
            <div class="mb-3">
              <button type="submit" name="ganti" class="btn btn-primary">Ganti</button>
              <a href="index.php" class="btn btn-info text-white">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'layouts/footer.php'; ?>