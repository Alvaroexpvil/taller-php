<?php
require 'claseVehiculo.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Vehiculos</title>
</head>

<body>
    <h1>Listado de Vehiculos</h1>

  

    <table border="1">
        <tr>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Revisado</th>
        </tr>

        <?php

        echo "<br/>";

        $vehiculos = $_SESSION['vehiculos'];

    
            
        foreach ($vehiculos as $i => $vehiculo) {

            echo "<tr>";

            echo "<td>" . $vehiculo->get_matricula() . "</td>";
            echo "<td>" . $vehiculo->get_marca() . "</td>";
            echo "<td>" . $vehiculo->get_modelo() . "</td>";
            echo "<td>" . $vehiculo->get_color() . "</td>";
            echo "<td>" . $vehiculo->get_revisado() . "</td>";

            echo "<td>";
            echo "<form action='modificarVehiculo.php' method='post'>";
            echo "<input type='submit' value='Modificar'></button>";
            echo "<input type='hidden' name='posicion_vehiculo' value=" . $i . ">";
            echo "</form>";
            echo "</td>";
 
            echo "<td>";
            echo "<form action='borrarVehiculo.php' method='post'>";
            echo "<input type='submit' value='Borrar'></button>";
            echo "<input type='hidden' name='posicion_vehiculo' value=" . $i . ">";
            echo "</form>";
            echo "</td>";

            echo "<td>";
            echo "<form action='revisaVehiculo.php' method='post'>";
            echo "<input type='submit' value='Revisado'></button>";
            echo "<input type='hidden' name='posicion_vehiculo' value=" . $i . ">";
            echo "</form>";
            echo "</td>";

            echo "</tr>";
        }
   
        ?>

    </table>
    <br/>
    <br/>
    <a href="nuevoVehiculo.php">Nuevo Vehiculo</a>
    <a href="eliminarTodos.php">Eliminar todos</a>
</body>

</html>