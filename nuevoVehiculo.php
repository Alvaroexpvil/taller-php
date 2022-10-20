<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Vehiculo</title>
    <link rel="stylesheet" href="../estilo.css">
</head>

<body>
    <h1>Nuevo Vehiculo</h1>

    <a class="" href="listaVehiculos.php"><button>Volver</button></a>

    <form action="altaVehiculo.php" method="post">
        <label for="isbn">Matricula</label>
        <input type="text" name="matricula">

        <br />

        <label for="marca">Marca</label>
        <input type="text" name="marca">

        <br />

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo">

        <br />

        <label for="color">Color</label>
        <input type="text" name="color">
        <br />
        <label for="revisado">Revisado</label>
        <input type="text" name="revisado">
        <br />
        <br />

        <button type="submit" value="enviar">Añadir vehiculo</button>

    </form>
</body>

</html>