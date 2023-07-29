<?php 
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];

$sql="SELECT * FROM lenguaje WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LENGUAJES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/parcial.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
    
        <div class='color2'>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Referencia</th>
                        <th>NOMBRE</th>
                        <th>Tipo</th>
                        <th>Fecha Publicación</th>
                        <th>País Origen</th>
                        <th>Empresa</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <th><?php  echo $row['referencia']?></th>
                        <th><?php  echo $row['nombre']?></th>
                        <th><?php  echo $row['tipo']?></th>
                        <th><?php  echo $row['fecha_publicacion']?></th>
                        <th><?php  echo $row['pais_origen']?></th>
                        <th><?php  echo $row['empresa']?></th>
                                                                
                    </tr>
                    <?php 
                        }
                    ?>
                    
                </tbody>

            </table>    
        </div>

        <div class='color'><br><h1></h1>
        <form name="form1" action="buscarnombre.php" method="POST">
            <table>
            <tr><td><input type="submit" value="Buscar otro" name="submit" /></td></tr>
            </table>
        </form>
        </div>

    </body>
</html>