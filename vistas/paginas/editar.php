<?php 
    
    if(!isset($_SESSION["validarIngreso"])){
        echo '<script>window.location="index.php?pagina=login";</script>';
        return;
    } else {
    
        if ($_SESSION["validarIngreso"] != "ok") {
            echo '<script>window.location="index.php?pagina=login";</script>';
            return;
        }
    }
?>

<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
        </div>
    </div>
</section>
<div class="container">
    <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
        <h2 class="section__title">
            Estas editando
        </h2>
        <img src="assets/img/tittle/flower.png" alt="flower__tittle">
    </div>
</div>
<!--=========== Breadcumd Section Here ========= -->
<?php
if (isset($_GET["id"])) {
    $item = "id";
    $valor = $_GET["id"];

    // Obtener los datos del usuario utilizando el controlador
    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
}
?>


<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" placeholder="name"
                    id="name" name="updateName">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" value="<?php echo $usuario["email"]; ?>"
                    placeholder="Enter email" id="email" name="updateEmail">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="updatePassword">

                <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">

                <input type="hidden" name="id" value="<?php echo $usuario["id"]; ?>">
            </div>
        </div>

        <?php
        // Verificar si se ha realizado la actualización de usuario
        $actualizar = ControladorFormularios::ctrActualizarRegistro();
        if ($actualizar == "ok") {
            // Actualización exitosa, mostrar mensaje y redirigir
            echo '<script>
                if (window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';

            echo '<div class="alert-success"> El usuario ha sido actualizado</div>
                <script>
                    setTimeout(function(){
                        window.location = "index.php?pagina=invitados";
                    }, 1000);
                </script>';
        }
        ?>

        <div class="d-flex justify-content-center text-center">
            <form class="p-5 bg-light" method="post">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
</div>
