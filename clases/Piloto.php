<?php
include_once 'Trabajador.php';
class Piloto extends Trabajador {
    private int $altura;
    private int $peso;

    public function __construct(string $nombre, string $apellido, int $edad, int $antiguedad, int $altura, int $peso) {
        parent::__construct($nombre, $apellido, $edad, $antiguedad);
        $this->altura = $altura;
        $this->peso = $peso;
    }
    public function __toString() {
        return parent::__toString() . "El trabajador es un piloto y su altura es {$this->altura} cm y su peso es de {$this->peso} kg.";
    }
    /*getters*/
    public function getAltura(): int {
        return $this->altura;
    }
    public function getPeso(): int {
        return $this->peso;
    }
    
}
?>