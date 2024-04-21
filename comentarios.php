
<?php
include("bd.php");

if($_POST){

    //RECOLECTAR LOS DATOS DESDE EL METODO POST
    $Usuario=(isset($_POST["user"])?$_POST["user"]:"");
    $Comentario=(isset($_POST["comentario"])?$_POST["comentario"]:"");
    
    



    //insertar datos en tabla

    $sentencia = $conexion ->prepare("INSERT INTO comentarios (ID_Comentario, Usuario, Comentario) 
                                      VALUES (null,:user,:coment);") ;

    //ASIGNAR LOS VALORES QUE VIENEN DE POST

    $sentencia -> bindParam(":user",$Usuario);
    $sentencia -> bindParam(":coment",$Comentario);



    $sentencia->execute();

    $registro = $sentencia -> fetch(PDO::FETCH_LAZY);

    

    header('Location:index.php');

}



?>


<?php
    include("Banners/header.php");
?>

<div class="comentarios">
  <h1>Comentarios</h1>
  <hr>
  <form class="nuevo-comentario" method="post" enctype="multipart/form-data" >


    <label for="nombre">Usuario:</label>
    <input type="text" id="nombre" name="user">
    <label for="comentario">Comentario:</label>
    <textarea id="comentario" name="comentario"></textarea>


    <button type="submit" class="btn">Enviar comentario</button>



  </form>
  <br>
</div>






<style>
    .comentarios {
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 20px;
}

.comentarios h3 {
  margin-top: 0;
}

.comentarios ul {
  list-style: none;
  padding: 0;
}

.comentarios li.comentario {
  border-bottom: 1px solid #ddd;
  padding: 10px;
  margin-bottom: 10px;
}

.comentarios li.comentario .autor {
  margin-bottom: 5px;
}

.comentarios li.comentario .autor img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.comentarios li.comentario .autor strong {
  font-size: 16px;
}

.comentarios li.comentario p {
  margin-bottom: 0;
}

.comentarios .nuevo-comentario {
  margin-top: 10px;
}

.comentarios .nuevo-comentario label {
  display: block;
  margin-bottom: 5px;
}

.comentarios .nuevo-comentario input,
.comentarios .nuevo-comentario textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
}

.comentarios .nuevo-comentario button {
  margin-top: 10px;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  cursor: pointer;
}
</style>










<?php
    include("Banners/footer.php");
?>