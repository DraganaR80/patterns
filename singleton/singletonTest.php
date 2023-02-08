<?php
require("singletonLogin.php");

$username = "stasa";
$password = "stasa123";

$instanca1 = SingletonLogin::getInstance($username, $password);
$korisnik1 = $instanca->korisnik();
print_r($korisnik1);


$instanca2 = SingletonLogin::getInstance($username, $password);
$korisnik2 = $instanca->korisnik();
print_r($korisnik2);

if ($instanca1=== $instanca2){


    echo " U pitanju je ista instanca <br>";
}else{
    echo " Kreirano  je vise instanci <br>";

}

if ($korisnik1=== $korisnik2){


    echo " U pitanju je isti korisnik <br>";
}else{
    echo " Kreirano  je dva korisnika. <br>";

}

?>