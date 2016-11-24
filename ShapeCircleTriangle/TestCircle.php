<?php
require_once 'Classes/Circle.php';

$monCercle = new Circle(/*$inCenter, $inRadius*/);
$monPoint = new Point(999.22, 999.11);
//$monCercle->addPoint($monPoint);
//$monCercle->addPoint($monPoint);    // cette ligne n'a aucun effet

$monCercle->setCenter($monPoint);
$leCentre = $monCercle->getCenter();

$monPoint = new Point(888.22, 888.11);
$monCercle->setCenter($monPoint);

var_dump($monCercle);