<?php
function conectar(){
    $host="localhost:3306";
    $user="root";
    $pass="";

    $bd="programacion";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;    
}
?>