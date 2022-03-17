<?php
   require '../db/conexion.php';
   require 'empleado.php';


   class EmpleadoModel extends Conexion{
       public $error="";
       /*Inicializamos la conexion del construct de Conexion*/
       function __construct(){
           parent::__construct();
       }

      /*Aqui colocaremos todos los metodos */

    function getEmpleados(){
        $res=$this->con->query("select empleado.id_emp as id_emp, empleado.nombre as nombre,empleado.id_dep as id_dep, departamento.nombre as depa from empleado, departamento where departamento.id_dep=empleado.id_dep order by empleado.id_emp desc");
        $r=array ();
        while ($row=$res->fetch_assoc()){
            $e=new Empleado($row["id_emp"],$row["nombre"],$row["id_dep"],$row["depa"]);
            $r[]=$e;
        }
        return $r;
    }



    function getDepartamento (){
        $res=$this->con->query("select *from departamento");
        $r=array();
        while ($row=$res->fetch_assoc()){
            $r[]=$row;
        }
       return $r;
    }


   function insertarEmpleado($e){
          try{
               /*
        $para=$this->con->prepare("insert into
         empleado(id_emp,nombre,
        id_emp) values(?,?,?)");
        $para->bind_param('sss',$a,$b,$c);   
        
        $a='';
        $b=$e->getNombre();
        $c=$e->getId_dep();
         
*/
$para=$this->con->prepare("insert into
empleado(nombre,
id_dep) values(?,?)");
$para->bind_param('ss',$b,$c);   
$b=$e->getNombre();
$c=$e->getId_dep();


        $para->execute();
    }catch(Exception $ex){
               return $ex;
           }finally{
             $para->close();
           }
     
   }


  


    function modificarEmpleado($e){
        try {
            $para=$this->con->prepare(
                "update empleado set nombre=?,id_dep=? where id_emp=?"
            );
            $para->bind_param('sss',$a,$b,$c);  
            $a=$e->getNombre();
            $b=$e->getId_Dep();
            $c=$e->getId_emp();
            $para->execute();
        }catch(Exception $ex){
                   return $ex;
               }finally{
                 $para->close();
               }

    }


function eliminarEmpleado($e){
    try {
        $para=$this->con->prepare("delete from empleado where id_emp=?");
        $para->bind_param('s',$a);
        $a=$e->getId_emp();
        $para->execute();
    } catch (Exception $ex) {
       return $ex;
    }finally{
        $para->close();
    }
}







   }
?>