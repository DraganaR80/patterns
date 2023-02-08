<?php

class Vunica
{
    private $proizvodjac;
    private $sastav;

    private $metraza;

    public function __construct($proizvodjac ,$sastav, $metraza){

        $this->proizvodjac = $proizvodjac;
        $this->sastav = $sastav;
        $this->metraza = $metraza;


    }

   public function ispisiVunicu()
   {


    return "Vrsta vunice: " . $this->proizvodjac . '; Sastav: ' . $this->sastav . "Metraza:' . $this->metraza '<br>'";


   }


}







?>