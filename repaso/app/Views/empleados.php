<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Empleados</h1>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nuevo Empleado
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Empleado</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="agregarEmpleado" method="post">
                                    <label for="txt_id_add" class="form-label">ID</label>
                                    <input type="number" name="txt_id_add" id="txt_id_add" class="form-control">

                                    <label for="txt_nombre_add" class="form-label">Nombre</label>
                                    <input type="text" name="txt_nombre_add" id="txt_nombre_add" class="form-control">

                                    <label for="txt_apellido_add" class="form-label">Apellido</label>
                                    <input type="text" name="txt_apellido_add" id="txt_apellido_add" class="form-control">

                                    <label for="txt_telefono_add" class="form-label">Telefono</label>
                                    <input type="tel" name="txt_telefono_add" id="txt_telefono_add" class="form-control">

                                    <label for="txt_puesto_id_add" class="form-label">Puesto ID</label>
                                    <input type="number" name="txt_puesto_id_add" id="txt_puesto_id_add" class="form-control">

                                    <label for="txt_fecha_nacimiento_add" class="form-label">Fecha de Nacimiento</label>
                                    <input type="date" name="txt_fecha_nacimiento_add" id="txt_fecha_nacimiento_add" class="form-control">

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
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>ID Puesto</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos as $empleado) {

                        ?>
                            <tr>
                                <td> <?= $empleado['empleado_id']; ?> </td>
                                <td> <?= $empleado['nombre']; ?> </td>
                                <td> <?= $empleado['apellido']; ?> </td>
                                <td> <?= $empleado['telefono']; ?> </td>
                                <td> <?= $empleado['puesto_id']; ?> </td>
                                <td> <?= $empleado['fecha_nacimiento']; ?> </td>
                                <td>
                                    <a href="<?= base_url('eliminar_empleado/') . $empleado['empleado_id']; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                    <a href="<?= base_url('buscar_empleado/') . $empleado['empleado_id']; ?>" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
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