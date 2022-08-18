<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center mt-2">
    <a href="<?= base_url("/"); ?>" class="btn btn-primary col-md-2 mr-1"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
    <!-- <span class="col-md-1"></span>
    <a href="#" class="btn btn-success col-md-2"><i class="bi bi-house"></i> Beranda</a> -->
</div>
<div class="mt-4">

    <h1 class="text-center fw-bold text-white title mb-5">DAFTAR UMKM</h1>
    <div class="row justify-content-center">

        <?php foreach ($toko as $t) : ?>
            <div class="col-md-3 mb-4">
                <a href="<?= base_url("umkm/" . $t['folder']); ?>" class="text-decoration-none text-dark">
                    <div class="card shadow shadow-lg">
                        <div class="foto-profil">
                            <img src="<?= base_url("uploads/" . $t['folder'] . "/profil.jpeg"); ?>" class="" alt="Foto Profil">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-white text-shadow"><?= $t['nama_toko'] ?></h5>
                            <p class="card-text text-white text-shadow"><?= $t['alamat'] ?></p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>