<?php
require_once "conexion.php";

class ModeloFormularios
{
    static public function mdlRegistro($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) 
            VALUES (:nombre, :email, :password)");

            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static public function mdlSeleccionarRegistros($tabla, $item = null, $valor = null)
    {
        try {
            $conexion = Conexion::conectar();
            if ($item == null && $valor == null) {
                $stmt = $conexion->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') as f FROM 
                $tabla ORDER BY id DESC");
                $stmt->execute();

                return $stmt->fetchAll();
            } else {
                $stmt = $conexion->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') as f FROM 
                $tabla WHERE $item = :$item ORDER BY id DESC");
                $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
                $stmt->execute();

                return $stmt->fetch();
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static public function mdlActualizarRegistros($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password 
            WHERE id=:id ");

            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
            $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static public function mdlEliminarRegistro($tabla, $valor)
    {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");

            $stmt->bindParam(":id", $valor, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

//actualizar intentos fallidosa
        static public function mdlActualizarIntentosFallidos($tabla, $valor, $id){
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos_fallidos =: intentos_fallidos WHERE id=:id");


            $stmt->bindParam(":intentos_fallidos", $valor, PDO::PARAM_INT);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }

}
?>
