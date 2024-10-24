<?php

//Esta clase requiere a Cuatro_Ruedas
require_once("Cuatro_Ruedas.php");

//Hereda de Cuatro_Ruedas
class Camion extends Cuatro_Ruedas{
    private $longitud;

    public function __construct($color, $peso,$numero_puertas, $longitud){//Debemos añadir los atributos de la clase hija
        parent::__construct($color, $peso, $numero_puertas); //Parent: Los atributos vienen de la clase padre(Vehiculo)
        $this -> $longitud = $longitud;
    }

    public function getLongitud()
    {
        return $this->longitud;
    }

    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;
    }

    public function añadir_remolque($longitud_remolque){
        $this->longitud_remolque = $longitud_remolque;
    }
}
?>