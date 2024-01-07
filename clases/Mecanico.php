<?php
include_once 'Trabajador.php';
class Mecanico extends Trabajador {
    const SUELDO_BASE = 50000;
    private bool $estudios;
   
    public function __construct(string $nombre, string $apellido, int $edad, int $antiguedad, bool $estudios) {
        parent::__construct($nombre, $apellido, $edad, $antiguedad);
        $this->estudios = $estudios;
    }
    public function __toString() {
        return parent::__toString() . PHP_EOL . "El trabajador es un mecánico y " . ($this->estudios ? "tiene estudios de mecánica." : "no tiene estudios de mecánica.");   
    }
    public function getEstudios(){
        return ($this->estudios ? "El mecánico dispone de estudios de mecánica" : "El mecánico no dispone de estudios en mecánica");
    }
    public function calcularSueldo(){
        $sueldoMecanico = self :: SUELDO_BASE + ($this->antiguedad * 10000);
        return "El suedo anual de este mecánico es de {$sueldoMecanico} euros.";
    }
}
?>