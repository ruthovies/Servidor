<?php
class Persona {
    public $nombre;
    public $apellido;
    public $edad;
    
    public function saludar(){
        return 'Hola, soy ' . $this->nombre . ' ' . $this->apellido . ' y
        tengo ' . $this->edad . ' años ';
        }

         public function __construct() {
        echo 'Se acaba de crear el objeto persona <br>';
         }
}
?>