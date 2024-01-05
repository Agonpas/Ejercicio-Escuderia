<?php
include_once 'Coche.php';
class Escuderia {
    private string $nombre;
    private int $presupuesto;
    private string $pais;
    private array $coches = array ();

    public function __construct (string $nombre, int $presupuesto, string $pais) {
        $this->nombre = $nombre;
        $this->presupuesto = $presupuesto;
        $this->pais = $pais;
    }
    public function getNombre() : string {
        return $this->nombre;
    }
    public function __toString() {
        return "El nombre de la escudería es $this->nombre. Tiene un presupuesto de $this->presupuesto y representa al pais $this->pais." . PHP_EOL;
    }
    public function agregarCoches(Coche $coche) {
        $this->coches[] = $coche;
    }
    public function mostrarDatos() {
        $contador = 0;
        if (empty($this->coches)) {
            echo "La escuderia $this->nombre no dispone de ningún coche" . PHP_EOL;
        } else {
            foreach ($this->coches as $coche) {
                $contador++;
                echo "La escuderia {$this->nombre} dispone de los siguientes coches" . PHP_EOL . "El coche {$contador} con una poténcia de {$coche->getPotencia()} CV"; // que alcanza una velocidad máxima de {$coche->getVelocidadMax()} ";
            }
        }
    }
}
?>