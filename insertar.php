<?php
include("conexion.php");
$con=conectar();
 
$referencia=$_POST['referencia'];
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$fecha_publicacion=$_POST['fecha_publicacion'];
$pais_origen=$_POST['pais_origen'];
$empresa=$_POST['empresa'];

$sql = "INSERT INTO lenguaje VALUES('$referencia', '$nombre', '$tipo', '$fecha_publicacion', '$pais_origen', '$empresa')";

$query= mysqli_query($con, $sql);

if($query){
    Header("Location: registro.php");
    
}else {
}
?>