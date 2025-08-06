<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <form action="<?=base_url('editar_equipo')?>" method="post">
                    <h1>Editar Equipo</h1>
                    <label for="txt_id_equipo_edit" class="form-label">Equipo ID</label>
                    <input type="number" name="txt_id_equipo_edit" id="txt_id_equipo_edit" class="form-control" value="<?=$datos['equipo_id'];?>" readonly>

                    <label for="txt_no_de_serie_edit" class="form-label">No. de Serie</label>
                    <input type="number" name="txt_no_de_serie_edit" id="txt_no_de_serie_edit" class="form-control" value="<?=$datos['no_serie'];?>">

                    <label for="txt_marca_id_edit" class="form-label">Marca ID</label>
                    <input type="number" name="txt_marca_id_edit" id="txt_marca_id_edit" class="form-control" value="<?=$datos['marca_id'];?>">

                    <label for="txt_descripcion_edit" class="form-label">Descripcion</label>
                    <input type="text" name="txt_descripcion_edit" id="txt_descripcion_edit" class="form-control" value="<?=$datos['descripcion'];?>">

                    <label for="txt_fecha_compra_edit" class="form-label">Fecha de Compra</label>
                    <input type="date" name="txt_fecha_compra_edit" id="txt_fecha_compra_edit" class="form-control" value="<?=$datos['fecha_compra'];?>">

                    <label for="txt_precio_edit" class="form-label">Precio</label>
                    <input type="number" name="txt_precio_edit" id="txt_precio_edit" class="form-control" value="<?=$datos['precio'];?>">

                    <label for="txt_tipo_equipo_edit" class="form-label">Tipo de Equipo</label>
                    <input type="number" name="txt_tipo_equipo_edit" id="txt_tipo_equipo_edit" class="form-control" value="<?=$datos['tipo_equipo'];?>">

                    <label for="txt_empleado_id_edit" class="form-label">Empleado ID</label>
                    <input type="number" name="txt_empleado_id_edit" id="txt_empleado_id_edit" class="form-control" value="<?=$datos['empleado_id'];?>">

                    <button type="submit" class="form-control btn btn-dark mt-3">Modificar Datos</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>