<?php
//clases y objetos
class persona{
    public $nombre;
    public $edad;
    //metodo
    public function asignarNombre($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }
}

//creamos una instancia de la clase persona
$objAlumno= new persona();

$objAlumno->asignarNombre("Aldo");

echo $objAlumno->nombre;

?>