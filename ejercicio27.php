<?php
//metodos estaticos se pueden llamar sin tener una instancia

class Pokemon{
    public static function metodoEsPokemon(){
        echo "Hola soy un pokemon";
    }
}

$nuevoPokemon= new Pokemon();

$nuevoPokemon->metodoEsPokemon();

//llamar a metodos estaticos

Pokemon::metodoEsPokemon();
?>