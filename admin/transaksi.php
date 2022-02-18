<?php include 'layouts/header.php'; ?>

<div class="container">

<div class="panel bg-light p-4 mb-3 mt-3 shadow-sm">
    <div class="panel-heading">
        <h4>Daftar Transaksi Laundry</h4>
    </div>
    <div class="panel-body">
        <a href="transaksi_tambah.php" class="btn btn-warning text-white mb-3">Tambah Transaksi</a>
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
            <?php $result = query("SELECT * FROM pelanggan,transaksi WHERE transaksi_pelanggan = pelanggan_id ORDER BY transaksi_id DESC"); $i = 1; ?>
            <?php foreach( $result as $data ): ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>INVOICE-<?= $data["transaksi_id"]; ?></td>
                    <td><?= $data["transaksi_tanggal"]; ?></td>
                    <td><?= $data["pelanggan_nama"]; ?></td>
                    <td>3</td>
                    <td><?= $data["tansaksi_tgl_selesai"]; ?></td>
                    <td>Rp. <?= .number_format($data["transaksi_harga"]); ?></td>
                    <td>
                        <?php
                            if( $data["transaksi_status"] == "0" ) {
                                echo "<div class='label label-warning'>PROSES</div>";
                            }else if( $data["transaksi_status"] == "1" ) {
                                echo "<div class='label label-warning'>DICUCI</div>";
                            }else if( $data["transaksi_status"] == "2" ) {
                                echo "<div class='label label-warning'>DICUCI</div>";
                            }
                        ?>
                    </td>
                    <td>
                        <a href="#" class="btn btn-warning text-white">Invoice</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Batalkan</a>
                    </td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</div>

</div>

<?php include 'layouts/footer.php'; ?>