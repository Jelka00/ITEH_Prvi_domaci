<?php
//Unos podataka o stazi u bazu kroz AJAX validaciju naziva
require 'connection.php';
require_once 'model/skipas.php';
require_once 'model/skijasi.php';
$skijasi = new Skijasi();
$skipas = new Skipas();
if (isset($_POST['imeprezime'])) {

    // Provera da li je naziv vlasnika prazan
    if (!empty($_POST['imeprezime'])) {

        // Sigurnosna provera da nije neki html
        $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['imeprezime']));
        $skipas_id = mysqli_real_escape_string($conn, htmlspecialchars($_POST['skipas_id']));
        $season = mysqli_real_escape_string($conn, htmlspecialchars($_POST['sezona']));
        $duration = mysqli_real_escape_string($conn, htmlspecialchars($_POST['trajanje']));
        $type = mysqli_real_escape_string($conn, htmlspecialchars($_POST['tip']));
        //Pretraga id korisnika pomocu naziva
        $result = $skijasi->getSkijasID($conn, $name);
        //Pretvaranje id korisnika u jedn vrednost
        $user_id = $result->fetch_array()[0] ?? '';
        echo "<script>alert('$user_id');</script>";

        // Ubacivanje podataka u bazu
        $insert_query = $skipas->add($conn, $skipas_id, $season, $duration, $type,$user_id);
        //$insert_query = mysqli_query($conn, "INSERT INTO staze(naziv_staze,duzina_staze,kategorija,opis_staze) VALUES('$track_name','$track_length','$category','$description')");

        //Provera da li su podaci ubaceni
        if ($insert_query) {
            echo "<script>alert('Podaci ubaceni!');window.location.href = 'posts.php';</script>";
            exit;
        } else {
            echo "<h3>Podaci nisu ubaceni!</h3>";
        }
    } else {
        echo "<h4>Popunite sva polja!</h4>";
    }
}
