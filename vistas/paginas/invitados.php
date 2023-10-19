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
</section>
<div class="container-fluid">
    <div class="container py-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha</th>
                    <th>Administrar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($usuarios as $key => $value) : ?>
                    <tr>
                        <td>
                            <?php echo $key + 1; ?>
                        </td>
                        <td>
                            <?php echo $value["nombre"]; ?>
                        </td>
                        <td>
                            <?php echo $value["email"]; ?>
                        </td>
                        <td>
                            <?php echo $value["f"]; ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <div class="px-1">
                                    <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning">
                                        <i class="fa-solid fa-pen-ruler"></i>
                                    </a>
                                </div>
                                <form method="post">
                                    <input type="hidden" value="<?php echo $value["id"]; ?>" name="deleteRegistro">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <?php
                                    $eliminar = new ControladorFormularios();
                                    $eliminar->ctrEliminarRegistro();
                                    ?>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>