<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM lenguaje";
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
        <div class='color'><br><h1>INGRESO DE DATOS</h1>
        <form name="form1" action='insertar.php' method="POST">
            <table>
            <tr><td><input type='number' name='referencia' required placeholder="Referencia"/></td></tr>
            <tr><td><input type='text' name='nombre' required placeholder="Nombre"/></td></tr>
            <tr><td><input type='text' name='tipo' required placeholder="Tipo"/></td></tr>
            <tr><td><input type='text' name='fecha_publicacion' required placeholder="Fecha de publicación"/></td></tr>
            <tr><td><input type='text' name='pais_origen' required placeholder="País de origen"/></td></tr>
            <tr><td><input type='text' name='empresa' required placeholder="Empresa"/></td></tr>
            <tr><td><input type="submit" value="Registrar" name="submit" /></td></tr>
            </table>
        </form>
        </div>
        <br>
        <br>
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

    </body>
</html>