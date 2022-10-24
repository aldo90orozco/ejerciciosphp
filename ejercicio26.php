<?php
//clases y objetos
class persona{
    public $nombre;
    public $edad;
    protected $altura;
    //metodo
    public function asignarNombre($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=32;
        return $this->edad;
    }

    public function mostrarTrabajo(){
        $this->nuevoTrabajo="Profesor";
        
    }

    //asignacion de propiedades mediante constructor
    function _construct($nuevoTrabajo){
        $this->nuevoTrabajo=$nuevoTrabajo;
    }

}

//creamos una instancia de la clase persona
$objAlumno= new persona();
$objAlumno->asignarNombre("aldo");
$objAlumno->imprimirNombre();



?>