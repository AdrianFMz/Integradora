<?php
    include("../../Banners/header.php");
?>


<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" id="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <h1>  <span class=" d-none d-sm-inline">Secciones</span></h1>
                </a>
                <br>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start text-light" id="menu">
                    <li class="nav-item">
                        <a href="#" id="Tarea" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <h2><span class="ms-1 d-none d-sm-inline">Tareas</span></h2>
                        </a>
                    </li>
                    <br>
                    <li>
                        <a href="#" id="Clases" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i><h2> <span class="ms-1 d-none d-sm-inline">Clases en Linea</span></h2></a>
                    </li>
                    <br>
                    <li>
                        <a href="#" id="Guia" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <h2><span class="ms-1 d-none d-sm-inline">Guia de Estudio</span></h2> </a>
                    </li>
                </ul>
                <hr>
                
            </div>
        </div>


<!------------------------------------------------------Aqui va el desmadre xd---------------------------------------------------->
<div class="col py-3 text-center" id="Cambiador">


<div class="p-5  rounded-3">
<div class="py-5 text-center">
    <img class="d-block mx-auto" src="../../imagenes/Logo2.png" alt="" width="120" height="120">
</div>
    <div class="container-fluid py-5">
        <h1 class="display-1 fw-bold">Bienvenido al área de Actividades</h1>
        <p class="col-md-12 fs-4">
            Por favor, selecciona la categoria con la que deseas iniciar tu aprendizaje
        </p>
        
    </div>
</div>

</div>
<!------------------------------------------------------Aqui termina desmadre xd---------------------------------------------------->

    </div>
</div>

<script>





////asignacion por medio del botton




$(document).ready(function(){
  $("#Tarea").click(function(){
    $("#Cambiador").load('Tareas.php');
  });
});

$(document).ready(function(){
  $("#Clases").click(function(){
    $("#Cambiador").load('ClasesL.php');
  });
});

$(document).ready(function(){
  $("#Guia").click(function(){
    $("#Cambiador").load('GuiaEs.php');
  });

});

/// carga automaticamente la pagina

//$("#Contenido1").load('Mate.php');

</script>

<?php
    include("../../Banners/footer.php");
?>