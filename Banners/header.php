<?php

    $urls = "http://localhost/Integradora/";

?>


<!doctype html>
<html lang="es">
    <head>
        <title>Amelia Project</title>
        <!-- Required meta tags -->

        <link rel="shortcut icon" href="imagenes/icono.png" />
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="stylesheet" href="<?php echo $urls; ?>CSS/style.css">

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> <!--para las propiedades del java script-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <script src="../Js/funciones.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="jquery-3.7.1.min.js"></script>
    </head>

    <body>
        <header>
                <nav
                    class="navbar navbar-expand-sm navbar-dark" style="background-color: #1C1F32;"
                >
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="http://localhost/integradora/imagenes/Logo3.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                Amelia
                        </a>
                        
                        <button
                            class="navbar-toggler d-lg-none"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapsibleNavId"
                            aria-controls="collapsibleNavId"
                            aria-expanded="false"
                            aria-label="Toggle navigation">

                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="<?php echo $urls; ?>index.php" aria-current="page"
                                        >Inicio
                                        <span class="visually-hidden">(current)</span></a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $urls; ?>cursos/Masusados.php">Materias</a>
                                </li>
                                
                            </ul>
                           

                            </form>
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Cuenta
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                            <!--<li><a class="dropdown-item" href="#">Configuracion</a></li>

                                        -->
                                            <li><a class="dropdown-item" href="<?php echo $urls; ?>suscripcion.php">Ser Premium</a></li> 
                                            <li><a class="dropdown-item" href="<?php echo $urls; ?>login.php">Cerrar Sesion</a></li>
                                        </ul>
                                    </li>
                                </ul>

                        </div>
                    </div>
                </nav>
                
        </header>
        <main>

<!--
        <div class="dropdown pb-4 nav-item">
                                    <a href="#" class="nav-link d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        
                                        <span class="d-none d-sm-inline mx-1">Cuenta</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                        <li><a class="dropdown-item" href="#">Configuracion</a></li>
                                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="<?php echo $urls; ?>login.php">Cerrar Sesion</a></li>
                                    </ul>
                                </div>
-->
       