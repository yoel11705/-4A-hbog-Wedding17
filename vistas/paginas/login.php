<section class="breadcumd__banner">

    <div class="container">
        <div class="breadcumd__wrapper center">
        </div>
    </div>
</section>


<div class="container">
    <div class="section__header section__center wow fadeInDown" data-wow-duration="5s">
        <h2 class="section__title">
            Inicia sesión
        </h2>
        <img src="assets/img/tittle/flower.png" alt="flower__tittle">
    </div>
</div>



<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <label for="email">Email address:</label>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="ingresoEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd"
                    name="ingresoPassword">


            </div>
        </div>
        <?php
        $ingreso = new ControladorFormularios();
        $ingreso->ctrIngreso();
        ?>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

</div>