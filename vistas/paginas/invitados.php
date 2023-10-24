<?php
if (!isset($_SESSION["validarIngreso"])) {
    echo '<script>window.location="index.php?pagina=login";</script>';
    return;
} else {
    if ($_SESSION["validarIngreso"] != "ok") {
        echo '<script>window.location="index.php?pagina=login";</script>';
        return;
    }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
?>

<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <!-- Agrega contenido dentro de esta sección si es necesario -->
        </div>
    </div>
</section>

<div class="container">
    <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
        <h2 class="section__title">
            Registro
        </h2>
        <img src="assets/img/tittle/flower.png" alt="flower__tittle">
    </div>
</div>

<div class="container-fluid">
    <div class="container py-4">
        <!-- Resto del código aquí -->
    </div>
</div>
