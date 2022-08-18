<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="p-2 text-center rounded-pill rounded-top " id="top-logo">
        <img src="<?= base_url("assets/img/logo-gorontalokota.png"); ?>" alt="" class="logo-top">
    </div>
</div>

<div class="row justify-content-between mt-5">
    <div class="col-md-3 text-center p-3">
        <div class="menu-dashboard">
            <a href="#" id="pajak" class="text-decoration-none">
                <img class="img-menu" src="<?= base_url("assets/img/tax.png"); ?>" alt="">
                <h1 class="fs-1 text-center text-white fw-bold title">PAJAK</h1>
            </a>
        </div>
    </div>
    <div class="col-md-3 text-center p-3">
        <div class="menu-dashboard">
            <a href="#" id="retribusi" class="text-decoration-none">
                <img class="img-menu" src="<?= base_url("assets/img/retribusi.png"); ?>" alt="">
                <h1 class="fs-1 text-center text-white fw-bold title">RETRIBUSI</h1>
            </a>
        </div>
    </div>
    <div class="col-md-3 text-center p-3">
        <div class="menu-dashboard">
            <a href="<?= base_url("umkm"); ?>" class="text-decoration-none">
                <img class="img-menu" src="<?= base_url("assets/img/umkm.png"); ?>" alt="">
                <h1 class="fs-1 text-center text-white fw-bold title">UMKM</h1>
            </a>
        </div>
    </div>
    <div class="col-md-3 text-center p-3">
        <div class="menu-dashboard">
            <a href="#" id="ptsp" class="text-decoration-none">
                <img class="img-menu" src="<?= base_url("assets/img/ptsp.png"); ?>" alt="">
                <h1 class="fs-1 text-center text-white fw-bold title">PTSP</h1>
            </a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $("#pajak").on("click", function(e) {
        let content = `
            <h5>Kemudahan membayar Pajak secara online dengan QRIS.</h5>
        `;
        $(".modal-title").html('PAJAK');
        $(".modal-body").html(content);
        $("#my-modal").modal("show");
    })

    $("#retribusi").on("click", function(e) {
        let qris = '<?= base_url("assets/img/qris-retribusi.jpeg") ?>'
        let content = `
        <div class="text-center">
            <h5>Kemudahan membayar Retribusi dengan QRIS.</h5>
            <img src="${qris}" class="img-modal">
        </div>
        `;
        $(".modal-title").html('RETRIBUSI');
        $(".modal-body").html(content);
        $("#my-modal").modal("show");
    })
    $("#ptsp").on("click", function(e) {
        let content = `
        <div class="text-center">
            <h5>Pelayanan Perizinan dan Non Perizinan terpadu dalam Satu Pintu, secara online melalui OSS dan SiCantik</h5>
        </div>
        `;
        $(".modal-title").html('PTSP');
        $(".modal-body").html(content);
        $("#my-modal").modal("show");
    })
</script>
<?= $this->endSection() ?>