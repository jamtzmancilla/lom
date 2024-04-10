<?php include("../../templates/header.php"); ?>

<h3>Usuarios</h3>
<div class="card">
    <div class="card-header"><a name="agregarusuario" id="agregarusuario" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">email</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Juan</td>
                        <td>imagen.jpg</td>
                        <td>jefe</td>
                        <td>Representante</td>
                        <td>21/12/1988</td>
                        <td>juanitobananas@gmail.com</td>
                        <td><a name="" id="" class="btn btn-warning" href="editar.php" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="eliminar.php" role="button">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <?php include("../../templates/footer.php"); ?>