<?php

//Esta clase requiere a Vehiculo
require_once("Vehiculo.php");

//Hereda de Vehiculo
class Cuatro_Ruedas extends Vehiculo{
    private $num_puertas;

    public function __construct($color, $peso, $num_puertas){
        parent::__construct($color,$peso); //Parent: Los atributos vienen de la clase padre(Vehiculo)
        $this -> $num_puertas = $num_puertas;
    }
    
    //Getter y Setter
    public function getNum_puertas()
    {
        return $this->num_puertas;
    }

    public function setNum_puertas($num_puertas)
    {
        $this->num_puertas = $num_puertas;
    }

    public function repintar($color){
        $this->color = $color;
        echo "El vehiculo se ha pintado de color: ".$this->color;
    }

    public function __toString()
    {
        return "Numero puertas: " .$this->numero_puertas."<br>";
    }
}
?>