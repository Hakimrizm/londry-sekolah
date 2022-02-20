<?php include 'layouts/header.php'; ?>

<div class="container">
    <div class="panel bg-light p-4 mt-3 mb-3">
        <div class="panel-heading">
            <h4>Filter Laporan</h4>
        </div>
        <div class="panel-body">

            <form action="laporan_cetak.php" method="get">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Dari Tanggal</th>
                        <th>Sampai tanggal</th>
                        <th width="1%"></th>
                    </tr>
                    <tr>
                        <td><input type="date" name="tgl_dari" class="form-control"></td>
                        <td><input type="date" name="tgl_sampai" class="form-control"></td>
                        <td><button type="submit" class="btn btn-warning text-white">Filter</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <?php if( isset($_GET["tgl_dari"]) && isset($_GET["tgl_sampai"]) ): ?>
        <?php $dari = $_GET["tgl_dari"]; $sampai = $_GET["tgl_sampai"]; ?>
        <div class="panel bg-light p-4 mb-3">
            <div class="panel-heading">
                <h4 class="text-center">Data laporan londry dari <?= $dari; ?> sampai <?= $sampai; ?></h4>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'layouts/footer.php'; ?>