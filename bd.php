<?php 
    
$servidor = "localhost"; //:puerto si tiene el preterminado no se ponen los ":puerto"
$baseDeDatos = "Datos";
$usuario = "root";
$contraseña = "";



try {

    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contraseña);

} catch (Exception $ex){

    echo $ex->getMessage();

}


?>