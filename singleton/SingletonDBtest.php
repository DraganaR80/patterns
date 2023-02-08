<?php
require "SingletonDB.php";
$instance = SingletonDB::getInstance();
$conn1 = $instanca->getConnection;
var_dump($conn1);

$instanca2 = SingletonDB::getInstance();
$conn2= $instanca2->getConnection();
var_dump($conn2);


?>