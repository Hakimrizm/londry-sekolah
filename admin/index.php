<?php include 'layouts/header.php'; ?>

<div class="container mt-3">
  
  <div class="alert text-center shadow-sm" style="background-color: #6fb3b8;" role="alert">
    <h4>Selamat datang di project Loundry Saya!</h4>
  </div>

    <!-- Bagian Welcome -->
    <div class="card mb-3 shadow-sm">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title mt-5 ms-3"><span class="waktu"></span> <?= $_SESSION["username"]; ?>!</h4>
            <p class="ms-3 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium in ad reiciendis eligendi at sunt veritatis a explicabo delectus alias, aliquid soluta autem laborum porro. Vero est eveniet facilis tenetur?</p>
          </div>
          <div class="col-md-6 img">
                <img src="../public/img/ilustration.png" width="250" class="img-thumbnail" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Welcome -->

    <!-- Card Informasi -->
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm card-style">
          <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
            </svg>
              <?php
                $jumPelanggan = mysqli_query($conn, "SELECT * FROM pelanggan");
                echo mysqli_num_rows($jumPelanggan);
              ?>
              Jumlah Pelanggan
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm card-style">
          <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
            </svg>
              <?php
                $proses = mysqli_query($conn, "SELECT * FROM transaksi WHERE transaksi_status=0");
                echo mysqli_num_rows($proses);
              ?>
              Jumlah cucian Di proses
          </div>
        </div>
      </div>
        <div class="col-md-4 mb-3">
          <div class="card shadow-sm card-style">
            <div class="card-body">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
              </svg>
                <?php
                  $proses = mysqli_query($conn, "SELECT * FROM transaksi WHERE transaksi_status=2");
                  echo mysqli_num_rows($proses);
                ?>
                Jumlah cucian siap diambil
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Card Informasi -->

    <!-- Data pelanggan -->
    <div class="accordion-item mb-3 shadow-sm">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-control="collapseThree">
          Accordion Item #3
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labeldby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
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
          <?php $result = query("SELECT * FROM pelanggan,transaksi WHERE transaksi_pelanggan = pelanggan_id ORDER BY transaksi_id DESC LIMIT 7"); $i = 1; ?>
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
                  <a href="transaksi_invoice.php?id=<?= $data["transaksi_id"]; ?>" class="btn btn-info text-white" target="_blank">Invoice</a>
                  <a href="transaksi_edit.php?id=<?= $data["transaksi_id"]; ?>" class="btn btn-primary">Edit</a>
                  <a href="transaksi_hapus.php?id=<?= $data["transaksi_id"]; ?>" class="btn btn-danger">Batalkan</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
              </table>
            </div>
        </div>
      </div>
    </div>
    <!-- Akhir data pelanggan -->
</div>

<?php include 'layouts/footer.php'; ?>