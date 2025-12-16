<?= $this->extend('layout/main'); ?>

<?= $this->section('page-Content'); ?>

<style>
    .visi-misi-wrapper {
        width: 100%;
    }

    .card-custom {
        transition: 0.2s ease;
    }

    .card-custom:hover {
        transform: translateY(-3px);
    }
</style>

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h1 class="display-4">Visi & Misi Kelurahan Jagakarsa</h1>
        </div>
        <div class="visi-misi-wrapper">

            <!-- Card Visi -->
            <div class="team-item card-custom mb-3">
                <div class="row bg-light rounded overflow-hidden h-auto shadow-sm">
                    <div class="col-12 d-flex flex-column">
                        <div class="p-4">
                            <h3>Visi</h3>
                            <p class="m-0">
                                Jakarta baru, Kota Modern yang tertata rapih, menjadi tempat hunian yang
                                dan manusiawi, memiliki masyarakat yang berkebudayaan, dan dengan
                                pemerintahan yang berorientasi pada pelayanan publik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Misi -->
            <div class="team-item card-custom mb-3">
                <div class="row bg-light rounded overflow-hidden h-auto shadow-sm">
                    <div class="col-12 d-flex flex-column">
                        <div class="p-4">
                            <h3>Misi</h3>
                            <p class="m-0">
                                - Sebagai kota modern yang tertata rapih serta konsisten dengan rencana tata ruang wilayah.
                                <br><br>
                                - Menjamin ketersediaan hunian dan ruang publik yang layak serta terjangkau bagi warga kota.
                                <br><br>
                                - Membangun budaya masyarakat perkotaan yang toleran, tetapi juga sekaligus memiliki kesadaran
                                dalam memelihara wilayah/lingkungan.
                                <br><br>
                                - Membangun pemerintahan yang bersih dan transparan serta berorientasi pada pelayanan publik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 mt-5">
            <a href="<?= base_url('') ?>?>" class="btn btn-primary py-3" type="submit"><i class="fa fa-arrow-left text-light me-3"></i>Kembali</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>