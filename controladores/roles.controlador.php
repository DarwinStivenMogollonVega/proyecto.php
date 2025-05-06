<?php

require_once "./modelos/roles.modelo.php";

class ControladorRoles{

    static public function ctrRoles(){

        if(isset($_POST["nombreRol"])){

            $tabla = "roles";

            $datos = array(
                "rol_nombre" => $_POST["nombreRol"],         

            );

            $respuesta = ModeloRoles::mdlRoles($tabla, $datos);

            return $respuesta;

        }

    }

}