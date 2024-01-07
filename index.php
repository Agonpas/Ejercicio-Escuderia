<?php
include_once 'clases/Escuderia.php';
include_once 'clases/Coche.php';
include_once 'clases/Piloto.php';
include_once 'Clases/Mecanico.php';

$escuderia1 = new Escuderia("Ferrari", 500000, "Italia");
echo $escuderia1;
$coche1 = new Coche(400, 250, "Rojo", 250000);
echo $coche1;

$escuderia1->mostrarDatosCoches();
$escuderia1->agregarCoches(new Coche(400, 250, "Rojo", 250000));
$escuderia1->agregarCoches(new Coche(450, 225, "Verde", 275000));
$escuderia1->mostrarDatosCoches();
$piloto1 = new Piloto("Roberto", "Roble", 32, 2, 170, 64);
echo PHP_EOL;
//echo $piloto1;
echo PHP_EOL;
echo $piloto1->getNombre();
echo PHP_EOL;
echo $piloto1->getAntiguedad();
echo PHP_EOL;
echo $piloto1->getAltura();
echo PHP_EOL;

$escuderia1->mostrarDatosPilotos();
$escuderia1->agregarPilotos(new Piloto("Roberto", "Roble", 32, 2, 170, 64));
$escuderia1->agregarPilotos(new Piloto("Antonio", "Manzano", 25, 1, 165, 60));
$escuderia1->mostrarDatosPilotos();
echo PHP_EOL;
$mecanico1 = new Mecanico("Juan", "Gómez", 45, 3, true);
echo $mecanico1;
echo PHP_EOL;
$escuderia1->mostrarDatosMecanicos();
$escuderia1->agregarMecanicos(new Mecanico("Juan", "Gómez", 45, 3, true));
$escuderia1->agregarMecanicos(new Mecanico("Pedro", "Giraldez", 33, 5, false));
$escuderia1->mostrarDatosMecanicos();

?>