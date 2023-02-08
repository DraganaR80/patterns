<?php


include "automobilFactory.php";

$factory = new AutomobilFactory();
$vozilo1 = $factory->kreiraj('BMW', 'X5');
$vozilo2=$factory ->kreiraj("M2",'model12');



print_r($vozilo1->ispisiMarkuModel());
print_r($vozilo2->ispisiMarkuModel());


?>