<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="background-color">
    <nav>
        <div class="container">
            <div class="row">
                <div class="col text-center mt-5">
                    <a href="<?= site_url('/') ?>">Empleados</a>
                    <a href="<?= site_url('equipos') ?>" class="no_underline">Equipos</a>
                    <a href="<?= site_url('marcas') ?>">Marcas</a>
                    <a href="<?= site_url('puestos') ?>">Puestos</a>
                    <a href="<?= site_url('roles') ?>">Roles</a>
                    <a href="<?= site_url('tipoequipo') ?>">Tipos de Equipo</a>
                    <a href="<?= site_url('usuarios') ?>">Usuarios</a>
                </div>
            </div>
        </div>
    </nav>
    <hr>
    <?= $this->renderSection('content') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>