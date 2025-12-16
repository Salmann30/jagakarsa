<?= $this->extend('layout/main'); ?>

<?= $this->section('page-Content'); ?>

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h1 class="display-4">Berita Kelurahan</h1>
            <h3>Pusat berita dan informasi terbaru dari Kelurahan Jagakarsa untuk masyarakat</h3>
        </div>
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/berita-1.jpg" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="#!">Lurah Jagakarsa Galakkan Budi Daya Maggot</a>
                        <p class="m-0">Budi daya maggot sangat penting ditingkat Kelurahan agar dapat mengurangi sekaligus..
                        </p>
                    </div>
                    <div class="d-flex justify-content-between border-top p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small>jakarta.wahananews.co</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="far fa-calendar text-primary me-1"></i>13 Februari 2025</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/berita-1.jpg" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="#!">Contoh Positif Lewat Budi Daya Maggot</a>
                        <p class="m-0">Pihak Kelurahan Jagakarsa, Kecamatan Jagakarsa, Jakarta Selatan melakukan.. </p>
                    </div>
                    <div class="d-flex justify-content-between border-top p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small>beritajakarta.id</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="far fa-calendar text-primary me-1"></i>13 Februari 2025</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="bg-light rounded overflow-hidden">
                    <img class="img-fluid w-100" src="img/berita-1.jpg" alt="">
                    <div class="p-4">
                        <a class="h3 d-block mb-3" href="#!">Kelurahan Jagakarsa Ajak Warga Melakukan Budi Daya..</a>
                        <p class="m-0">RadarOnline.id, JAKARTA – Budi daya maggot sangat penting ditingkat..</p>
                    </div>
                    <div class="d-flex justify-content-between border-top p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small>radaronline.id</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="far fa-calendar text-primary me-1"></i>14 Februari 2025</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <a href="<?= base_url('') ?>?>" class="btn btn-primary py-3" type="submit"><i class="fa fa-arrow-left text-light me-3"></i>Kembali</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>