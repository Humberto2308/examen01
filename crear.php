<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST ["nombre"];
    $cantidad = $_POST ["cantidad"];
    $producto = $_POST ["producto"];

    $sql = "INSERT INTO clientes (nombre, cantidad, producto) VALUES ('$nombre', '$cantidad','$producto')";

    if ($conn-> query($sql) === TRUE) {
        echo "cliente agregado correctamente";
}
else {
    echo "error " . $sql . "<br>" . $conn->error;
}}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear cliente</title>
</head>
<body>
    <form method="post" action="crear.php">
        Nombre:<input type="text" name="nombre" > <br>
        Producto:<input type="text" name="producto"> <br>
        Cantidad:<input type="text" name="cantidad"> <br>
        <input type="submit" value="Agregar Cliente">
    </form>
</body>
</html>