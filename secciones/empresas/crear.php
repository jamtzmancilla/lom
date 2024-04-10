<?php include("../../templates/header.php"); ?>

<!--<h1>crear empleados</h1> Encabezado-->
</br>
<div class="card">
    <div class="card-header">Agregar datos de la empresa</div>
    <div class="card-body">

    <div class="mb-3">
        <label for="nombreempresa" class="form-label">Nombre</label>
        <input
            type="text"
            class="form-control"
            name="nombreempresa"
            id="nombreempresa"
            aria-describedby="helpId"
            placeholder="Nombre Empresa"
        />
           </div>
           <div class="mb-3">
            <label for="domicilioempresa" class="form-label">Domicilio de la empresa</label>
            <input
                type="text"
                class="form-control"
                name="domicilioempresa"
                id="domicilioempresa"
                aria-describedby="helpId"
                placeholder="Domicilio de la empresa"
            />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">RFC</label>
                        <input
                            type="text"
                            class="form-control"
                            name="rfcempresa"
                            id="rfcempresa"
                            aria-describedby="helpId"
                            placeholder="RFC de la empresa "
                        />
                         </div>

                        <div class="mb-3">
                            <label for="cpempresa" class="form-label">CP</label>
                            <input
                                type="text"
                                class="form-control"
                                name="cpempresa"
                                id="cpempresa"
                                aria-describedby="helpId"
                                placeholder="Codigo Postal"
                            />
                           </div>

                    <div class="mb-3">
                        <label for="telefonoempresa" class="form-label">Telefono</label>
                        <input
                            type="text"
                            class="form-control"
                            name="telefonoempresa"
                            id="telefonoempresa"
                            aria-describedby="helpId"
                            placeholder="Telefono"
                        />
                        </div>

                        <div class="mb-3">
                            <label for="emailempresa" class="form-label">email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="emailempresa"
                                id="emailempresa"
                                aria-describedby="helpId"
                                placeholder="email"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="representantelegal" class="form-label">Representante</label>
                            <input
                                type="text"
                                class="form-control"
                                name="representantelegal"
                                id="representantelegal"
                                aria-describedby="helpId"
                                placeholder="Representante Legal"
                            />
                            </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Tipo</label>
                            <select
                                multiple
                                class="form-select form-select-lg"
                                name="tipoempresa"
                                id="tipoempresa"
                            >
                                <option selected>Selecciona</option>
                                <option value="1">Persona Fisica</option>
                                <option value="2">Persona Moral</option>
                                <option value="3">RESICO</option>
                            </select>
                          </div>        
        <button type="summit" class="btn btn-success">
            Agregar registro
        </button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </div>
    <div class="card-footer text-muted"> </div>
</div>







<?php include("../../templates/footer.php"); ?>