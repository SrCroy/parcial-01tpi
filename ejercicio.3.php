<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Producto: </label>
        <input type="text" name="producto" id="">
        <label for="">Precio: </label>
        <input type="text" name="precio" id="">
        <br>
        <Label>Cantidad: </Label>
        <input type="text" name="cantidad">
        <input type="submit" value="Enviar">
    </form>    
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $producto = $_POST["producto"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];
        if (!empty($producto) || !empty($cantidad) || !empty($precio)) {
            
        }
    }
?>