<?php include 'layouts/header.php'; ?>

<div class="container mt-3">
    <div class="alert alert-warning text-center shadow-sm" role="alert">
        <h4>Selamat datang di project Loundry Saya!</h4>
    </div>
    <div class="panel bg-light mb-3 p-4 shadow-sm">
        <div class="panel-heading">
            <h4>Dashboard</h4>
        </div>
        <div class="panel-body">
            <?php if( isset($_SESSION["pesan"]) ): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong>, Pelanggan berhasil di<?= $_SESSION["pesan"]; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php unset($_SESSION["pesan"]); ?>
            <?php endif; ?>
            <h4 class="text-end"><span class="waktu"></span> <?= $_SESSION["username"]; ?>!</h4>
        </div>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>