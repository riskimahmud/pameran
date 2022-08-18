<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="p-2 text-center rounded-pill rounded-top " id="top-logo">
        <img src="<?= base_url("assets/img/logo-gorontalokota.png"); ?>" alt="" class="logo-top">
    </div>
</div>

<div class="row justify-content-between mt-5">
    <div class="menu-dashboard col-md-3 text-center">
        <a href="#" class="text-decoration-none">
            <img class="img-menu" src="<?= base_url("assets/img/tax.png"); ?>" alt="">
            <h1 class="fs-1 text-center text-white fw-bold title">PAJAK</h1>
        </a>
    </div>
    <div class="menu-dashboard col-md-3 text-center">
        <a href="#" class="text-decoration-none">
            <img class="img-menu" src="<?= base_url("assets/img/retribusi.png"); ?>" alt="">
            <h1 class="fs-1 text-center text-white fw-bold title">RETRIBUSI</h1>
        </a>
    </div>
    <div class="menu-dashboard col-md-3 text-center">
        <a href="<?= base_url("umkm"); ?>" class="text-decoration-none">
            <img class="img-menu" src="<?= base_url("assets/img/umkm.png"); ?>" alt="">
            <h1 class="fs-1 text-center text-white fw-bold title">UMKM</h1>
        </a>
    </div>
    <div class="menu-dashboard col-md-3 text-center">
        <a href="#" class="text-decoration-none">
            <img class="img-menu" src="<?= base_url("assets/img/ptsp.png"); ?>" alt="">
            <h1 class="fs-1 text-center text-white fw-bold title">PTSP</h1>
        </a>
    </div>
</div>

<?= $this->endSection() ?>