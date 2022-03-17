

<?php
/*Numero 2 para consumir los archivos de la conexiomn */
require 'parametros.php';
class Conexion{
    protected $con;
    function __construct()
    {
        $this->con=new mysqli(SERVER,USER,PASSWORD,BASE);
        $this->con->set_charset(CHAR);
    }
}


?>