<?php
require 'claseVehiculo.php';
session_start();

$vehiculos = $_SESSION['vehiculos'];

unset($vehiculos);
array_values($vehiculos); 

$_SESSION['vehiculos'] = $vehiculos;

header("Location: listaVehiculos.php");

?>