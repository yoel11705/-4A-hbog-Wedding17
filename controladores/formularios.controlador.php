<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class ControladorFormularios
{
    /*
    REGISTRO
    */
    static public function crtRegistro()
    {
        if (isset($_POST["registerName"])) {
            $tabla = "registros";
            $datos = array(
                "nombre" => $_POST["registerName"],
                "email" => $_POST["registerEmail"],
                "password" => password_hash($_POST["registerPassword"], PASSWORD_DEFAULT) // Almacena la contraseña de forma segura
            );
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
            return $respuesta;
        }
    }

    /**
     * Ingreso
     */
    public function ctrIngreso()
    {
        if (isset($_POST["ingresoEmail"])) {
            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            if (is_array($respuesta)) {
                if ($respuesta["email"] == $_POST["ingresoEmail"] && password_verify($_POST["ingresoPassword"], $respuesta["password"])) {

                    $_SESSION["validarIngreso"] = "ok";

                    echo "Ingreso Exitoso";

                    echo '<script>
                        if (window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                        setTimeout(function(){
                            window.location.href = "index.php?pagina=inicio";
                        }, 500);
                    </script>';
                } else {
                    $tabla = "registros";

                    $intentos_fallidos = $respuesta["intentos_fallidos"] + 1;
                    $actualizarIntentosFallidos = ModeloFormularios::mdlActualizarIntentosFallidos($tabla, $intentos_fallidos, $respuesta["id"]);

                    echo '<script>
                        if (window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>';
                    echo '<div class="alert alert-danger">Error al ingresar al sistema</div>';
                }
            } else {
                echo '<script>
                    if (window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>';
                echo '<div class="alert alert-danger">Error en el sistema';
            }
        }
    }
}
?>
