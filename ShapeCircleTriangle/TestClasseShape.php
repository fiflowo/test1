<?php
require_once("Classes/Shape.php");
$maForme = new Shape();
$unPoint = new Point(0.0, 5.2);
$maForme->addPoint($unPoint);
$maForme->addPoint($unPoint);
$maForme->addPoint($unPoint);
var_dump($maForme);