<?php
include_once 'Coche.php';
include_once 'Piloto.php';
include_once 'Mecanico.php';

class Escuderia {
    private string $nombre;
    private int $presupuesto;
    private string $pais;
    private array $coches = array ();
    private array $pilotos = array ();

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
    public function agregarPilotos(Piloto $piloto) {
        $this->pilotos[] = $piloto;
    }
    public function agregarMecanicos(Mecanico $mecanico){
        $this->mecanicos[] = $mecanico;
    }
    public function mostrarDatosCoches() {
        if (empty($this->coches)) {
            echo "La escuderia $this->nombre no dispone de ningún coche." . PHP_EOL;
        } else {
            echo "La escuderia {$this->nombre} dispone de los siguientes coches" . PHP_EOL; 
            foreach ($this->coches as $indice => $coche) {
                echo " + El coche " . $indice + 1 . ": " . PHP_EOL . "- Poténcia de {$coche->getPotencia()} CV." . PHP_EOL . "- Velocidad máxima de {$coche->getVelocidadMax()} km/h." . PHP_EOL . "- El color del coche es de {$coche->getColor()}" . PHP_EOL . "- El precio del vehiculo es de {$coche->getPrecio()} euros." . PHP_EOL; 
            }
        }
    }

    public function mostrarDatosPilotos() {
        if (empty($this->pilotos)) {
            echo "La escuderia $this->nombre no dispone de ningún piloto." . PHP_EOL;
        } else {
            echo "La escuderia {$this->nombre} dispone de los siguientes pilotos" . PHP_EOL;
            foreach ($this->pilotos as $indice => $piloto) {
                echo " + El piloto " . $indice + 1 . ": " . PHP_EOL . "- Nombre: {$piloto->getNombre()}." . PHP_EOL . "- Apellido: {$piloto->getApellido()}." . PHP_EOL . "- Tiene una edad de {$piloto->getEdad()} años" . PHP_EOL . "- Lleva en la escudería {$piloto->getAntiguedad()} años." . PHP_EOL . "- La altura es de {$piloto->getAltura()} cm." . PHP_EOL . "- El peso es de {$piloto->getPeso()} kg.". PHP_EOL; 
            }
        }
    }
    public function mostrarDatosMecanicos() {
        if (empty($this->mecanicos)) {
            echo "La escuderia $this->nombre no dispone de mecánicos." .PHP_EOL;
        } else {
            echo "La escuderia $this->nombre tiene en su plantilla los siguientes mecánicos" . PHP_EOL;
            foreach ($this->mecanicos as $indice => $mecanico) {
                echo " + El mecácinco ". $indice + 1 . ": " . PHP_EOL . "- Nombre: {$mecanico->getNombre()}." . PHP_EOL . "- Apellido: {$mecanico->getApellido()}." . PHP_EOL . "- Tiene una edad de {$mecanico->getEdad()} años." . PHP_EOL . "- Lleva en la escudería {$mecanico->getAntiguedad()} años." . PHP_EOL . "- Titulación: {$mecanico->getEstudios()}" . PHP_EOL;
            }
        }

    }
}
?>