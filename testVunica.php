<?php


include "vunicafactory.php";

$factory = new VunicaFactory();
$vunica1 = $factory->kreiraj('Alize', 'baby best','150');
$vunica2=$factory ->kreiraj("Alize",'cotton gold','250');



print_r($vunica1->ispisiVunicu());
print_r($vunica2->ispisiVunicu());


?>