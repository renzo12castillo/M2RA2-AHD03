<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Puestos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <form action="<?=base_url('editar_puesto')?>" method="post">
                    <h1>Editar Equipo</h1>
                    <label for="txt_puesto_id_edit" class="form-label">Puesto ID</label>
                    <input type="number" name="txt_puesto_id_edit" id="txt_puesto_id_edit" class="form-control" value="<?=$datos['puesto_id'];?>" readonly>

                    <label for="txt_puesto_edit" class="form-label">Puesto</label>
                    <input type="text" name="txt_puesto_edit" id="txt_puesto_edit" class="form-control" value="<?=$datos['puesto'];?>">

                    <button type="submit" class="form-control btn btn-dark mt-3">Modificar Datos</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>