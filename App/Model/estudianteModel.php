<?php
require_once $_SERVER["DOCUMENT_ROOT"] . './core/conexion.php';

class estudianteModel extends conexion
{
    private $connect;
    private $conexion;
    public function insertar($nombre, $apellido, $documento)
    {

        $this->connect = new conexion();
        $this->conexion = $this->connect->connect();
        $sql = "INSERT INTO `estudiantes` (`id`, `nombre`, `apellido`, `documento`) VALUES (NULL,?,?,?)";

        $smtp = $this->conexion->prepare($sql);
        $smtp->bind_param("sss", $nombre, $apellido, $documento);
        if ($smtp->execute()) {
            return "guardado correctamente";
        } else {
            return "error";
        }
    }
    public function showData()
    {
        $this->connect = new conexion();
        $this->conexion = $this->connect->connect();
        $smtp = $this->conexion->prepare("SELECT * FROM estudiantes");
        $smtp->execute();
        $resultado = $smtp->get_result();
        return $resultado;
    }
}
