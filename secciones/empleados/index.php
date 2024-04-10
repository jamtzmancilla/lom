<?php include("../../templates/header.php"); ?>

<h3>Empleados</h3>
<div class="card">
    <div class="card-header"><a name="agregarempleado" id="agregarempleado" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Salario</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Juan</td>
                        <td>imagen.jpg</td>
                        <td>cv.pdf</td>
                        <td>rh</td>
                        <td>21/12/1988</td>
                        <td>10</td>
                        <td><a name="" id="" class="btn btn-warning" href="editar.php" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="eliminar.php" role="button">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <?php include("../../templates/footer.php"); ?>