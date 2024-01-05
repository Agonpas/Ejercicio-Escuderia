<?php
class Coche {
    private int $potencia;
    private int $velocidadMax;
    private string $color;
    private int $precio;

    public function __construct(int $potencia, int $velocidadMax, string $color, int $precio) {
        $this->potencia = $potencia;
        $this->velocidadMax = $velocidadMax;
        $this->color = $color;
        $this->precio = $precio;
    }
    /*getters*/
    public function getPotencia() : int  {
        return $this->potencia;
    }
    public function getVelocidadMax() : int  {
        return $this->velocidadMax;
    }
    public function getColor() : string  {
        return $this->color;
    }
    public function getPrecio() : int  {
        return $this->precio;
    }
    public function __toString() {
        return "Este coche tiene una potencia de $this->potencia CV, una velocidad máxima de $this->velocidadMax km/h, el color es $this->color y su precio asciende a $this->precio euros." . PHP_EOL;
    }
}
?>