<?php
class SingletonLogin{
//staticka promenljiva uvek je imamo u singletonu
    private static $instance = null;
    private $username;
    private $password;

    // ptivat constructor isto mora da ima
private function __construct($username, $password){

        $this->username = $username;
        $this->password = $password;

}

// static metoda getInstance konvencija da je tako zovemo

public static function getInstance($username, $password){

if(self::$instance==null){

            self::$instance = new SingletonLogin($username, $password);
}


        return self::$instance;

}
public function korisnik(){

        return $this->username;
}
}





?>