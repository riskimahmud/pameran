<?php

use Faker\Provider\Base;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url("assets/vegas/vegas.min.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");
    </style>

    <title>PAMERAN 20 AGUSTUS 2022</title>
</head>

<body>
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <div class="modal fade" id="my-modal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered" id="modal-full">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
    <script src="<?= base_url("assets/vegas/jquery.min.js"); ?>"></script>
    <script src="<?= base_url("assets/vegas/vegas.min.js"); ?>"></script>
    <script>
        $("body").vegas({
            delay: 7000,
            timer: false,
            shuffle: true,
            color: '#000',
            firstTransition: 'fade',
            firstTransitionDuration: 5000,
            transition: ['fade2', 'zoomOut2', 'slideDown2'],
            transitionDuration: 5000,
            animation: ['kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight'],
            overlay: true,
            slides: [{
                    src: "<?= base_url("/assets/img/slide2.png") ?>"
                },
                {
                    src: "<?= base_url("/assets/img/slide1.png") ?>"
                }
            ]
        });
    </script>

    <?= $this->renderSection('script') ?>
</body>

</html>