<?php
include_once 'Trabajador.php';
class Piloto extends Trabajador {
    const SUELDO_BASE = 50000;
    const PELIGROSIDAD = 50000;
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
    public function calcularSueldo() {
        $sueldoPilotos = self :: SUELDO_BASE + self :: PELIGROSIDAD + ($this->antiguedad * 10000);
        return "El sueldo anual de este piloto es de {$sueldoPilotos} euros.";
    }

}
?>