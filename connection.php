<?php
//Parametri baze podataka
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "iteh_prvi_domaci";

//Povezivanje sa bazom podataka
$conn = mysqli_connect($servername, $username, $password, $db_name);

//Provera konekcije sa bazom
if(!$conn){
    die("Neuspesno povezivanje sa bazom: ". mysqli_connect_error());
}
?>