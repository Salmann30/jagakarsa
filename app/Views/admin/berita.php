<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('page-Content'); ?>

<div class="container-xxl grow container-p-y">
    <h5 class="pb-1 mb-6 fw-bold text-primary">Kelola Berita</h5>
    <button type="button" class="btn btn- btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#tambahBerita"><i class="bx bx-plus fw-bold me-2"></i>Tambah Berita Baru</button>
    <div class="row mb-12 g-6 mt-4">
        <div class="col-lg-12 col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-center">
                        <div class="avatar shrink-0">
                            <img src="<?= base_url('') ?>/admin/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                        </div>
                        <span class="text-dark fw-bold mx-3">Pelatihan Layanan Masyarakat</span>
                    </div>
                    <ul class="list-inline mt-2">
                        <li class="list-inline-item"><i class="bx bx-calendar"></i> 20 Nov 2025</li>
                        <li class="list-inline-item"><i class="bx bx-user"></i>Admin</li>
                        <li class="list-inline-item bg-success rounded-pill px-2 text-white fw-bold" style="font-size:10pt;">Dipublikasikan</li>
                    </ul>
                    <div class="justify-content-end d-flex">
                        <button data-bs-toggle="modal" data-bs-target="#editBerita" class="btn btn-sm btn-warning me-2 my-2 fw-bold text-white">
                            <i class='bx bx-edit'></i>
                        </button>
                        <a href="#hapus" class="btn btn-sm btn-danger me-2 my-2 fw-bold text-white">
                            <i class='bx bx-trash'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- INI MODAL TAMBAH -->
<div class="modal fade" id="tambahBerita" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Tambah Berita Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-6">
                        <label for="nameWithTitle" class="form-label">Judul Berita</label>
                        <input type="text" id="nameWithTitle" class="form-control" placeholder="Masukkan Judul Berita" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col mb-6">
                        <label for="nameWithTitle" class="form-label">Konten Berita</label>
                        <textarea type="text" id="nameWithTitle" class="form-control" placeholder="Masukkan Konten Berita"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- INI MODAL EDIT -->
<div class="modal fade" id="editBerita" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-6">
                        <label for="nameWithTitle" class="form-label">Judul Berita</label>
                        <input type="text" id="nameWithTitle" class="form-control" placeholder="Masukkan Judul Berita" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col mb-6">
                        <label for="nameWithTitle" class="form-label">Konten Berita</label>
                        <textarea type="text" id="nameWithTitle" class="form-control" placeholder="Masukkan Konten Berita"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>