<?php include("../../templates/header.php"); ?>
</br>
<h3>Empresas</h3>
<div class="card">
    <div class="card-header"><a name="agregarempresa" id="agregarempresa" class="btn btn-primary" href="crear.php" role="button">Agregar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">RFC</th>
                        <th scope="col">CP</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">email</th>
                        <th scope="col">Representante</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Lombard</td>
                        <td>Pamir 9</td>
                        <td>MAMJ881221IR5</td>
                        <td>91164</td>
                        <td>2282874884</td>
                        <td>jamtzmancilla@gmail.com</td>
                        <td>Juan Mancilla</td>
                        <td>Moral</td>
                        <td><a name="" id="" class="btn btn-warning" href="editar.php" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="eliminar.php" role="button">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <?php include("../../templates/footer.php"); ?>