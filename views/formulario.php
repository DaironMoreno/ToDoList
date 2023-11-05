<div>
    <form id="formulario">
        Nombre: <input type="text" name="nombre" id="nom" /><br>
        Apellido: <input type="text" name="apellido" id="ape" /><br>
        Documento: <input type="text" name="documento" id="doc" /><br>
        <input type="button" value="Enviar" id="enviarData" onclick="SaveData()">
    </form>
    <table class="table table-primary">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Documento</td>
            </tr>
        </thead>
        <tbody id="tbody"></tbody>
    </table>
    <div id="resultado"></div>
</div>