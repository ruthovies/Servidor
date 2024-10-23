<?php

//Esta clase requiere a Vehiculo
require_once("Vehiculo.php");

//Hereda de Vehiculo
class Cuatro_Ruedas extends Vehiculo{
    private $cilindrada;

    public function __construct($color, $peso, $cilindrada){
        parent::__construct($color,$peso); //Parent: Los atributos vienen de la clase padre(Vehiculo)
        $this -> $cilindrada = $cilindrada;
    }

    //Getter y setter
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;
    }

    public function poner_gasolina($litros){
        $this->litros = $litros;
    }
}

?>