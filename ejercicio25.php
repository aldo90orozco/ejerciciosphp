<?php
//clases y objetos
class persona{
    public $nombre;
    public $edad;
    //metodo
    public function asignarNombre($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "hola soy".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}
//herencia

class trabajador extends persona{
    public $puesto;
    public $salario;

    public function presentarsePuesto(){
        echo "hola soy ".$this->nombre." y soy  un ".$this->puesto;
    }
}


//creamos una instancia de la clase persona

$objTrabajador= new trabajador();
$objTrabajador->asignarNombre("Juan Perez");
$objTrabajador->puesto=("programador junior");
$objTrabajador->presentarsePuesto();

?>