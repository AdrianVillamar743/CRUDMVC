<?php
/*3 */
    class Empleado {
        private $id_emp;
        private $nombre;
        private $id_dep;
        private $nombre_dep;

        function __construct($id_emp,$nombre,$id_dep,$nombre_dep)
        {
           $this->id_emp=$id_emp;
           $this->nombre=$nombre;
           $this->id_dep=$id_dep;        
           $this->nombre_dep=$nombre_dep;  
        }

       function getId_emp(){
           return $this->id_emp;
       }

       function getNombre_dep(){
           return $this->nombre_dep;
       }


       function getNombre(){
           return $this->nombre;
       }

        function getId_dep(){
            return $this->id_dep;
        }


    }
?>