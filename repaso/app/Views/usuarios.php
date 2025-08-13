<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Usuarios</h1>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nuevo Usuario
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Usuario</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="agregarUsuario" method="post">
                                    <label for="txt_empleado_id" class="form-label">Empleado ID</label>
                                    <input type="number" name="txt_empleado_id" id="txt_empleado_id" class="form-control">

                                    <label for="txt_usuario" class="form-label">Usuario</label>
                                    <input type="text" name="txt_usuario" id="txt_usuario" class="form-control">

                                    <label for="txt_email" class="form-label">Email</label>
                                    <input type="email" name="txt_email" id="txt_email" class="form-control">

                                    <label for="txt_contrasena" class="form-label">Contraseña</label>
                                    <input type="text" name="txt_contrasena" id="txt_contrasena" class="form-control">

                                    <label for="txt_estado" class="form-label">Estado</label>
                                    <input type="text" name="txt_estado" id="txt_estado" class="form-control">

                                    <label for="txt_rol_id" class="form-label">Rol ID</label>
                                    <input type="number" name="txt_rol_id" id="txt_rol_id" class="form-control">

                                    <button type="submit" class="form-control btn btn-dark mt-3">Guardar</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Empleado ID</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th>Estado</th>
                            <th>Rol ID</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos as $usuario) {

                        ?>
                            <tr>
                                <td> <?= $usuario['empleado_id']; ?> </td>
                                <td> <?= $usuario['usuario']; ?> </td>
                                <td> <?= $usuario['email']; ?> </td>
                                <td> <?= $usuario['contrasena']; ?> </td>
                                <td> <?= $usuario['estado']; ?> </td>
                                <td> <?= $usuario['rol_id']; ?> </td>
                                <td>
                                    <a href="<?= base_url('eliminar_usuario/').$usuario['empleado_id']; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                    <a href="<?= base_url('buscar_usuario/').$usuario['empleado_id']; ?>" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>