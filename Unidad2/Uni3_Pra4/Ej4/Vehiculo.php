<?php

class Vehiculo
{
    public $color;
    public $peso;

    //Constructor

    public function __construct($color, $peso)
    {
        $this ->color = $color;
        $this ->peso = $peso;
    }

    //Getters y Setters

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    //Metodos

    public function circula(){
        echo "El vehiculo circula.<br>";
    }

    public function añadir_persona($peso_persona){
        $this -> peso += $peso_persona;
    }

//Metodo toString

    public function __toString()
    {
        return "Color y peso: " .$this->color. " y " .$this->peso. "<br>";
    }
}
?>