
<?php 
include("bd.php");

//Corrobora que no este vacio el campo
if(isset($_GET['txtID'])){

    //Nuevamente corrabora, en caso de que si, se hace lo de abajo, en caso de que no, manda un string vacio ''
    $txtID = (isset($_GET['txtID']))?$_GET['txtID']:"";

    //Script del SQL para hacer un delete
    $sentencia = $conexion -> prepare( 'DELETE FROM Registros WHERE ID_Usuario =:id' );

    //Se igualan los parametros para que los lea SQL
    $sentencia -> bindParam(":id",$txtID);
    //Se ejecuta la instruccion
    $sentencia -> execute();
    //Recalea la pagina


    header("Location:Admin.php");


    
}

if(isset($_GET['txtID2'])){

  //Nuevamente corrabora, en caso de que si, se hace lo de abajo, en caso de que no, manda un string vacio ''
  $txtID = (isset($_GET['txtID2']))?$_GET['txtID2']:"";

  //Script del SQL para hacer un delete
  $sentencia = $conexion -> prepare( 'DELETE FROM Comentarios WHERE ID_Comentario =:id' );

  //Se igualan los parametros para que los lea SQL
  $sentencia -> bindParam(":id",$txtID);
  //Se ejecuta la instruccion
  $sentencia -> execute();
  //Recalea la pagina


  header("Location:Admin.php");


  
}


//CONSULTA DE LOS VALORES registros

$sentencia = $conexion -> prepare("SELECT * FROM Registros");
$sentencia -> execute();

$lista_registros = $sentencia -> fetchAll(PDO::FETCH_ASSOC);


//consulta de valores comentarios

$sentencia = $conexion -> prepare("SELECT * FROM Comentarios");
$sentencia -> execute();

$lista_comentarios = $sentencia -> fetchAll(PDO::FETCH_ASSOC);

?>

<?php
    include("Banners/header.php");
?>
<br>
<div class="container" id="Edicion" >
    <h1>Administración de usuarios</h1>
    <br>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Usuario</th>
          <th scope="col">Correo</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>

                    <?php
                        foreach($lista_registros as $registro){
                    ?>
        <tr>
          <td><?php echo $registro['ID_Usuario']?></td>
          <td><?php echo $registro['Nombre']?></td>
          <td><?php echo $registro['Usuario']?></td>
          <td><?php echo $registro['Correo']?></td>
          <td><?php echo $registro['Contraseña']?></td>
          <td>
            <a type="button" href="Edits/EditarUsuario.php?txtID=<?php echo $registro['ID_Usuario'];?>" class="btn btn-primary btn-sm editores">Editar</a>
            <a type="button" href="Admin.php?txtID=<?php echo $registro['ID_Usuario'];?>" class="btn btn-danger btn-sm">Eliminar</a>
          </td>
        </tr>
                    <?php
                        }
                    ?>
        </tbody>
    </table>

</div>

<br>
<hr>
<br>


<div class="container" >
    <h1>Administración de Comentarios  <button class="btn" id="MostrarC">Mostrar</button></h1>
    <br>

    <table id="Coment" class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          
          <th scope="col">Usuario</th>
          <th scope="col">Comentario</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>

                    <?php
                        foreach($lista_comentarios as $registro2){
                    ?>
        <tr>
          <td><?php echo $registro2['ID_Comentario']?></td>
          <td><?php echo $registro2['Usuario']?></td>
          <td><?php echo $registro2['Comentario']?></td>
          <td>
            <a type="button" href="Admin.php?txtID2=<?php echo $registro2['ID_Comentario'];?>" class="btn btn-danger btn-sm">Eliminar</a>
          </td>
        </tr>
                    <?php
                        }
                    ?>
        </tbody>
    </table>
  </div>
    



<br>
<br>

<script>




$(document).ready(function(){
 
    $("#Coment").hide();
  
});

$(document).ready(function(){
  $("#MostrarC").click(function(){
    $("#Coment").toggle(1000);
  });
});



</script>

  <?php
    include("Banners/footer.php");
?>