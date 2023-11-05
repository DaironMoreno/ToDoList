<?php

include $_SERVER["DOCUMENT_ROOT"] . './App/Model/estudianteModel.php';
class estudiantesController extends estudianteModel
{
    private $DB;
    private $conexion;
    public function SaveData($nombre, $apellido, $documento)
    {

        $this->DB = new estudianteModel();
        $resultado = $this->DB->insertar($nombre, $apellido, $documento);
        return $resultado;
    }
    public function show()
    {
        $this->DB = new estudianteModel();
        $resultado = $this->conexion = $this->DB->showData();
        $arr = [];
        while ($fila = $resultado->fetch_assoc()) {
            $arr[] = $fila;
        }
        $respuestaJson = json_encode($arr);
        return $respuestaJson;
    }
    public function DeleteData()
    {
    }
}

$estudiante = new estudiantesController();
if (!empty($_POST)) {
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST["apellido"] ?? '';
    $documento = $_POST["documento"] ?? '';

    $estudiante->SaveData($nombre, $apellido, $documento);
}
