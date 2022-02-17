<?php include 'layouts/header.php'; ?>

<div class="container">
    <div class="panel bg-light p-4 mt-3 mb-3 shadow-sm">
        <div class="panel-heading">
            <h4>Data Pelanggan</h4>
        </div>
        <div class="panel-body">
            <a href="tambah.php" class="btn btn-sm btn-success mb-3">Tambah</a>
            <table class="table table-striped shadow-sm">
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