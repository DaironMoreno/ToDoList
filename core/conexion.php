<?php
class conexion
{

    private $connect;
    private $user = "root";
    private $pass = "20624101";

    private $db   = "escuela_test";
    private $host = "localhost";

    protected function connect()
    {

        $this->connect = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->connect->error) {
            echo "Existe un error de conexión " . $this->connect->error;
        }
        return $this->connect;
    }
    protected function disconnect()
    {
        $this->connect = null;
    }
}
