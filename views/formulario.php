<div>
    <div class="card">
        <div class="card-body">
            <form id="formulario">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="nom" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nom" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="ape" class="form-label">Apellido</label>
                        <input type="text" name="apellido" id="ape" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="doc" class="form-label">Documento</label>
                        <input type="text" name="documento" id="doc" class="form-control">
                    </div>
                    <div class="col-12">
                        <input type="button" value="Guardar" class="btn btn-primary btn-lg" id="enviarData" onclick="SaveData()">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Documento</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody id="tbody"></tbody>
    </table>
    <div id="resultado"></div>
</div>