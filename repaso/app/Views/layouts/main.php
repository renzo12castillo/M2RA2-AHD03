<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="background-color">
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between text-center mt-5" xyz="fade up rotate-right duration-10 ease-out-back stagger">

                    <div class="card mx-3 square xyz-in" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/empleados.png') ?>" class="card-img-top" alt="Empleados">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="<?= site_url('empleados') ?>" class="text-decoration-none">Empleados</a>
                            </p>
                        </div>
                    </div>

                    <div class="card mx-3 square xyz-in" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/equipos.png') ?>" class="card-img-top" alt="Equipos">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="<?= site_url('equipos') ?>" class="text-decoration-none">Equipos</a>
                            </p>
                        </div>
                    </div>

                    <div class="card mx-3 square xyz-in" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/marcas.png') ?>" class="card-img-top" alt="Marcas">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="<?= site_url('marcas') ?>" class="text-decoration-none">Marcas</a>
                            </p>
                        </div>
                    </div>

                    <div class="card mx-3 square xyz-in" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/puestos.png') ?>" class="card-img-top" alt="Puestos">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="<?= site_url('puestos') ?>" class="text-decoration-none">Puestos</a>
                            </p>
                        </div>
                    </div>

                    <div class="card mx-3 square xyz-in" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/roles.png') ?>" class="card-img-top" alt="Roles">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="<?= site_url('roles') ?>" class="text-decoration-none">Roles</a>
                            </p>
                        </div>
                    </div>

                    <div class="card mx-3 square xyz-in" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/tipoequipo.png') ?>" class="card-img-top" alt="Tipo de Equipo">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="<?= site_url('tipoequipo') ?>" class="text-decoration-none">Tipos de Equipo</a>
                            </p>
                        </div>
                    </div>

                    <div class="card mx-3 square xyz-in" style="width: 18rem;">
                        <img src="<?= base_url('assets/images/usuarios.png') ?>" class="card-img-top" alt="Usuarios">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="<?= site_url('usuarios') ?>" class="text-decoration-none">Usuarios</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <hr>
    <?= $this->renderSection('content') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>