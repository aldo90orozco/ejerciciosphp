<?php
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma=$valorA+$valorB;

    echo $suma;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        <label for="">Primer numero</label>
        <input type="text" name="valorA" id="">
        <br>
        <label for="">Segundo numero</label>
        <input type="text" name="valorB" id="">

        <input type="submit" value="Calcular">

    </form>
</body>
</html>