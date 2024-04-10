<?php include("../../templates/header.php"); ?>

<!--<h1>crear empleados</h1> Encabezado-->
</br>
<div class="card">
    <div class="card-header">Agregar datos del empleado</div>
    <div class="card-body">

        <form action="" method="post" enctype="multipart/form-data"></form>
        <div class="mb-3">
            <label for="primernombre" class="form-label">Primer Nombre</label>
            <input type="text" class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" placeholder="Primer Nombre" />
        </div>
        <div class="mb-3">
            <label for="segundonombre" class="form-label">Segundo Nombre</label>
            <input type="text" class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId" placeholder="Segundo Nombre" />
        </div>
        <div class="mb-3">
            <label for="apellidopaterno" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" name="apellidopaterno" id="apellidopaterno" aria-describedby="apellidopaterno" placeholder="Apellido Paterno" />
        </div>
        <div class="mb-3">
            <label for="apellidomaterno" class="form-label">Apellido Materno</label> <input type="text" class="form-control" name="apellidomaterno" id="apellidomaterno" aria-describedby="apellidomaterno" placeholder="Apellido Materno" />
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label> <input type="file" class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Foto" />
        </div>
        <div class="mb-3">
            <label for="cv" class="form-label">CV</label> <input type="file" class="form-control" name="cv" id="cv" placeholder="CV" aria-describedby="fileHelpId" />
        </div>
        <div class="mb-3">
            <label for="idpuesto" class="form-label">Puesto</label>
            <select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
                <option selected>Select one</option>
                <option value="">New Delhi</option>
                <option value="">Istanbul</option>
                <option value="">Jakarta</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="fechaingreso" class="form-label">Fecha de Ingreso</label>
            <input type="date" class="form-control" name="fechaingreso" id="fechaingreso" aria-describedby="emailHelpId" placeholder="Fecha de Ingreso" />

        </div>
        <div class="mb-3">
            <label for="salario" class="form-label">Salario</label>
            <input
                type="text"
                class="form-control"
                name="salario"
                id="salario"
                aria-describedby="helpId"
                placeholder="Salario"
            />
            </div>
        
        <button type="summit" class="btn btn-success">
            Agregar registro
        </button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </div>
    <div class="card-footer text-muted"> </div>
</div>







<?php include("../../templates/footer.php"); ?>