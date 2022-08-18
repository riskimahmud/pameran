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
    <style>
        body {
            background-color: #bcbcbc;
        }
    </style>

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="mt-5">
            <div class="card shadow shadow-lg" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
    <script src="<?= base_url("assets/vegas/jquery.min.js"); ?>"></script>
    <script src="<?= base_url("assets/vegas/vegas.min.js"); ?>"></script>
    <script>
        $("body").vegas({
            // cover: false,
            slides: [{
                    src: "<?= base_url("/assets/img/slide2.png") ?>"
                },
                {
                    src: "<?= base_url("/assets/img/slide1.png") ?>"
                }
            ]
        });
    </script>
</body>

</html>