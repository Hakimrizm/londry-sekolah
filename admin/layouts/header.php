<?php
include '../function/functions.php';
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: ../index.php?pesan=belum_login");
}

$pelanggan = query("SELECT * FROM pelanggan");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="../public/css/style.css">
  <title>Londry</title>
  <style>
    <?php include '../public/css/style.css'; ?>
  </style>
</head>
<body>

<!-- Navigasi -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Londry</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link <?= ($_SERVER["PHP_SELF"] == "/londry_project/admin/index.php" ? "active" : ""); ?>" aria-current="page" href="index.php">Dashboard</a>
      </li>
      <li class="nav-item">
          <a class="nav-link <?= ($_SERVER["PHP_SELF"] == "/londry_project/admin/pelanggan.php" ? "active" : ""); ?>" href="pelanggan.php">Pelanggan</a>
      </li>
      <li class="nav-item">
          <a class="nav-link <?= ($_SERVER["PHP_SELF"] == "/londry_project/admin/transaksi.php" ? "active" : ""); ?>" href="transaksi.php">Transaksi</a>
      </li>
      <li class="nav-item">
          <a class="nav-link <?= ($_SERVER["PHP_SELF"] == "/londry_project/admin/laporan.php" ? "active" : ""); ?>" href="laporan.php" >Laporan</a>
      </li>
      <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Pengaturan</a>
          <ul class="dropdown-menu">
              <li><a href="harga.php" class="dropdown-item <?= ($_SERVER["PHP_SELF"] == "/londry_project/admin/harga.php" ? "active" : ""); ?>">Pengaturan Harga</a></li>
              <li><a href="ganti_pass.php" class="dropdown-item <?= ($_SERVER["PHP_SELF"] == "/londry_project/admin/ganti_pass.php" ? "active" : ""); ?>">Ganti Password</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a href="" class="dropdown-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
                  <?= $_SESSION["username"]; ?>
              </a></li>
          </ul>
      </li>
        
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
    </ul>
    <span class="navbar-text">
        Hallo, <?= $_SESSION["username"]; ?>
    </span>
    </div>
  </div>
</nav>
<!-- Akhir Navigasi -->