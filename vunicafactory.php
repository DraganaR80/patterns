<?php

class VunicaFactory{

    public function kreiraj($proizvodjac, $sastav, $metraza)
    {
        return new Vunica ($proizvodjac, $sastav, $metraza);

    }
}







?>