<?php
    include("../Banners/header.php");
?>


    <div class="container-fluid img-fluid shadow p-4 mb-4"   style="background: url('<?php echo $urls?>imagenes/banner2.jpg') no-repeat center center/cover; height:30vh;">
        <div class="row justify-content-center text-center align-items-center ">
            <h1 class=" bg-dark bg-opacity-75  text-light " style="margin-top: 50px;width:300px;">Lo más buscado</h1>
        </div>

    </div>
    <br>
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <h1 class="display-3">De nuestra variedad de cursos, estas son las materias más solicitadas: </h1>
        </div>
    </div>
    <hr class="shadow">
    <div class="container-fluid ">

        <div class="row text-center ">

            <div class="col-sm-6">
                    <a href="Mate/Base.php">
                        <img class=" img-fluid shadow p-4 mb-4 tito " src="../imagenes/Mate.jpg" style="height: 400px; width:95%;"  alt="Title" />
                    </a>
                    <h1>Matematicas</h1>
            </div>
            <div class="col-sm-6">
                <div class="">
                    <a href="Programacion/Base.php">
                        <img class="img-fluid shadow p-4 mb-4 tito"   src="../imagenes/Progra.jpg"  style="height: 400px; width:95%;" alt="Title" />
                    </a>
                    <h1>Programación</h1>
                </div>
            </div>
            
            
        </div>
        <br>
        <div class="row mt-3 text-center">

            <div class="col-sm-6">
                    <a href="Idiomas/Base.php">
                        <img class=" img-fluid shadow p-4 mb-4 tito" src="../imagenes/Ingles.jpg" style="height: 400px; width:95%;"  alt="Title" />
                    </a>
                    <h1>Idioma y Lengua</h1>
                
            </div>

            <div class="col-sm-6">
                    <a href="Arte/Base.php">

                        <img class="img-fluid shadow p-4 mb-4 tito"   src="../imagenes/Artes.jpg"  style="height: 400px; width:95%;" alt="Title" />
                    </a>
                        <h1>Artes y Dibujo</h1>
                
            </div>


        </div>


    </div>
    <br>
    <br>
<style>
    .tito:hover{
        width: 100% !important;
        height: 420px !important;
        transition: 1s;
    }


</style>
<?php
    include("../Banners/footer.php");
?>