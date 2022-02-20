<?php include 'layouts/header.php'; ?>

<div class="container">
    <div class="card bg-light mt-3 mb-3 shadow-sm">
        <div class="card-body">
            <h4 class="card-title">Data Pelanggan</h4>
            <a href="tambah.php" class="btn btn-sm btn-warning text-white mb-3">Tambah</a>
            <?php if( isset($_SESSION["pesan"]) ): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong>, Pelanggan berhasil di<?= $_SESSION["pesan"]; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php unset($_SESSION["pesan"]); ?>
            <?php endif; ?>
            <table class="table table-stiped shadow-sm table-hover bg-light">
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
                                <a href="edit.php?id=<?= $row["pelanggan_id"]; ?>" class="btn btn-sm btn-warning text-white">Edit</a> |
                                <a href="hapus.php?id=<?= $row["pelanggan_id"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                            </td>
                        </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>