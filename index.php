<?php
    session_start();
    if(!isset($_SESSION['vehiculos'])){
        $_SESSION['vehiculos'] = [];
      }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>
</head>
<body>
    <h1>Taller</h1>
    <div>
        <p><a href="listaVehiculos.php">Vehiculos</a></p>
        
    </div>
</body>
</html>