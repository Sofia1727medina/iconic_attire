<?php

include'conexion.php';
$con = conectar();

$nombre = $_POST["nombre"];
$documento = $_POST["documento"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

if(!empty($nombre) && !empty($documento) && !empty($correo) && !empty($contrasena)){
   
    $sql = "INSERT INTO usuario VALUES('$nombre', '$documento', '$correo', '$contrasena')";
    $query = mysqli_query($con, $sql);
   
   if($query){
       header("Location: index.php");
   }else{
       error_log("No insertado");
   }
   
}else{
   echo("Diligencie todos los campos");
}
?>