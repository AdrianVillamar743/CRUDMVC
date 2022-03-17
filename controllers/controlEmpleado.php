<?php

 require '../models/empleadoModel.php';

 $error="";
 $obEmp=new EmpleadoModel();

    if (isset($_REQUEST["insertar"])) {
        # code...
        $e=new Empleado($_REQUEST["id_emp"],$_REQUEST["nombre"],$_REQUEST["id_dep"],'');
         $error=$obEmp->insertarEmpleado($e);
    }

    if (isset($_REQUEST["modificar"])) {
        # code...
        $e=new Empleado($_REQUEST["id_emp"],$_REQUEST["nombre"],$_REQUEST["id_dep"],'');
         $error=$obEmp->modificarEmpleado($e);
    }


    if (isset($_REQUEST["eliminar"])) {
        # code...
        $e=new Empleado($_REQUEST["id_emp"],$_REQUEST["nombre"],$_REQUEST["id_dep"],'');
         $error=$obEmp->eliminarEmpleado($e);
    }

$datos=$obEmp->getEmpleados();
$dep=$obEmp->getDepartamento();

 require '../views/empleadoVista.php';

?>