<?php
$frutas=array("manzana","pera","banana","kiwi");

//acceder a cada elemento del arreglo con el metodo count para saber la longitud
for($i=0;$i<count($frutas);$i++){

    echo $frutas[$i]."<br>";
}

//acceder a cada elemento del arreglo utilizando for each

foreach($frutas as $indice=>&$valor){


    echo "El valor ".$valor." se encuentra en el indice ".$indice."<br>";

}
?>