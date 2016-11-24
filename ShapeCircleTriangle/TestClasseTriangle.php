<?php

require_once 'Classes/Triangle.php';
$p1 = new Point(1.1, 2.2);
$p2 = new Point(2.1, 2.2);
$p3 = new Point(3.1, 2.2);

$monTriangle = new Triangle($p1 , $p2 , $p3);

$monTriangle->getNbPoint();

var_dump($monTriangle);