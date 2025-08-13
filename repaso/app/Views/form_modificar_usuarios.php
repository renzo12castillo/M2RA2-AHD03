<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <form action="<?=base_url('editar_usuario')?>" method="post">
                    <h1>Editar Usuario</h1>
                    <label for="txt_empleado_id_edit" class="form-label">Empleado ID</label>
                    <input type="number" name="txt_empleado_id_edit" id="txt_empleado_id_edit" class="form-control" value="<?=$datos['empleado_id'];?>" readonly>

                    <label for="txt_usuario_edit" class="form-label">Usuario</label>
                    <input type="text" name="txt_usuario_edit" id="txt_usuario_edit" class="form-control" value="<?=$datos['usuario'];?>" readonly>

                    <label for="txt_email_edit" class="form-label">Email</label>
                    <input type="email" name="txt_email_edit" id="txt_email_edit" class="form-control" value="<?=$datos['email'];?>">

                    <label for="txt_contrasena_edit" class="form-label">Contraseña</label>
                    <input type="text" name="txt_contrasena_edit" id="txt_contrasena_edit" class="form-control" value="<?=$datos['contrasena'];?>">

                    <label for="txt_estado_edit" class="form-label">Estado</label>
                    <input type="text" name="txt_estado_edit" id="txt_estado_edit" class="form-control" value="<?=$datos['estado'];?>">

                    <label for="txt_rol_id_edit" class="form-label">Rol ID</label>
                    <input type="number" name="txt_rol_id_edit" id="txt_rol_id_edit" class="form-control" value="<?=$datos['rol_id'];?>">

                    <button type="submit" class="form-control btn btn-dark mt-3">Modificar Datos</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>