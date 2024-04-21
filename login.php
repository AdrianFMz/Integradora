<?php

include("bd.php");







?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"  crossorigin="anonymous" />
</head>
<body>
  <div class="d-flex justify-content-center align-items-center vh-100" style="background-color: rgb(6, 82, 133);">
    <div class="fs-2 fw-bold  fst-italic" style="margin-right: 200; height:200px; position: fixed; top:0;margin-top:50px; color: white;">
        -Amelia-
    </div>

    <div class=" p-5 rounded-5 text-secondary shadow" style="width: 25rem; background-color: rgb(85, 193, 230); margin-top: 50px;">
        <div class="text-center fs-2 fw-bold" style="color: white;">¡Hola de Nuevo!</div>
    <br>
      <div class="d-flex justify-content-center">
        <i class='bx bxs-user bx-lg' style="color: white;"></i>
      </div>
      


      <form action="" method="post" enctype="multipart/form-data">


        <div class="input-group mt-4">
          <input name="Nombre" class="form-control fw-semibold bg-light text-center fs-5" type="text" placeholder="Usuario"/>
        </div>
        
        <div class="input-group  mt-2">
          <input name="Contra" class="form-control fw-semibold bg-light text-center fs-5" type="password" placeholder="Contraseña" />
        </div>
      

        
        
        
        
        <input class="btn btn-info text-white w-75 mt-4 fw-semibold shadow-sm" value="Acceder" type="submit" style="border-radius: 80px; margin-left: 40px;"/>
        
        
      </form>

        <div class="d-flex justify-content-around mt-2">
            <div class="pt-1">
            <a href="Registro.php" class="  fw-semibold fst-italic" style="font-size: 0.9rem; color: white;">Crear Cuenta</a>
            </div>
        </div>


    </div>
</div>
    
</body>
</html>