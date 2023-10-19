<?php
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
                "password" => $_POST["registerPassword"]
            );
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
            return $respuesta;
        }
    }
    /**
     * Selecion de registros de la tabla
     */
    static public function ctrSeleccionarRegistros($item, $valor)
    {
        if ($item == null && $valor == null) {
            $tabla = "registros";

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, null, null);

            return $respuesta;
        } else {
            $tabla = "registros";

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

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
                if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {

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
                    $tabla= "registros";

                    $intentos_faliidos =$respuesta ["intentos_fallidos"]+1;
                     $actualizarIntentosFallidos= ModeloFormularios::mdlActualizarIntentosFallidos($tabla, $intentos_faliidos, 
                        $respuesta["id"]);
                    echo'<pre>'; print_r($intentos_faliidos); echo'<pre>';



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
                echo '<div class="alert alert-danger">Error en el sistema ';
            }
        }

    }

    static public function ctrActualizarRegistro()
    {


        if (isset($_POST["updateName"])) {
            if ($_POST["updatePassword"] != "") {
                $password = $_POST["updatePassword"];
            } else {
                $password = $_POST["passwordActual"];
            }
            $tabla = "registros";

            $datos = array(
                "id" => $_POST["id"],
                "nombre" => $_POST["updateName"],
                "email" => $_POST["updateEmail"],
                "password" => $password
            );

            $actualizar = ModeloFormularios::mdlActualizarRegistros($tabla, $datos);

            return $actualizar;
        }


    }

    public function ctrEliminarRegistro()
{
    if (isset($_POST["deleteRegistro"])) {
        $tabla = "registros";
        $valor = $_POST["deleteRegistro"];

        $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

        if ($respuesta == "ok") {
            // Redirige después de eliminar

              
            echo '<script>
                if (window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                setTimeout(function(){
                    window.location = "index.php?pagina=invitados";
                }, 1500);
            </script>';
        }
    }
}

    

}

?>

