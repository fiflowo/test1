<?php
require_once("Classes/Point.php");

/////// Corps du programme
$pointA = new Point(0.0, 0.0);
$pointB = new Point(1.5, 0.0);

$distance = $pointA->distanceToPoint($pointB);
echo "La distance entre les deux points est $distance \n";

