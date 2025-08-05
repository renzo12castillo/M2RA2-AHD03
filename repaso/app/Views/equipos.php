<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Equipos</h1>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nuevo Equipo
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
                                    <label for="txt_equipo_id" class="form-label">Equipo ID</label>
                                    <input type="number" name="txt_equipo_id" id="txt_equipo_id" class="form-control">

                                    <label for="txt_no_serie" class="form-label">No. de Serie</label>
                                    <input type="number" name="txt_no_serie" id="txt_no_serie" class="form-control">

                                    <label for="txt_apellido_add" class="form-label">Marca ID</label>
                                    <input type="number" name="txt_apellido_add" id="txt_apellido_add" class="form-control">

                                    <label for="txt_descripcion" class="form-label">Descripcion</label>
                                    <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control">

                                    <label for="txt_fecha_compra" class="form-label">Fecha de Compra</label>
                                    <input type="date" name="txt_fecha_compra" id="txt_fecha_compra" class="form-control">

                                    <label for="txt_precio" class="form-label">Precio</label>
                                    <input type="number" name="txt_precio" id="txt_precio" class="form-control">

                                    <label for="txt_tipo_equipo" class="form-label">Tipo de Equipo</label>
                                    <input type="number" name="txt_tipo_equipo" id="txt_tipo_equipo" class="form-control">

                                    <label for="txt_empleado_id" class="form-label">Empleado ID</label>
                                    <input type="number" name="txt_empleado_id" id="txt_empleado_id" class="form-control">

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
                            <th>Equipo ID</th>
                            <th>No. de Serie</th>
                            <th>Marca ID</th>
                            <th>Descripcion</th>
                            <th>Fecha de Compra</th>
                            <th>Precio</th>
                            <th>Tipo de Equipo</th>
                            <th>Empleado ID</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos as $equipo) {

                        ?>
                            <tr>
                                <td> <?= $equipo['equipo_id']; ?> </td>
                                <td> <?= $equipo['no_serie']; ?> </td>
                                <td> <?= $equipo['marca_id']; ?> </td>
                                <td> <?= $equipo['descripcion']; ?> </td>
                                <td> <?= $equipo['fecha_compra']; ?> </td>
                                <td> <?= $equipo['precio']; ?> </td>
                                <td> <?= $equipo['tipo_equipo']; ?> </td>
                                <td> <?= $equipo['empleado_id']; ?> </td>
                                <td>
                                    <!-- EN ESTE TD DEBES AGREGRAR LOS BOTONES DE ELIMINAR Y MODIFICAR -->
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