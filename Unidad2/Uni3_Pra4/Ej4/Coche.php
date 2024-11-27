<?php

//Esta clase requiere a Cuatro_Ruedas
require_once("Cuatro_Ruedas.php");

//Hereda de Cuatro_Ruedas
class Coche extends Cuatro_Ruedas{
    private $numero_cadenas_nieve;

    public function __construct($color, $peso,$numero_puertas, $numero_cadenas_nieve){//Debemos añadir los atributos de la clase hija
        parent::__construct($color, $peso, $numero_puertas); //Parent: Los atributos vienen de la clase padre(Vehiculo)
        $this -> $numero_cadenas_nieve = $numero_cadenas_nieve;
    }

        //Getter y Setter
    public function getNumero_cadenas_nieve()
    {
        return $this->numero_cadenas_nieve;
    }
    public function setNumero_cadenas_nieve($numero_cadenas_nieve)
    {
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;

    }

    public function añadir_cadenas_nieve($numero_cadenas_nieve){
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }

    public function quitar_cadenas_nieve($numero_cadenas_nieve){
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }
}
?>