<?= $this->extend('admin/layout/main'); ?>

<?= $this->section('page-Content'); ?>
<div class="container-xxl grow container-p-y">
    <div class="card mb-6">
        <div class="card-body">
            <h5 class="fw-bold">Profile Details</h5>
            <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom">
                <img src="<?= base_url('') ?>/admin/assets/img/avatars/1.png" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">
                <div class="button-wrapper ms-3">
                    <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                        <span class="d-none d-sm-block">Upload foto baru</span>
                        <i class="icon-base bx bx-upload d-block d-sm-none"></i>
                        <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                    </label>

                    <div style="font-size:10pt;">Hanya file JPG, dan PNG. Ukuran maks. 800Kb</div>
                </div>
            </div>
        </div>
        <div class="card-body pt-4">
            <form id="formAccountSettings" method="POST" onsubmit="return false">
                <div class="row g-6">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">Username</label>
                        <input class="form-control" type="text" id="firstName" name="firstName" value="salmanskuy" autofocus="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" value="Muhammad Salman">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Jabatan</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" value="Admin">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">No. Telepon</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" value="Muhammad Salman">
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3">Simpan</button>
                    <button type="reset" class="btn btn-outline-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body pt-4">
            <h5 class="fw-bold">Statistik Pengunjung</h5>
            <form id="formAccountSettings" method="POST" onsubmit="return false">
                <div class="row g-6">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">Total Pengunjung</label>
                        <input class="form-control" type="text" id="firstName" name="firstName" value="salmanskuy" autofocus="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Penngunjung Bulanan</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" value="Muhammad Salman">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Tanggal Update Terakhir</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" value="Admin">
                    </div>
                </div>
                <div class="alert alert-secondary alert-dismissible text-dark" role="alert">
                    <span class="fw-bold">Catatan :</span> Statistik pengunjung per-perangkat dihitung otomatis dari localStorage dan tidak dapat diubah di sini.
                    Untuk integrasi dengan backend atau Google Analytics yang sebenarnya, hubungi developer.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3">Perbarui Statistik</button>
                    <button type="reset" class="btn btn-outline-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>