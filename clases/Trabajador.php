<?php
abstract class Trabajador {
    const SUELDO_BASE = 50000;
    protected string $nombre;
    protected string $apellido;
    protected int $edad;
    protected int $antiguedad;

    public function __construct(string $nombre, string $apellido, int $edad, int $antiguedad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->antiguedad = $antiguedad;
    }
    public function __toString() {
        return "El nombre del trabajador es {$this->nombre} y su apellido {$this->apellido}, tiene {$this->edad} años de edad y lleva {$this->antiguedad} años en la escuderia.";
    }
    /*getters*/
    public function getNombre(): string {
        return $this->nombre;
    }
    public function getApellido(): string {
        return $this->apellido;
    }
    public function getEdad(): int {
        return $this->edad;
    }
    public function getAntiguedad(): int {
        return $this->antiguedad;
    }
    abstract public function calcularSueldo();
}
?>