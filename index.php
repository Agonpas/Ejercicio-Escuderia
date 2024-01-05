<?php
include_once 'clases/Escuderia.php';
include_once 'clases/Coche.php';

$escuderia1 = new Escuderia("Ferrari", 500000, "Italia");
echo $escuderia1;
$coche1 = new Coche(400, 250, "Rojo", 250000);
echo $coche1;

$escuderia1->agregarCoches(new Coche(400, 250, "Rojo", 250000));
$escuderia1->mostrarDatos();
?>