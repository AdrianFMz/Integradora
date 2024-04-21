<?php
    include("Banners/header.php");
?>

<!--banner-------------------------------->
<div class="p-5 mb-4 bg-light shadow p-4 mb-4 " style="background: url('<?php echo $urls?>imagenes/banner.jpg') no-repeat center center/cover; height:60vh;">
    <div class="container-fluid col-sm py-5 w-50  bg-dark text-center text-light bg-opacity-50">
        <h1 class="display-3 fw-bold">Bienvenido a Amelia</h1>
        <p class="col-sm-12 fs-4">
        EL PODER DEL CONOCIMENTO ES LA  LLAVE DEL ÉXITO.
        </p>
    </div>
</div>

<div class="container-fluid pt-3">
    <div class="row">

        <div class="col-sm-6">
            
                <img class="card-img-top shadow p-4 mb-4" src="<?php echo $urls?>imagenes/base1.jpg" alt="Title" />
                
                <a class="btn shadow p-4 mb-4 w-100 mt-3 text-light" style="background-color: #1C1F32;" href="<?php echo $urls; ?>cursos/Masusados.php"> <h1>Explorar Cursos</h1></a>
        </div>

        <div class="col-sm-6 ">

        <h1 class="display-1 text-center">¿Quieres aprender algo nuevo?</h1>
        <br>
        <p class="display-6 text-justify mt-3">
            En nuestra plataforma encontrarás una variedad de
            cursos online para todos los niveles e intereses. Desde
            cursos de desarrollo profesional hasta cursos de idiomas o hobbies.
        </p>
        </div>
        

    </div>

</div>



<?php
    include("Banners/footer.php");
?>