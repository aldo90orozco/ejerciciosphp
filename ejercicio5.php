<?php
if($_POST){

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

echo "Hola como estas ".$nombre." ".$apellido;//concatenacion de string con el uso de punto

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="">
        <br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>