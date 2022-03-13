<?php

include '../function/functions.php';

$keyword = $_GET['keyword'];

$pelanggan = query("SELECT * FROM pelanggan");

if( isset($keyword) ) {
  $pelanggan = cari($keyword);

  if( $pelanggan == [] ) {
    echo "<div class='alert alert-danger'>Data tidak ditemukan!</div>";
  }

}


?>

<table class="table table-stiped table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Hp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach( $pelanggan as $row ): ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $row["pelanggan_nama"]; ?></td>
        <td><?= $row["pelanggan_hp"]; ?></td>
        <td><?= $row["pelanggan_alamat"]; ?></td>
        <td>
          <a href="edit.php?id=<?= $row["pelanggan_id"]; ?>" class="btn btn-sm text-white" style="background-color: rgb(96,165,170);">Edit</a> |
          <a href="hapus.php?id=<?= $row["pelanggan_id"]; ?>" class="btn btn-sm btn-info text-white"onclick="return confirm('Apakah anda yakin?');">Hapus</a>
        </td>
      </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>