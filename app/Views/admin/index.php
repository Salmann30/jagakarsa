<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('page-Content'); ?>

<div class="container-xxl grow container-p-y">
    <div class="row">
        <div class="col-lg-12 col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-center">
                        <div class="avatar shrink-0">
                            <img src="<?= base_url('') ?>/admin/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                        </div>
                        <span class="text-dark fw-bold mx-3">Kelola Halaman</span>
                    </div>
                    <p class="text-dark">Edit dan kelola halaman website Kelurahan Jagakarsa</p>
                    <a href="<?= base_url('/halaman') ?>" class="btn btn-sm btn-primary me-2 my-2 fw-bold text-white">Kelola Halaman
                        <i class='bx bx-arrow-to-right'></i>
                    </a>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="card-title d-flex align-items-center">
                        <div class="avatar shrink-0">
                            <img src="<?= base_url('') ?>/admin/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                        </div>
                        <span class="text-dark fw-bold mx-3">Kelola Berita</span>
                    </div>
                    <p class="text-dark">Tambah, edit, dan hapus berita Kelurahan Jagakarsa</p>
                    <a href="<?= base_url('/adminberita') ?>" class="btn btn-sm btn-primary me-2 my-2 fw-bold text-white">Kelola Berita
                        <i class='bx bx-arrow-to-right'></i>
                    </a>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="card-title d-flex align-items-center">
                        <div class="avatar shrink-0">
                            <img src="<?= base_url('') ?>/admin/assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded">
                        </div>
                        <span class="text-dark fw-bold mx-3">Pengaturan</span>
                    </div>
                    <p class="text-dark">Atur konfigurasi website Kelurahan Jagakarsa</p>
                    <a href="<?= base_url('/pengaturan') ?>" class="btn btn-sm btn-primary me-2 my-2 fw-bold text-white">Pengaturan
                        <i class='bx bx-arrow-to-right'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>