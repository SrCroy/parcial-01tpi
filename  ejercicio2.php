<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_opcion = $_POST["radio"];
        $_grados = $_POST["grados"];
        if(!empty($_grados) || empty($_opcion)){
            $convertirF = ($_grados * 1.8) + 32;
            $convertirC = ($_grados - 32) * (5/9);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Celcuis</label>
        <input type="radio" name="radio" id="">
        <label for="">Faren</label>
        <input type="radio" name="radio" id="">
        <label for="">Ingrese en celcuis</label>
        <input type="text" name="grados" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if (!empty($convertirC)) {
            echo "Faren a celcuis $convertirC";
        }
        elseif (!empty($convertirF)) {
            echo "F a C $convertirF";
        }
    ?>
</body>
</html>