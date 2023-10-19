<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="author" content="NextGenerationDev">


         <title>wedding-isja117</Wedding-isja117></title>


    
    <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/main.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e2ad21b169.js" crossorigin="anonymous"></script>


</head>

<body>

    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <?php if (isset($_GET["pagina"])) : ?>
                    <div class="logo-menu">
                        <?php if ($_GET["pagina"] == "inicio") : ?>
                            <a href="index.php?pagina=inicio" class="logo">
                                <img src="assets/img/logo/logo1.png" alt="img">
                            </a>
                        <?php else : ?>
                            <a href="index.php?pagina=inicio" class="logo">
                                <img src="assets/img/logo/logo1.png" alt="img">
                            </a>
                        <?php endif ?>
                    </div>

                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="main-menu">
                        <?php if ($_GET["pagina"] == "login") : ?>
                            <li class="active">
                                <a href="index.php?pagina=login">Iniciar</a>
                            </li>
                        <?php else : ?>
                            <li class="active">
                                <a href="index.php?pagina=login">Iniciar</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "register") : ?>
                            <li class="active">
                                <a href="index.php?pagina=register">Registro</a>
                            </li>
                        <?php else : ?>
                            <li class="active">
                                <a href="index.php?pagina=register">Registro</a>
                            </li>
                        <?php endif ?>
                        <?php if ($_GET["pagina"] == "inicio") : ?>
                            <li class="active">
                                <a href="index.php?pagina=inicio">Inicio</a>
                            </li>
                        <?php else : ?>
                            <li class="active">
                                <a href="index.php?pagina=inicio">Inicio</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "about") : ?>
                            <li>
                                <a href="index.php?pagina=about">Acerca de</a>
                            </li>

                        <?php else : ?>
                            <li>
                                <a href="index.php?pagina=about">Acerca de</a>
                            </li>

                        <?php endif ?>

                        <li>
                            <a href="#0">Servicio<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">

                                <?php if ($_GET["pagina"] == "service") : ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=service">
                                            <span>Service</span>
                                        </a>
                                    </li>
                                <?php else : ?>
                                    <li class="active">
                                        <a href="index.php?pagina=service">Servicios</a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "service-single") : ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=service-single">
                                            <span>Service Single</span>
                                        </a>
                                    </li>
                                <?php else : ?>
                                    <li class="active">
                                        <a href="index.php?pagina=service-single">Service Single</a>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </li>
                        <?php if ($_GET["pagina"] == "story") : ?>
                            <li>
                                <a href="index.php?pagina=story">hsitria</a>
                            </li>
                        <?php else : ?>
                            <li class="active">
                                <a href="index.php?pagina=story">Historia</a>
                            </li>
                        <?php endif ?>
                        <li>
                            <a href="#0">Pagina<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <?php if ($_GET["pagina"] == "event") : ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=event">
                                            <span>Our event</span>
                                        </a>
                                    </li>
                                <?php else : ?>
                                    <li class="active">
                                        <a href="index.php?pagina=event">Our event</a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "gallery") : ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=gallery">
                                            <span>Galeria</span>
                                        </a>
                                    </li>
                                <?php else : ?>
                                    <li class="active">
                                        <a href="index.php?pagina=gallery">
                                            Galeria
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "error") : ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=error">
                                            <span>Error 404</span>
                                        </a>
                                    </li>
                                <?php else : ?>
                                    <li class="active">
                                        <a href="index.php?pagina=error">
                                            <span>Error 404</span>
                                        </a>
                                    </li>
                                <?php endif ?>


                            </ul>
                        </li>
                        <li>
                            <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <?php if ($_GET["pagina"] == "blog") : ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                <?php else : ?>
                                    <li class="active">
                                        <a href="index.php?pagina=blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "blog-single") : ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=blog-single">
                                            <span>Blog Single</span>
                                        </a>
                                    </li>
                                <?php else : ?>
                                    <li class="active">
                                        <a href="index.php?pagina=blog-single">
                                            <span>Blog Single</span>
                                        </a>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </li>

                        <?php if ($_GET["pagina"] == "invitados") : ?>
                            <li class="subtwohober">
                                <a href="index.php?pagina=invitados">
                                    <span>Invitados</span>
                                </a>
                            </li>
                        <?php else : ?>
                            <li class="active">
                                <a href="index.php?pagina=invitados">
                                    <span>Invitados</span>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if ($_GET["pagina"] == "blog-single") : ?>
                            <li>
                                <a href="index.php?pagina=contact">Salir</a>
                            </li>
                        <?php else : ?>
                            <li class="active">
                                <a href="index.php?pagina=contact">
                                    <span>Salir</span>
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                <?php else : ?>
                    <ul class="main-menu">
                        <li>
                            <a href="index.php?pagina=login">Iniciar</a>
                        </li>
                        <li>
                            <a href="index.php?pagina=register">Registro</a>

                        </li>
                        <li class="active">
                            <a href="index.php?pagina=inicio">Iniciio</a>
                        </li>
                        <li>
                            <a href="index.php?pagina=about">acerca de</a>
                        </li>
                        <li>
                            <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="subtwohober">
                                    <a href="index.php?pagina=service">
                                        <span>Service</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=service-single">
                                        <span>Service Single</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="story.html">Our story</a>
                        </li>
                        <li>
                            <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="subtwohober">
                                    <a href="index.php?pagina=event">
                                        <span>Our event</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=gallery">
                                        <span>Galleria</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=error">
                                        <span>Error 404</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=invitados">
                                        <span>preguntas</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="subtwohober">
                                    <a href="index.php?pagina=blog">
                                        <span>Blog</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=blog-single">
                                        <span>Blog Single</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.php?pagina=contact">Contact</a>
                        </li>

                    </ul>

                <?php endif ?>
            </div>
        </div>
    </header>

  

        <?php
        if (isset($_GET["pagina"])) {

            if (
                $_GET["pagina"] == "inicio" ||
                $_GET["pagina"] == "about" ||
                $_GET["pagina"] == "service" ||
                $_GET["pagina"] == "story" ||
                $_GET["pagina"] == "gallery" ||
                $_GET["pagina"] == "blog" ||
                $_GET["pagina"] == "contact" ||
                $_GET["pagina"] == "service-single" ||
                $_GET["pagina"] == "event" ||
                $_GET["pagina"] == "error" ||
                $_GET["pagina"] == "blog-single" ||
                $_GET["pagina"] == "login" ||
                $_GET["pagina"] == "register" ||
                $_GET["pagina"] == "invitados" ||
                $_GET["pagina"] == "editar"
            ) {
                $p = $_GET["pagina"];
                include "paginas/" . $p . ".php";
            } else {
                include "paginas/error.php";
            }
        } else {
            include "paginas/login.php";
        }
        ?>
    </div>


    <div class="footer__section">
        <div class="container">
            <div class="border__area">
                <div class="container">
                    <div class="footer__logo center">
                        <a href="index.php?pagina=inicio">
                            <img src="assets/img/logo/logo.png" alt="footer__logo">
                        </a>
                    </div>
                    <div class="footer__bottom center">
                        <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
                        <ul class="footer__icon">
                        <ul class="footer__menu">

                            <li><a href="index.php?pagina=inicio">home</a></li>
                            <li><a href="index.php?pagina=about">about</a></li>
                            <li><a href="index.php?pagina=service">service</a></li>
                            <li><a href="index.php?pagina=story">Story</a></li>
                            <li><a href="index.php?pagina=gallery">gallery</a></li>
                            <li><a href="index.php?pagina=blog">blog</a></li>
                            <li class="mr-none"><a href="index.php?pagina=contact">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>