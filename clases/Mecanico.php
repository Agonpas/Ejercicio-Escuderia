<?php
include_once 'Trabajador.php';
class Mecanico extends Trabajador {
    private bool $estudios;
   
    public function __construct(string $nombre, string $apellido, int $edad, int $antiguedad, bool $estudios) {
        parent::__construct($nombre, $apellido, $edad, $antiguedad);
        $this->estudios = $estudios;
    }
    public function __toString() {
        return parent::__toString() . PHP_EOL . "El trabajador es un mecánico y " . ($this->estudios ? "tiene estudios de mecánica." : "no tiene estudios de mecánica.");
        
    }
}
?>