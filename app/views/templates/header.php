<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">

    <script src="<?= BASEURL; ?>/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?= BASEURL; ?>/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?= BASEURL; ?>/node_modules/sweetalert2/dist/sweetalert2.min.css">

    <title><?= $data['judul']; ?></title>
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-primary bg-gradient">
            <div class="container">
                <a class="navbar-brand text-light" href="<?= BASEURL; ?>">INVENTARIS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-light" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    <a class="nav-link" href="<?= BASEURL; ?>home/listData">Peminjaman</a>
                </div>
                </div>

            </div>

        </nav>
    </div>
    


