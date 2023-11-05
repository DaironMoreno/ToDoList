<?php

include $_SERVER["DOCUMENT_ROOT"] . './App/Model/estudianteModel.php';
class showDataestudiantesController extends estudianteModel
{
    private $DB;
    private $conexion;

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
}
$estudiante = new showDataestudiantesController();
echo $estudiante->show();
