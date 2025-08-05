<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <form action="<?=base_url('editar_empleado')?>" method="post">
                    <h1>Editar Empleado</h1>
                    <label for="txt_id" class="form-label">ID</label>
                    <input type="number" name="txt_id" id="txt_id" class="form-control" value="<?=$datos['empleado_id'];?>" readonly>

                    <label for="txt_nombre" class="form-label">Nombre</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'];?>">

                    <label for="txt_apellido" class="form-label">Apellido</label>
                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" value="<?=$datos['apellido'];?>">

                    <label for="txt_numero" class="form-label">Telefono</label>
                    <input type="tel" name="txt_numero" id="txt_numero" class="form-control" value="<?=$datos['telefono'];?>">

                    <label for="txt_id_puesto" class="form-label">ID Puesto</label>
                    <input type="number" name="txt_id_puesto" id="txt_id_puesto" class="form-control" value="<?=$datos['puesto_id'];?>">

                    <label for="txt_fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="txt_fecha_nacimiento" id="txt_fecha_nacimiento" class="form-control" value="<?=$datos['fecha_nacimiento'];?>">

                    <button type="submit" class="form-control btn btn-dark mt-3">Modificar Datos</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>