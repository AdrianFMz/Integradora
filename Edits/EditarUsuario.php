<?php 
  include("../bd.php");
    //CODIGO PARA MANDAR A LLAMAR LOS VALORES SELECCIONADOS
  //Corrobora que no este vacio el campo
  if(isset($_GET['txtID'])){
  
      //Nuevamente corrabora, en caso de que si, se hace lo de abajo, en caso de que no, manda un string vacio ''
      $txtID = (isset($_GET['txtID']))?$_GET['txtID']:"";
  
      //Script del SQL para hacer un delete
      $sentencia = $conexion -> prepare( 'SELECT * FROM Registros WHERE ID_Usuario =:id' );
  
      //Se igualan los parametros para que los lea SQL
      $sentencia -> bindParam(":id",$txtID);
      //Se ejecuta la instruccion
      $sentencia -> execute();

        

      $registro = $sentencia -> fetch(PDO::FETCH_LAZY);
      $Nombre = $registro["Nombre"];
      $Usuario = $registro["Usuario"];
      $correo = $registro["Correo"];
      $contra = $registro["Contraseña"];

      
      
  }

  if($_POST){

    //RECOLECTAR LOS DATOS DESDE EL METODO POST
    $nombre=(isset($_POST["Nombre"])?$_POST["Nombre"]:"");
    $nombreUsuario=(isset($_POST["User"])?$_POST["User"]:"");
    $correo=(isset($_POST["Correo"])?$_POST["Correo"]:"");
    $contrasena=(isset($_POST["Contra"])?$_POST["Contra"]:"");
    



    //insertar datos en tabla

    $sentencia = $conexion ->prepare("UPDATE registros  
                                      SET Nombre = :nombre, Usuario = :user, Correo = :mail, Contraseña = :contra
                                      WHERE ID_Usuario = :id;") ;

    //ASIGNAR LOS VALORES QUE VIENEN DE POST

    $sentencia -> bindParam(":nombre",$nombre);
    $sentencia -> bindParam(":user",$nombreUsuario);
    $sentencia -> bindParam(":mail",$correo);
    $sentencia -> bindParam(":contra",$contrasena);
    $sentencia -> bindParam(":id", $txtID);


    $sentencia->execute();

    $registro = $sentencia -> fetch(PDO::FETCH_LAZY);

    

    header('Location:../Admin.php');

}



?>

<?php
    include("../Banners/header.php");
?>

<div class="card">
    <div class="card-header">Datos del Usuario</div>
    <div class="card-body">


        <form action="" method="post" enctype="multipart/form-data">

            


        <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" value="<?php echo $Nombre?>" class="form-control" name="Nombre" id="username" aria-describedby="helpId" placeholder="Nombre"/>
            </div>


                <div class="mb-3">
                <label  class="form-label">Usuario:</label>
                <input type="text" value="<?php echo $Usuario?>" class="form-control" name="User" id="username" aria-describedby="helpId" placeholder="Usuario"/>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Correo:</label>
                <input type="email" value="<?php echo $correo?>" class="form-control" name="Correo" id="correo" aria-describedby="helpId" placeholder="Correo"/>
            </div>

            <div class="mb-3">
                <label  class="form-label">Contraseña:</label>
                <input type="text" value="<?php echo $contra?>" class="form-control" name="Contra" id="contraseña" aria-describedby="helpId" placeholder="Contraseña"/>
            </div>
            
            
            <button type="submit" class="btn btn-success">
                Agregar
            </button>
            <a  name="" href="../Admin.php" class="btn btn-danger" role="button">Cancelar</a>
            
        </form>

    </div>

</div>
