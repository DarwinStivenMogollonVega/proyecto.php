<?php

require_once "modelos/conexion.php";

class ModeloRoles {

    /*=============================================
    Registrar producto en inventario
    =============================================*/
    static public function mdlRoles($tabla, $datos) {

        $sql = "INSERT INTO {$tabla} (rol_nombre) 
                VALUES (:roles)";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":roles", $datos["rol_nombre"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }
}
