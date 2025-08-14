<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <?= $this->extend('layouts/main') ?>

    <?= $this->section('content') ?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5" xyz="fade small stagger">
                <h1 class="square xyz-in">Inventario</h1>
                <iframe src="<?= base_url('assets/images/inventario.gif') ?>" frameborder="0" allowfullscreen class="square xyz-in" width="500px" height="500px"></iframe>
            </div>
        </div>
    </div>
    
    <?= $this->endSection() ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>