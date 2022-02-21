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
            <div class="card shadow-sm" style="background-color: rgb(178, 230, 178);">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, officia unde animi inventore nisi doloremque delectus</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm" style="background-color: #c2edce;">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, officia unde animi inventore nisi doloremque delectus</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm" style="background-color: aquamarine;">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, officia unde animi inventore nisi doloremque delectus</p>
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
                <table class="table table-striped">
                    <tr>
                        <th>asfds</th>
                        <th>afsadas</th>
                    </tr>
                    <tr>
                        <td>asdsdsa</td>
                        <td>asdsdsa</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Akhir data pelanggan -->
</div>

<?php include 'layouts/footer.php'; ?>