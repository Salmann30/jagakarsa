<!-- Topbar Start -->
<div class="container-fluid py-2 border-bottom d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-decoration-none text-body pe-3" href="#!"><i
                            class="bi bi-telephone me-2"></i>021-7270954</a>
                    <span class="text-body">|</span>
                    <a class="text-decoration-none text-body px-3" href="#!"><i
                            class="bi bi-envelope me-2"></i>kel_jagakarsa@jakarta.go.id</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body" href="https://www.instagram.com/kel.jagakarsa01?igsh=djlldHJmcjA3bTNz">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body ps-3" href="https://youtube.com/@kel.jagakarsa01">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="text-body ps-3" href="https://www.tiktok.com/@kel.jagakarsa01?_t=ZS-90mgNpLBiT6&_r=1">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h2 class="m-0 text-uppercase text-success"><i class="fa fa-clinic-medical me-2"></i>Jagakarsa</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <?php

                    use Faker\Provider\Base;

                    $uri = service('uri'); ?>
                    <a href="<?= base_url('') ?>" class="nav-item nav-link <?= ($uri->getSegment(1) == '') ? 'active' : '' ?>">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url('tentang') ?>" class="dropdown-item <?= ($uri->getSegment(1) == 'tentang') ? 'active' : '' ?>">Tentang Kelurahan</a>
                            <a href="<?= base_url('visi') ?>" class="dropdown-item <?= ($uri->getSegment(1) == 'visi') ? 'active' : '' ?>">Visi & Misi</a>
                            <a href="<?= base_url('struktur') ?>" class="dropdown-item <?= ($uri->getSegment(1) == 'struktur') ? 'active' : '' ?>">Struktur Organisasi</a>
                            <a href="<?= base_url('tugas') ?>" class="dropdown-item <?= ($uri->getSegment(1) == 'tugas') ? 'active' : '' ?>">Tugas & Fungsi</a>
                            <a href="<?= base_url('pjlp') ?>" class="dropdown-item <?= ($uri->getSegment(1) == 'pjlp') ? 'active' : '' ?>">PJLP</a>
                        </div>
                    </div>
                    <a href="<?= base_url('lembaga') ?>" class="nav-item nav-link <?= ($uri->getSegment(1) == 'lembaga') ? 'active' : '' ?>">Lembaga</a>
                    <a href="<?= base_url('layanan') ?>" class="nav-item nav-link <?= ($uri->getSegment(1) == 'layanan') ? 'active' : '' ?>">Layanan</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url('berita') ?>" class="dropdown-item <?= ($uri->getSegment(1) == 'berita') ? 'active' : '' ?>">Berita</a>
                            <a href="<?= base_url('banjir') ?>" class="dropdown-item <?= ($uri->getSegment(1) == 'banjir') ? 'active' : '' ?>">Area Rawan Banjir</a>
                        </div>
                    </div>
                    <a href="<?= base_url('chatbot') ?>" class="nav-item nav-link <?= ($uri->getSegment(1) == 'chatbot') ? 'active' : '' ?>">Chatbot</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->