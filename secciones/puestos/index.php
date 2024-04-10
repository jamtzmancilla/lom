<?php include("../../templates/header.php");?>
</br>
<h3>Puestos</h3>
<div class="card">
    <div class="card-header">
    <div class="card-header"><a name="agregarpuesto" id="agregarpuesto" class="btn btn-primary" href="crear.php" role="button">Agregar Puesto</a>
    </div>
    </div>
    <div class="card-body">
       
<div
    class="table-responsive-sm"
>
    <table
        class="table"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Puesto</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>patron</td>
                <td><input
                    name="btneditar"
                    id="btneditar"
                    class="btn btn-warning"
                    type="button"
                    value="Editar">
                <input
                    name="borrar"
                    id="borrar"
                    class="btn btn-danger"
                    type="button"
                    value="Eliminar"
                />
                
            </tr>
            
        </tbody>
    </table>
</div>




    <div class="card-footer text-muted">Footer</div>
</div>



<?php include("../../templates/footer.php"); ?>
            