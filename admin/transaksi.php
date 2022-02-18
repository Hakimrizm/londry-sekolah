<?php include 'layouts/header.php'; ?>

<div class="container">

<div class="panel bg-light p-4 mb-3 mt-3 shadow-sm">
    <div class="panel-heading">
        <h4>Daftar Transaksi Laundry</h4>
    </div>
    <div class="panel-body">
        <a href="#" class="btn btn-warning text-white mb-3">Tambah Transaksi</a>
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
            <tr>
                <td>1</td>
                <td>INVOICE-1</td>
                <td>2021-11-05</td>
                <td>Sasha Brouse</td>
                <td>3</td>
                <td>2021-11-08</td>
                <td>Rp. 45,000,-</td>
                <td>
                    <div class="badge bg-warning rounded-pill">PROSES</div>
                </td>
                <td>
                    <a href="#" class="btn btn-warning text-white">Invoice</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Batalkan</a>
                </td>
            </tr>
        </table>
    </div>
</div>

</div>

<?php include 'layouts/footer.php'; ?>