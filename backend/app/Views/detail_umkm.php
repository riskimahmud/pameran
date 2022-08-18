<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<div class="row justify-content-between mt-2">
    <a href="<?= base_url("/umkm"); ?>" class="btn btn-primary col-md-2 mr-1"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
    <!-- <span class="col-md-1"></span> -->
    <a href="<?= base_url("/"); ?>" class="btn btn-success col-md-2"><i class="bi bi-house"></i> Beranda</a>
</div>
<div class="mt-4">

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url("uploads/" . $toko['folder'] . "/profil.jpeg"); ?>" class="img-fluid rounded-start foto-profil-detail" alt="profil">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body opacity-50">
                            <h1 class="card-title  fw-bold text-white title"><?= $toko['nama_toko'] ?></h1>
                            <p class="card-text fs-5 text-white text-shadow"><?= $toko['alamat'] ?></p>
                            <p class="card-text fs-6 text-white text-shadow">Pemilik : <span class="fw-bold"><?= $toko['pemilik'] ?></span></p>
                            <p class="card-text fs-6 text-white text-shadow">WA : <span class="fw-bold"><?= $toko['telp'] ?></span></p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="bg-success px-2 mb-2">
                <h5 class="text-white">SCAN QRIS</h5>
                <span class="d-block text-white fs-6">Gunakan QRCode dibawah untuk melakukan pembayaran.</span>
            </div>
            <img class="qr" src="<?= base_url("uploads/" . $toko['folder'] . "/qr.jpeg"); ?>" alt="Tidak Ada QRIS">
        </div>
    </div>
    <!-- <h1 class="text-center fw-bold text-white title"><?= $toko['nama_toko'] ?></h1> -->
    <div class="row justify-content-center">
        <?php foreach ($produk as $p) : ?>
            <div class="col-md-3 mb-4">
                <div class="card shadow shadow-lg">
                    <div class="foto-profil">
                        <img src="<?= base_url("uploads/" . $toko['folder'] . "/" . $p['gambar']); ?>" class="" alt="Foto Produk">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-white text-shadow"><?= $p['nama_produk'] ?></h5>
                        <?php if ($p['harga_promo'] != "") {
                            echo '<p class="card-text"><span class="text-decoration-line-through fw-bold text-danger">Rp. ' . number_format($p['harga'], 0, ',', '.') . '</span> <span class="fs-5 text-white text-shadow">Rp. ' . number_format($p['harga_promo'], 0, ',', '.') . '</span></p>';
                        } else {
                            echo '<p class="card-text text-white text-shadow">' . number_format($p['harga'], 0, ',', '.') . '</p>';
                        } ?>
                        <!-- <p class="card-text text-decoration-line-through text-danger"><?= $p['harga'] ?></p> -->
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>